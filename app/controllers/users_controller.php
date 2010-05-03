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
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
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
					$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
				}
		}
	}

	function admin_edit($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de usuários.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'user'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'User'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'User'));
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
