<?php
/* Product Test cases generated on: 2010-05-01 11:05:32 : 1272722552*/
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