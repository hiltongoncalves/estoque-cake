<?php
class AppController extends Controller {
	
	var $components = array('Auth', 'Session', 'DebugKit.Toolbar');
	var $helpers = array('Html', 'Form', 'Time', 'Session', 'Ajax');
	
	/*
	 * Product Model
	 * 
	 * @var Product
	 */
	var $Product;
	
	/*
	 * Sale Model
	 * 
	 * @var Sale
	 */
	var $Sale;
	
	/*
	 * User Model
	 * 
	 * @var User
	 */
	var $User;
		
	/*
	 * AuthComponent
	 * 
	 * @var AuthComponent
	 */
	var $Auth;
	
	/*
	 * SessionComponent
	 * 
	 * @var SessionComponent
	 */
	var $Session;
	
	function beforeFilter() {
		$this->set('usuario', $this->Auth->user());
		$this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'display', 'home');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		$this->Auth->authError = 'Área Restrita! Efetue login!'; // Mensagem ao entrar em area restrita
		$this->Auth->loginError = 'Nome de usuário ou senha não conferem!'; // Mensagem quando não se autenticar
		$this->Auth->userScope = array('User.status' => 1);
	}
}
?>
