<?php
/**
 * ProductsSales Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package estoque-cake
 * @subpackage estoque-cake.app
 * @version 2.0
 * @author Vitor Pacheco Costa <vitor-p.c@hotmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class ProductsSalesController extends AppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'ProductsSales';
/**
 * Models used by the Controller
 *
 * @var array
 * @access public
 */
	public $uses = array(
		'Sale',
		'ProductsSale',
		'Product'
	);
/**
 * add
 *
 * @return void
 * @access public
 */
	public function add() {
		if (!empty($this->data)) {
			$this->ProductsSale->id = $this->data['ProductsSale']['id'];
			$productSale = $this->ProductsSale->findById($this->data['ProductsSale']['id']);
			$amountAntigo = $productSale['ProductsSale']['amount'];
			if ($this->ProductsSale->saveField('amount', $this->data['ProductsSale']['amount'])) {
				$products_sale = $this->ProductsSale->find('all', array('conditions' => array('sale_id' => $this->data['ProductsSale']['sale_id']), 'recursive' => -1));
				$this->set(compact('products_sale'));
				$atualProduct = $this->Product->findById($this->data['ProductsSale']['product_id']);
				$atualProduct['Product']['amount'] += $amountAntigo;
				$atualProduct['Product']['amount'] -= $this->data['ProductsSale']['amount'];
				$this->Product->id = $atualProduct['Product']['id'];
				$this->Product->saveField('amount', $atualProduct['Product']['amount']);
				$this->render('add_success','ajax');
			} else {
				$this->render('add_failure','ajax');
			}
		}
		$this->set(compact('products_sale'));
	}

}
?>