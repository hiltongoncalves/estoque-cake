<?php
/* Sale Test cases generated on: 2010-05-27 18:05:56 : 1274994476*/
App::import('Model', 'Sale');

class SaleTestCase extends CakeTestCase {
	var $fixtures = array('app.sale', 'app.user', 'app.product', 'app.products_sale');

	function startTest() {
		$this->Sale =& ClassRegistry::init('Sale');
	}

	function endTest() {
		unset($this->Sale);
		ClassRegistry::flush();
	}

}
?>