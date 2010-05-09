<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'Product.id' => 'asc'
		)
	);

	function admin_index() {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de produtos.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de produtos.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido', true), 'Produto'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function admin_add() {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de produtos.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo', true), 'produto'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pôde ser salvo. Por favor, tente novamente.', true), 'produto'));
			}
		}
		$users = $this->Product->User->find('list');
		$sales = $this->Product->Sale->find('list');
		$this->set(compact('users', 'sales'));
	}

	function admin_edit($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de produtos.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido', true), 'Produto'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo', true), 'produto'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pôde ser salvo. Por favor, tente novamente.', true), 'produto'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$users = $this->Product->User->find('list');
		$sales = $this->Product->Sale->find('list');
		$this->set(compact('users', 'sales'));
	}

	function admin_delete($id = null) {
		if (!$this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas administradores possuem acesso ao módulo de produtos.');
			$this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Id inválido para o %s', true), 'produto'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deletado', true), 'Produto'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não foi deletado', true), 'Produto'));
		$this->redirect(array('action' => 'index'));
	}
}
?>