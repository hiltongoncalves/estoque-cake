<?php
/* ProductsSales Test cases generated on: 2010-05-27 18:05:29 : 1274994509*/
App::import('Controller', 'ProductsSales');

class TestProductsSalesController extends ProductsSalesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductsSalesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sale', 'app.user', 'app.product', 'app.products_sale');

	function startTest() {
		$this->ProductsSales =& new TestProductsSalesController();
		$this->ProductsSales->constructClasses();
	}

	function endTest() {
		unset($this->ProductsSales);
		ClassRegistry::flush();
	}

	function testAdminAdd() {

	}

}
?>