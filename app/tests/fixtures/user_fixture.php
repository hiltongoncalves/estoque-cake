<?php
/* User Fixture generated on: 2010-05-01 13:05:31 : 1272730351 */
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
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum d',
			'address' => 'Lorem ipsum dolor sit amet',
			'admin' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>