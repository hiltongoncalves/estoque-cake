<?php
/* ProductsSale Test cases generated on: 2010-05-17 20:05:10 : 1274139430*/
App::import('Model', 'ProductsSale');

class ProductsSaleTestCase extends CakeTestCase {
	var $fixtures = array('app.products_sale', 'app.product', 'app.user', 'app.sale');

	function startTest() {
		$this->ProductsSale =& ClassRegistry::init('ProductsSale');
	}

	function endTest() {
		unset($this->ProductsSale);
		ClassRegistry::flush();
	}

}
?>