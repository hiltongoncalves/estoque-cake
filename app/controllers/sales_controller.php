<?php
class SalesController extends AppController {

	var $name = 'Sales';
	var $uses = array('Sale', 'Product', 'ProductsSale');
	var $paginate = array(
			'limit' => 10,
			'order' => array(
				'Sale.created' => 'desc'
			)
	);

	function admin_index() {
		if ($this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas funcionários possuem acesso ao módulo de vendas.');
			$this->redirect(array('admin' => false, 'controller' => 'pages', 'action' => 'display', 'home'));
		}
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());		
	}

	function admin_view($id = null) {
		if ($this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas funcionários possuem acesso ao módulo de vendas.');
			$this->redirect(array('admin' => false, 'controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválida', true), 'Venda'));
			$this->redirect(array('action' => 'index'));
		}
		$quantidades = $this->ProductsSale->find('all', array('conditions' => array('sale_id' => $id)));
		$sale = $this->Sale->read(null, $id);
		$this->set(compact('sale', 'quantidades'));
	}

	function admin_add() {
		if ($this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas funcionários possuem acesso ao módulo de vendas.');
			$this->redirect(array('admin' => false, 'controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!empty($this->data)) {
			$this->Sale->create();
			if ($this->data['Product']['Product']) {
				if ($this->Sale->save($this->data)) {
					$idVenda = $this->Sale->id;
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
					$this->Session->setFlash(sprintf(__('A %s foi confirmada', true), 'venda'));
					$this->redirect(array('action' => 'view', $idVenda));
				} else {
					$this->Session->setFlash(sprintf(__('A %s não pôde ser salva. Por favor, tente novamente.', true), 'venda'));
				}
			} else {
				$this->Session->setFlash(sprintf(__('A %s não pôde ser salva. Por favor, tente novamente.', true), 'venda'));
			}
		}
		$users = $this->Sale->User->find('list');
		$products = $this->Sale->Product->find('list');
		$this->set(compact('users', 'products'));
	}

	function admin_edit($id = null) {
		if ($this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas funcionários possuem acesso ao módulo de vendas.');
			$this->redirect(array('admin' => false, 'controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválida', true), 'Venda'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sale->save($this->data)) {
				$idVenda = $this->Sale->id;
				$this->Session->setFlash(sprintf(__('A %s foi salva', true), 'venda'));
				$this->redirect(array('action' => 'view', $idVenda));
				} else {
					$this->Session->setFlash(sprintf(__('A %s não pôde ser salva. Por favor, tente novamente.', true), 'venda'));
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
		if ($this->Auth->user('admin')) {
			$this->Session->setFlash('Apenas funcionários possuem acesso ao módulo de vendas.');
			$this->redirect(array('admin' => false, 'controller' => 'pages', 'action' => 'display', 'home'));
		}
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'sale'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sale->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deletada', true), 'Venda'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não foi deletada', true), 'Venda'));
		$this->redirect(array('action' => 'index'));
	}
}
?>