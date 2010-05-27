<?php
/* Sales Test cases generated on: 2010-05-27 18:05:39 : 1274994519*/
App::import('Controller', 'Sales');

class TestSalesController extends SalesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SalesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sale', 'app.user', 'app.product', 'app.products_sale');

	function startTest() {
		$this->Sales =& new TestSalesController();
		$this->Sales->constructClasses();
	}

	function endTest() {
		unset($this->Sales);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>