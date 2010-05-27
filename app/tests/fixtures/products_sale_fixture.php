<?php
/* ProductsSale Fixture generated on: 2010-05-27 18:05:16 : 1274994616 */
class ProductsSaleFixture extends CakeTestFixture {
	var $name = 'ProductsSale';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sale_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'amount' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'product_id' => 2,
			'sale_id' => 1,
			'amount' => 5
		),
		array(
			'id' => 2,
			'product_id' => 3,
			'sale_id' => 2,
			'amount' => 5
		),
		array(
			'id' => 3,
			'product_id' => 4,
			'sale_id' => 2,
			'amount' => 5
		),
		array(
			'id' => 4,
			'product_id' => 1,
			'sale_id' => 2,
			'amount' => 5
		),
		array(
			'id' => 5,
			'product_id' => 2,
			'sale_id' => 3,
			'amount' => 5
		),
		array(
			'id' => 6,
			'product_id' => 3,
			'sale_id' => 4,
			'amount' => 5
		),
		array(
			'id' => 7,
			'product_id' => 4,
			'sale_id' => 5,
			'amount' => 5
		),
		array(
			'id' => 8,
			'product_id' => 1,
			'sale_id' => 5,
			'amount' => 5
		),
	);
}
?>