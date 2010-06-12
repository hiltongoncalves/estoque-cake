<?php
class GroupsController extends AppController {

	var $name = 'Groups';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->authError = 'Você não está autorizado a acessar essa área!';
		//$this->Auth->allowedActions = array('*');
	}

	function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'group'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Group->create();
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'group'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'group'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'group'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'group'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'group'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Group->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'group'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Group->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Group'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Group'));
		$this->redirect(array('action' => 'index'));
	}
}
?>