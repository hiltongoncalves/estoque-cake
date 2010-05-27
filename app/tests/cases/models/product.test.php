<?php
/* Product Test cases generated on: 2010-05-27 18:05:05 : 1274994485*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.user', 'app.sale', 'app.products_sale');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
?>