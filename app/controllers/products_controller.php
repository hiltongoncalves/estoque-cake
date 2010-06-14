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
 * Components
 *
 * @var array
 * @access public
 */
	public $components = array(
		'Search.Prg',
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
			'Product.id' => 'asc'
		)
	);
/**
 * presetVars for search plugin
 *
 * @var array
 * @access public
 * @todo fazer reconhecer um field range
 */
	public $presetVars = array(
		array(
			'field' => 'title',
			'type' => 'value',
		),
		array(
			'field' => 'range',
			'type' => 'value',
		),
	);
/**
 * Before execute controller actions
 *
 * @return void
 * @access public
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->authError = sprintf(__('You are not authorized to access this area!', true));
	}
/**
 * find
 *
 * @return void
 * @access public
 */
	public function find() {
		$this->Prg->commonProcess();
		$this->paginate['conditions'] = $this->Product->parseCriteria($this->passedArgs);
		$this->set('products', $this->paginate());
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
			$this->Session->setFlash(sprintf(__('Invalid %s', true), __('Product', true)));
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
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), __('product', true)));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), __('product', true)));
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
			$this->Session->setFlash(sprintf(__('Invalid %s', true), __('Product', true)));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), __('product', true)));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), __('product', true)));
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
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), __('product', true)));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), __('Product', true)));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), __('product', true)));
		$this->redirect(array('action' => 'index'));
	}
}
?>