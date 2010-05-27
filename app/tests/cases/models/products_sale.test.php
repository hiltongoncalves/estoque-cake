<?php
/* ProductsSale Test cases generated on: 2010-05-27 18:05:01 : 1274994481*/
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