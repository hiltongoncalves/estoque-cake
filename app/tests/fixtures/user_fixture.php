<?php
/* User Fixture generated on: 2010-04-26 09:04:04 : 1272286204 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200),
		'admin' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum d',
			'address' => 'Lorem ipsum dolor sit amet',
			'admin' => 1
		),
	);
}
?>