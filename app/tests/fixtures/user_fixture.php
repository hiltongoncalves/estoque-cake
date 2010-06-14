<?php
/* User Fixture generated on: 2010-06-14 18:06:54 : 1276551114 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'username', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'admin',
			'password' => 'd01e94c2b5e45b246769b5659a9d4a17f1072c63',
			'group_id' => 1,
			'created' => '2010-06-12 14:08:12',
			'modified' => '2010-06-12 14:08:12'
		),
		array(
			'id' => 2,
			'username' => 'gerente',
			'password' => 'e4a6f8abea229a9b16ba301fa67641a1a1d2c01a',
			'group_id' => 2,
			'created' => '2010-06-12 14:08:22',
			'modified' => '2010-06-12 14:08:22'
		),
		array(
			'id' => 3,
			'username' => 'funcionario',
			'password' => 'e4a6f8abea229a9b16ba301fa67641a1a1d2c01a',
			'group_id' => 3,
			'created' => '2010-06-12 14:08:31',
			'modified' => '2010-06-12 14:08:31'
		),
	);
}
?>