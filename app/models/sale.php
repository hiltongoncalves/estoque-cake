<?php
/**
 * Sale Model
 *
 * PHP version 5
 *
 * @category Model
 * @package estoque-cake
 * @subpackage estoque-cake.app
 * @version 2.0
 * @author Vitor Pacheco Costa <vitor-p.c@hotmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class Sale extends AppModel {
/**
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'Sale';
/**
 * Model displayField
 *
 * @var string
 * @access public
 */
	public $displayField = 'created';
/**
 * Model associations: belongsTo
 *
 * The Associations below have been created with all possible keys, those that are not needed can be removed
 *
 * @var array
 * @access public
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
/**
 * Model associations: hasAndBelongsToMany
 *
 * @var array
 * @access public
 */
	public $hasAndBelongsToMany = array(
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'products_sales',
			'foreignKey' => 'sale_id',
			'associationForeignKey' => 'product_id',
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