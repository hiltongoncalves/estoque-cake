<?php
/* Sale Fixture generated on: 2010-05-19 14:05:38 : 1274288558 */
class SaleFixture extends CakeTestFixture {
	var $name = 'Sale';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'created' => '2010-02-26 09:56:30'
		),
		array(
			'id' => 2,
			'user_id' => 1,
			'created' => '2010-03-02 17:03:58'
		),
		array(
			'id' => 3,
			'user_id' => 1,
			'created' => '2010-03-09 17:34:40'
		),
		array(
			'id' => 4,
			'user_id' => 1,
			'created' => '2010-03-16 17:34:53'
		),
		array(
			'id' => 5,
			'user_id' => 1,
			'created' => '2010-03-25 17:36:11'
		),
	);
}
?>