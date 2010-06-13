<?php
/**
 * ProductsSale Model
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
class ProductsSale extends AppModel {
/**
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'ProductsSale';
/**
 * Model associations: belongsTo
 *
 * The Associations below have been created with all possible keys, those that are not needed can be removed
 *
 * @var array
 * @access public
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'sale_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>