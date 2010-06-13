<?php
/**
 * Products Controller
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
class ProductsController extends AppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'Products';
/**
 * Paginate
 *
 * @var array
 * @access public
 */
	public $paginate = array(
		'limit' => 10,
		'order' => array(
			'Product.id' => 'asc'
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
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}
/**
 * view
 *
 * @return void
 * @access public
 */
	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido', true), 'Produto'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}
/**
 * add
 *
 * @return void
 * @access public
 */
	public function add() {
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
/**
 * edit
 *
 * @return void
 * @access public
 */
	public function edit($id = null) {
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
/**
 * delete
 *
 * @return void
 * @access public
 */
	public function delete($id = null) {
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