<?php
/**
 * P28n Component
 *
 * PHP version 5
 *
 * @category Component
 * @package estoque-cake
 * @subpackage estoque-cake.app
 * @version 2.0
 * @author Vitor Pacheco Costa <vitor-p.c@hotmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class P28nComponent extends Object {
	public $components = array(
		'Session',
		'Cookie',
	);

	public function startup() {
		if (!$this->Session->check('Config.language')) {
			$this->change(($this->Cookie->read('lang') ? $this->Cookie->read('lang') : DEFAULT_LANGUAGE));
		}
	}

	public function change($lang = null) {
		if (!empty($lang)) {
			$this->Session->write('Config.language', $lang);
			$this->Cookie->write('lang', $lang, null, '+350 day');
		}
	}
}
?>