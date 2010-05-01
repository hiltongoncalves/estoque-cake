<?php
/* Product Fixture generated on: 2010-05-01 11:05:31 : 1272722551 */
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
			'description' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'user_id' => 1,
			'amount' => 1
		),
	);
}
?>