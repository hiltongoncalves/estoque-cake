<?php
/* Sale Test cases generated on: 2010-05-01 11:05:43 : 1272723463*/
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