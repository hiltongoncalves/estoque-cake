<?php
/**
 * Product Model
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
class Product extends AppModel {
/**
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'Product';
/**
 * Model displayField
 *
 * @var string
 * @access public
 */
	public $displayField = 'description';
/**
 * Behaviors used by the Model
 * 
 * @var string
 * @access public
 */
	public $actsAs = array('Search.Searchable');
/**
 * Validation
 *
 * @var array
 * @access public
 */
	public $validate = array(
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
/**
 * filterArgs for search plugin
 *
 * @var array
 * @access public
 */
	public $filterArgs = array(
		array(
			'name' => 'search',
			'type' => 'like',
			'field' => 'Product.description',
		),
		array(
			'name' => 'range',
			'type' => 'expression',
			'method' => 'makeRangeCondition',
			'field' => 'Product.amount BETWEEN ? AND ?',
		),
		array(
			'name' => 'username',
			'type' => 'like',
			'field' => 'User.username',
		),
	);

}
?>