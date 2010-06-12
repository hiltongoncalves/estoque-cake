<?php
class UsersController extends AppController {

	var $name = 'Users';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->authError = 'Você não está autorizado a acessar essa área!';
		//$this->Auth->allowedActions = array('*');
	}

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'user'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
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
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
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
			$this->redirect('/users/index', null, false);
		}
	}

	function logout() {
		$this->Auth->authError = null;
		$this->Session->setFlash('Logout realizado com sucesso!');
		$this->redirect($this->Auth->logout());
		$this->Session->destroy();
	}

	function initDB() {
		$group =& $this->User->Group;

		// Permissão total aos admins
		$group->id = 1;
		$this->Acl->allow($group, 'controllers');

		// Permissão parcial para gerentes
		$group->id = 2;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Users');
		$this->Acl->allow($group, 'controllers/Products');

		// Permissão somente para vendas para funcionarios
		$group->id = 3;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Sales');
		$this->Acl->allow($group, 'controllers/ProductsSales');
	}
}
?>