<?php
/* ProductsSales Test cases generated on: 2010-05-17 13:05:03 : 1274112723*/
App::import('Controller', 'ProductsSales');

class TestProductsSalesController extends ProductsSalesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductsSalesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.products_sale');

	function startTest() {
		$this->ProductsSales =& new TestProductsSalesController();
		$this->ProductsSales->constructClasses();
	}

	function endTest() {
		unset($this->ProductsSales);
		ClassRegistry::flush();
	}

}
?>