<?php
/**
 * Application Controller
 *
 * This file is the base controller of all other controllers
 *
 * PHP version 5
 *
 * @category Controllers
 * @package estoque-cake
 * @subpackage estoque-cake.app
 * @version 2.0
 * @author Vitor Pacheco Costa <vitor-p.c@hotmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class AppController extends Controller {

/**
 * Components
 *
 * @var array
 * @access public
 */
	public $components = array(
		'Acl',
		'Auth',
		'Session',
		'DebugKit.Toolbar'
	);
/**
 * Helpers
 *
 * @var array
 * @access public
 */
	public $helpers = array(
		'Html',
		'Form',
		'Time',
		'Session',
		'Ajax',
		'Javascript'
	);
	
/**
 * beforeFilter
 *
 * Before execute controller action
 *
 * @return void
 * @access public
 */
	public function beforeFilter() {
		$this->Auth->authorize = 'actions';
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'display', 'home');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		$this->Auth->authError = 'Área Restrita! Efetue login!'; // Mensagem ao entrar em area restrita
		$this->Auth->loginError = 'Nome de usuário ou senha não conferem!'; // Mensagem quando não se autenticar
		$this->Auth->actionPath = 'controllers/';
		$this->Auth->allowedActions = array('logout', 'display', 'initDB', 'login', 'build_acl');
	}

	function build_acl() {
		if (!Configure::read('debug')) {
			return $this->_stop();
		}
		$log = array();

		$aco =& $this->Acl->Aco;
		$root = $aco->node('controllers');
		if (!$root) {
			$aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
			$root = $aco->save();
			$root['Aco']['id'] = $aco->id;
			$log[] = 'Created Aco node for controllers';
		} else {
			$root = $root[0];
		}

		App::import('Core', 'File');
		$Controllers = Configure::listObjects('controller');
		$appIndex = array_search('App', $Controllers);
		if ($appIndex !== false ) {
			unset($Controllers[$appIndex]);
		}
		$baseMethods = get_class_methods('Controller');
		$baseMethods[] = 'buildAcl';

		$Plugins = $this->_getPluginControllerNames();
		$Controllers = array_merge($Controllers, $Plugins);

		// Vasculha cada controller em app/controllers
		foreach ($Controllers as $ctrlName) {
			$methods = $this->_getClassMethods($this->_getPluginControllerPath($ctrlName));

			// Considera todos os plugins primeiro
			if ($this->_isPlugin($ctrlName)){
				$pluginNode = $aco->node('controllers/'.$this->_getPluginName($ctrlName));
				if (!$pluginNode) {
					$aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginName($ctrlName)));
					$pluginNode = $aco->save();
					$pluginNode['Aco']['id'] = $aco->id;
					$log[] = 'Criado nó ACO para ' . $this->_getPluginName($ctrlName) . ' Plugin';
				}
			}
			// Procura/cria um nó para o controller
			$controllerNode = $aco->node('controllers/'.$ctrlName);
			if (!$controllerNode) {
				if ($this->_isPlugin($ctrlName)){
					$pluginNode = $aco->node('controllers/' . $this->_getPluginName($ctrlName));
					$aco->create(array('parent_id' => $pluginNode['0']['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginControllerName($ctrlName)));
					$controllerNode = $aco->save();
					$controllerNode['Aco']['id'] = $aco->id;
					$log[] = 'Criado nó ACO para ' . $this->_getPluginControllerName($ctrlName) . ' ' . $this->_getPluginName($ctrlName) . ' Plugin Controller';
				} else {
					$aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
					$controllerNode = $aco->save();
					$controllerNode['Aco']['id'] = $aco->id;
					$log[] = 'Criado nó ACO para ' . $ctrlName;
				}
			} else {
				$controllerNode = $controllerNode[0];
			}

			// Limpa os métodos para remover aqueles da classe Controller bem como as actions privadas.
			foreach ($methods as $k => $method) {
				if (strpos($method, '_', 0) === 0) {
					unset($methods[$k]);
					continue;
				}
				if (in_array($method, $baseMethods)) {
					unset($methods[$k]);
					continue;
				}
				$methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
				if (!$methodNode) {
					$aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
					$methodNode = $aco->save();
					$log[] = 'Criado nó ACO para '. $method;
				}
			}
		}
		if(count($log)>0) {
			debug($log);
		}
	}

	function _getClassMethods($ctrlName = null) {
		App::import('Controller', $ctrlName);
		if (strlen(strstr($ctrlName, '.')) > 0) {
			// Controller de plugin
			$num = strpos($ctrlName, '.');
			$ctrlName = substr($ctrlName, $num+1);
		}
		$ctrlclass = $ctrlName . 'Controller';
		return get_class_methods($ctrlclass);
	}

	function _isPlugin($ctrlName = null) {
		$arr = String::tokenize($ctrlName, '/');
		if (count($arr) > 1) {
			return true;
		} else {
			return false;
		}
	}

	function _getPluginControllerPath($ctrlName = null) {
		$arr = String::tokenize($ctrlName, '/');
		if (count($arr) == 2) {
			return $arr[0] . '.' . $arr[1];
		} else {
			return $arr[0];
		}
	}

	function _getPluginName($ctrlName = null) {
		$arr = String::tokenize($ctrlName, '/');
		if (count($arr) == 2) {
			return $arr[0];
		} else {
			return false;
		}
	}

	function _getPluginControllerName($ctrlName = null) {
		$arr = String::tokenize($ctrlName, '/');
		if (count($arr) == 2) {
			return $arr[1];
		} else {
			return false;
		}
	}

/**
 * Obtém os nomes dos controllers de plugin...
 *
 * Este método irá retornar um array com os nomes dos controllers de plugin e também
 * assegurar que os controllers estejam disponíveis para que possamos obter os nomes
 * dos métodos fazendo um App::import para cada controller de plugin.
 *
 * @return array com nomes de controllers de plugin.
 *
 */
	function _getPluginControllerNames() {
		App::import('Core', 'File', 'Folder');
		$paths = Configure::getInstance();
		$folder =& new Folder();
		$folder->cd(APP . 'plugins');

		// Obtém a lista de plugins
		$Plugins = $folder->read();
		$Plugins = $Plugins[0];
		$arr = array();

		// Varre todos os plugins
		foreach($Plugins as $pluginName) {
			// Entra no diretório do plugin
			$didCD = $folder->cd(APP . 'plugins'. DS . $pluginName . DS . 'controllers');
			// Obtém uma lista de arquivos cujo nome termine com
			// controller.php
			$files = $folder->findRecursive('.*_controller\.php');

			// Varre os controllers encontrados no diretório de plugins
			foreach($files as $fileName) {
				// Pega o nome do arquivo em si
				$file = basename($fileName);

				// Pega o nome do controller
				$file = Inflector::camelize(substr($file, 0, strlen($file)-strlen('_controller.php')));
				if (!preg_match('/^'. Inflector::humanize($pluginName). 'App/', $file)) {
					if (!App::import('Controller', $pluginName.'.'.$file)) {
						debug('Erro ao importar o arquivo '.$file.' do plugin '.$pluginName);
					} else {
						// Agora prefixa o nome do plugin...
						// É necessário para podermos obter os nomes dos métodos.
						$arr[] = Inflector::humanize($pluginName) . "/" . $file;
					}
				}
			}
		}
		return $arr;
	}


}
?>
