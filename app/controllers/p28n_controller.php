<?php
/**
 * P28n Controller
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
class P28nController extends Controller {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'P28n';
/**
 * Models used by the Controller
 *
 * @var array
 * @access public
 */
	public $uses = null;
/**
 * Components
 *
 * @var array
 * @access public
 */
	public $components = array(
		'P28n',
	);
/**
 * change
 *
  * @return void
 * @access public
 */
	public function change($lang = null) {
		$this->P28n->change($lang);
		$this->redirect($this->referer(null, true));
	}
/**
 * shuntRequest
 *
 * @return void
 * @access public
 */
	public function shuntRequest() {
		$this->P28n->change($this->params['lang']);
		$args = func_get_arg();
		$this->redirect('/'.implode('/', $args));
	}
}
?>
