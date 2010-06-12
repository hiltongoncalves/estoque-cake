<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'Product.id' => 'asc'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->authError = 'Você não está autorizado a acessar essa área!';
	}

	function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido', true), 'Produto'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function add() {
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

	function edit($id = null) {
		$this->set('product', $this->Product->read(null, $id));
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

	function delete($id = null) {
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