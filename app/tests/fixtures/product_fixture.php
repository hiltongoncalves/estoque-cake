<?php
/* Product Fixture generated on: 2010-06-14 18:06:54 : 1276551114 */
class ProductFixture extends CakeTestFixture {
	var $name = 'Product';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '12,2'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'amount' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'description' => 'CAMERA DIGITAL',
			'price' => 199.50,
			'user_id' => 1,
			'amount' => 9
		),
		array(
			'id' => 2,
			'description' => 'FILMADORA',
			'price' => 999.50,
			'user_id' => 1,
			'amount' => 60
		),
		array(
			'id' => 3,
			'description' => 'NOTEBOOK',
			'price' => 1999.50,
			'user_id' => 2,
			'amount' => 70
		),
		array(
			'id' => 4,
			'description' => 'MONITOR LCD 15',
			'price' => 399.50,
			'user_id' => 1,
			'amount' => 40
		),
	);
}
?>