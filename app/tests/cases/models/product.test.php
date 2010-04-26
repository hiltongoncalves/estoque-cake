<?php
/* Product Test cases generated on: 2010-04-26 09:04:20 : 1272286160*/
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