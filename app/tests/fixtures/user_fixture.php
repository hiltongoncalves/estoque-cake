<?php
/* User Fixture generated on: 2010-05-27 18:05:16 : 1274994616 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 80),
		'admin' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'key' => 'unique'),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 4),
		'cpf' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 11, 'key' => 'unique'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'cpf_UNIQUE' => array('column' => 'cpf', 'unique' => 1), 'username_UNIQUE' => array('column' => 'username', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
include_once "org_netbeans_saas_yahoo/YahooNewsSearchService.php";
             try {
                 $query = "";
                 $type = "all";
                 $results = 10;
                 $start = 1;
                 $sort = "rank";
                 $language = null;
                 $output = "xml";
                 $callback = null;

             $result = YahooNewsSearchService::search($query, $type, $results, $start, $sort, $language, $output, $callback);
             echo $result->getResponseBody();
             } catch(Exception $e) {
                 echo "Exception occured: ".$e;
             }



	var $records = array(
		array(
			'id' => 1,
			'name' => 'Administrador',
			'phone' => '(71)3378-5778',
			'address' => 'Rua Ibicaraí, nº 15',
			'email' => 'admin@empresa.com',
			'admin' => 1,
			'username' => 'admin',
			'password' => 'd01e94c2b5e45b246769b5659a9d4a17f1072c63',
			'status' => 1,
			'cpf' => '34233253991'
		),
		array(
			'id' => 2,
			'name' => 'Funcionário',
			'phone' => '(71)8626-7909',
			'address' => 'Av. Avenida, nº 55',
			'email' => 'funcionario@empresa.com',
			'admin' => 0,
			'username' => 'funcionario',
			'password' => 'e4a6f8abea229a9b16ba301fa67641a1a1d2c01a',
			'status' => 1,
			'cpf' => '34233253991'
		),
		array(
			'id' => 1,
			'name' => 'Administrador',
			'phone' => '(71)3258-6874',
			'address' => 'Rua Ibicaraí, nº 15',
			'email' => 'joao@empresa.com',
			'admin' => 0,
			'username' => 'joao',
			'password' => 'e4a6f8abea229a9b16ba301fa67641a1a1d2c01a',
			'status' => 0,
			'cpf' => '34233253991'
		),
	);
}
?>