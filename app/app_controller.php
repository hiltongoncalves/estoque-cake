<?php
class AppController extends Controller {
	var $components = array('Auth', 'Session');
	var $helpers = array('Html', 'Form', 'Time', 'Session');
	
	function beforeFilter() {
		$this->set('usuario', $this->Auth->user());
		if ($this->Auth->user('User.admin')) {
			$this->Auth->loginRedirect = array('admin' => true, 'controller' => 'products', 'action' => 'index');
		} else {
			$this->Auth->loginRedirect = array('admin' => true, 'controller' => 'sales', 'action' => 'index');
		}
		$this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		
		$this->Auth->authError = 'Área Restrita! Efetue login!'; // Mensagem ao entrar em area restrita
		$this->Auth->loginError = 'Nome de usuário ou senha não conferem!'; // Mensagem quando não se autenticar
	}
}
?>
