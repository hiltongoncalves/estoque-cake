<?php
class AppController extends Controller {
	var $components = array('Auth', 'Session');
	var $helpers = array('Html', 'Form', 'Time', 'Session');
	
	function beforeFilter() {
		$this->set('usuario', $this->Auth->user('name'));
		$this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('admin' => true, 'controller' => 'users', 'action' => 'add');
	}
}
?>
