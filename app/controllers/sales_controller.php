<?php
class SalesController extends AppController {

	var $name = 'Sales';
	var $uses = array('Sale', 'Product');

	function index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'sale'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sale', $this->Sale->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sale->create();
			if ($this->Sale->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'sale'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'sale'));
			}
		}
		$users = $this->Sale->User->find('list');
		$products = $this->Sale->Product->find('list');
		$this->set(compact('users', 'products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'sale'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sale->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'sale'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'sale'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sale->read(null, $id);
		}
		$users = $this->Sale->User->find('list');
		$products = $this->Sale->Product->find('list');
		$this->set(compact('users', 'products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'sale'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sale->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Sale'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Sale'));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'sale'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sale', $this->Sale->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Sale->create();
			if ($this->Sale->save($this->data)) {
					$i = 0;
					foreach ($this->data['Product'] as $product):
						foreach ($product as $id):
						$atualproduct = $this->Product->findById($id);
						$atualproduct['Product']['amount']--;
						$this->Product->id = $atualproduct['Product']['id'];
						$this->Product->saveField('amount', $atualproduct['Product']['amount']);
						$i++;
						endforeach;
					endforeach;
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'sale'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'sale'));
			}
		}
		$users = $this->Sale->User->find('list');
		$products = $this->Sale->Product->find('list');
		$this->set(compact('users', 'products'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'sale'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sale->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'sale'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'sale'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sale->read(null, $id);
		}
		$users = $this->Sale->User->find('list');
		$products = $this->Sale->Product->find('list');
		$this->set(compact('users', 'products'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'sale'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sale->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Sale'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Sale'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
