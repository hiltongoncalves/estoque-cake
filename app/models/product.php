<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'description';
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