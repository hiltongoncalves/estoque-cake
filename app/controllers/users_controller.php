<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'User.id' => 'asc'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allowedActions = array('*');
	}

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido', true), 'Usuário'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo', true), 'usuário'));
				$this->redirect(array('action' => 'index'));
			} else {
				if (!$this->data['User']['password'] == $this->data['User']['password_confirm']) {
					$this->Session->setFlash(sprintf(__('A senha não coincide com a confirmação.', true)));
				}
				$this->data['User']['password'] = null;
				$this->data['User']['password_confirm'] = null;
				$this->Session->setFlash(sprintf(__('O %s não pôde ser salvo. Por favor, tente novamente.', true), 'usuário'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido', true), 'Usuário'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo', true), 'usuário'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pôde ser salvo. Por favor, tente novamente.', true), 'usuário'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function desativar($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Id inválido para o %s', true), 'usuário'));
			$this->redirect(array('action'=>'index'));
		}
		$this->User->id = $id;
		if ($this->User->saveField('status', 0)) {
			$this->Session->setFlash(sprintf(__('%s desativado', true), 'Usuário'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não foi desativado', true), 'Usuário'));
		$this->redirect(array('action' => 'index'));
	}
	
	function ativar($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Id inválido para o %s', true), 'usuário'));
			$this->redirect(array('action'=>'index'));
		}
		$this->User->id = $id;
		if ($this->User->saveField('status', 1)) {
			$this->Session->setFlash(sprintf(__('%s ativado', true), 'Usuário'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não foi ativado', true), 'Usuário'));
		$this->redirect(array('action' => 'index'));
	}
	
	function login() {
		if ($this->Session->read('Auth.User')) {
			$this->Session->setFlash('Você está autenticado!');
			$this->redirect('/admin/users/index', null, false);
		}
	}
	
	function logout() {
		$this->Session->setFlash('Logout realizado com sucesso!');
		$this->redirect($this->Auth->logout());
		$this->Session->destroy();
	}
}
?>