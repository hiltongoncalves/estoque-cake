<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'description';
	var $validate = array(
		'description' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => 'Digite um nome válido para o produto!',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'price' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				'message' => 'Apenas números decimais!',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'amount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Apenas números!',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Sale' => array(
			'className' => 'Sale',
			'joinTable' => 'products_sales',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'sale_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>
