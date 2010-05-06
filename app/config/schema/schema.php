<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2010-05-06 12:05:23 : 1273161443*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $products = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '12,2'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'amount' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	var $products_sales = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sale_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	var $sales = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200),
		'admin' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 4),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
}
?>