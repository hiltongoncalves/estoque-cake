<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'User.id' => 'asc'
		)
	);

	function admin_index() {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido', true), 'Usuário'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!empty($this->data)) {
				$this->User->create();
				if ($this->User->save($this->data)) {
					$this->Session->setFlash(sprintf(__('O %s foi salvo', true), 'usuário'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(sprintf(__('O %s não pôde ser salvo. Por favor, tente novamente.', true), 'usuário'));
				}
		}
	}

	function admin_edit($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
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

	function admin_desativar($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
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
	
	function admin_ativar($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
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