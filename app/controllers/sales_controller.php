<?php
/**
 * Sales Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package estoque-cake
 * @subpackage estoque-cake.app
 * @version 2.0
 * @author Vitor Pacheco Costa <vitor-p.c@hotmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class SalesController extends AppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'Sales';
/**
 * Models used by the Controller
 *
 * @var array
 * @access public
 */
	public $uses = array(
		'Sale',
		'ProductsSale'
	);
/**
 * Paginate
 *
 * @var array
 * @access public
 */
	public $paginate = array(
			'limit' => 10,
			'order' => array(
				'Sale.created' => 'desc'
			)
	);
/**
 * Before execute controller actions
 *
 * @return void
 * @access public
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->authError = 'Você não está autorizado a acessar essa área!';
	}
/**
 * index
 *
 * @return void
 * @access public
 */
	public function index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());		
	}
/**
 * view
 *
 * @return void
 * @access public
 */
	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválida', true), 'Venda'));
			$this->redirect(array('action' => 'index'));
		}
		$quantidades = $this->ProductsSale->find('all', array('conditions' => array('sale_id' => $id)));
		$sale = $this->Sale->read(null, $id);
		$this->set(compact('sale', 'quantidades'));
	}
/**
 * add
 *
 * @return void
 * @access public
 */
	public function add() {
		if (!empty($this->data)) {
			$this->Sale->create();
			if ($this->data['Product']['Product']) {
				if ($this->Sale->save($this->data)) {
					$idVenda = $this->Sale->id;
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
/**
 * edit
 *
 * @return void
 * @access public
 */
	public function edit($id = null) {
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
/**
 * delete
 *
 * @return void
 * @access public
 */
	public function delete($id = null) {
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