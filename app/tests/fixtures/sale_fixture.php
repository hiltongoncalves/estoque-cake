<?php
/* Sale Fixture generated on: 2010-06-14 11:06:55 : 1276524415 */
class SaleFixture extends CakeTestFixture {
	public $name = 'Sale';

	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	public $records = array(
		array(
			'id' => 1,
			'user_id' => 3,
			'created' => '2009-12-26 09:56:30',
		),
		array(
			'id' => 2,
			'user_id' => 3,
			'created' => '2010-01-09 17:34:40',
		),
		array(
			'id' => 3,
			'user_id' => 3,
			'created' => '2010-04-30 17:36:48',
		),
		array(
			'id' => 4,
			'user_id' => 3,
			'created' => '2010-06-14 12:31:12',
		),
	);
}
?>