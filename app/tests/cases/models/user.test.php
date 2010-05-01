<?php
/* User Test cases generated on: 2010-05-01 13:05:32 : 1272730352*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.product', 'app.sale', 'app.products_sale');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>