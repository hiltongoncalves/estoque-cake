<?php
/* ArosAco Fixture generated on: 2010-06-14 18:06:54 : 1276551114 */
class ArosAcoFixture extends CakeTestFixture {
	var $name = 'ArosAco';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'aro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'aco_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'aro_id' => 1,
			'aco_id' => 1,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 2,
			'aro_id' => 2,
			'aco_id' => 1,
			'_create' => '-1',
			'_read' => '-1',
			'_update' => '-1',
			'_delete' => '-1'
		),
		array(
			'id' => 3,
			'aro_id' => 2,
			'aco_id' => 29,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 4,
			'aro_id' => 2,
			'aco_id' => 8,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 5,
			'aro_id' => 3,
			'aco_id' => 1,
			'_create' => '-1',
			'_read' => '-1',
			'_update' => '-1',
			'_delete' => '-1'
		),
		array(
			'id' => 6,
			'aro_id' => 3,
			'aco_id' => 22,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
		array(
			'id' => 7,
			'aro_id' => 3,
			'aco_id' => 5,
			'_create' => '1',
			'_read' => '1',
			'_update' => '1',
			'_delete' => '1'
		),
	);
}
?>