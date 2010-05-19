<?php
/* User Fixture generated on: 2010-05-19 14:05:38 : 1274288558 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
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

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Administrador',
			'phone' => '',
			'address' => '',
			'admin' => 1,
			'username' => 'admin',
			'password' => 'd01e94c2b5e45b246769b5659a9d4a17f1072c63',
			'status' => 1
		),
		array(
			'id' => 2,
			'name' => 'Funcionário',
			'phone' => '',
			'address' => '',
			'admin' => 0,
			'username' => 'funcionario',
			'password' => 'e4a6f8abea229a9b16ba301fa67641a1a1d2c01a',
			'status' => 1
		),
		array(
			'id' => 3,
			'name' => 'João',
			'phone' => '',
			'address' => '',
			'admin' => 0,
			'username' => 'joao',
			'password' => 'e4a6f8abea229a9b16ba301fa67641a1a1d2c01a',
			'status' => 0
		),
	);
}
?>