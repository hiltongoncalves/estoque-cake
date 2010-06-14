<?php
/* Aro Fixture generated on: 2010-06-14 11:06:55 : 1276524415 */
class AroFixture extends CakeTestFixture {
	public $name = 'Aro';

	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'id' => 1,
			'parent_id' => null,
			'model' => 'Group',
			'foreign_key' => 1,
			'alias' => null,
			'lft' => 1,
			'rght' => 4,
		),
		array(
			'id' => 2,
			'parent_id' => null,
			'model' => 'Group',
			'foreign_key' => 2,
			'alias' => null,
			'lft' => 5,
			'rght' => 8,
		),
		array(
			'id' => 3,
			'parent_id' => null,
			'model' => 'Group',
			'foreign_key' => 3,
			'alias' => null,
			'lft' => 9,
			'rght' => 12,
		),
		array(
			'id' => 4,
			'parent_id' => 1,
			'model' => 'User',
			'foreign_key' => 1,
			'alias' => null,
			'lft' => 2,
			'rght' => 3,
		),
		array(
			'id' => 5,
			'parent_id' => 2,
			'model' => 'User',
			'foreign_key' => 2,
			'alias' => null,
			'lft' => 6,
			'rght' => 7,
		),
		array(
			'id' => 6,
			'parent_id' => 3,
			'model' => 'User',
			'foreign_key' => 3,
			'alias' => null,
			'lft' => 10,
			'rght' => 11,
		),
	);
}
?>