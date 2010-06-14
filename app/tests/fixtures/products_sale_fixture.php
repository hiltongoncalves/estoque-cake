<?php
/* ProductsSale Fixture generated on: 2010-06-14 11:06:55 : 1276524415 */
class ProductsSaleFixture extends CakeTestFixture {
	public $name = 'ProductsSale';

	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sale_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'amount' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $records = array(
		array(
			'id' => 1,
			'product_id' => 3,
			'sale_id' => 1,
			'amount' => 1,
		),
		array(
			'id' => 2,
			'product_id' => 4,
			'sale_id' => 2,
			'amount' => 2,
		),
		array(
			'id' => 3,
			'product_id' => 1,
			'sale_id' => 2,
			'amount' => 1,
		),
		array(
			'id' => 4,
			'product_id' => 2,
			'sale_id' => 3,
			'amount' => 3,
		),
		array(
			'id' => 5,
			'product_id' => 1,
			'sale_id' => 3,
			'amount' => 2,
		),
		array(
			'id' => 6,
			'product_id' => 4,
			'sale_id' => 3,
			'amount' => 1,
		),
		array(
			'id' => 7,
			'product_id' => 3,
			'sale_id' => 4,
			'amount' => 1,
		),
		array(
			'id' => 8,
			'product_id' => 1,
			'sale_id' => 4,
			'amount' => 2,
		),
		array(
			'id' => 9,
			'product_id' => 2,
			'sale_id' => 4,
			'amount' => 5,
		),
		array(
			'id' => 10,
			'product_id' => 4,
			'sale_id' => 4,
			'amount' => 5,
		),
	);
}
?>