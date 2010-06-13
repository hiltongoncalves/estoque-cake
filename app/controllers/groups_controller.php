<?php
/**
 * Groups Controller
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
class GroupsController extends AppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'Groups';
/**
 * beforeFilter
 * 
 * Before execute controller actions
 *
 * @return void
 * @access public
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->authError = 'Você não está autorizado a acessar essa área!';
		//$this->Auth->allowedActions = array('*');
	}
/**
 * index
 *
 * @return void
 * @access public
 */
	public function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}
/**
 * view
 *
 * @return void
 * @access public
 */
	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'group'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}
/**
 * add
 *
 * @return void
 * @access public
 */
	public function add() {
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
/**
 * edit
 *
 * @return void
 * @access public
 */
	public function edit($id = null) {
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
/**
 * delete
 *
 * @return void
 * @access public
 */
	public function delete($id = null) {
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