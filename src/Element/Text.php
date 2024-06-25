<?php

namespace JesGs\WP\Form\Element;

use JesGs\WP\Form\Element;

/**
 * Text
 *
 * @author Jess Green <jgreen@psy-dreamer.com>
 * @package Text
 * @version $Id$
 */
class Text extends Element {


	/**
	 * Echo form element
	 *
	 * @return string
	 */
	public function __toString() {
		$attr = $this->build_attr_string();
		$html = $this->get_label() . "<input type=\"text\" $attr />\r\n"
		        . $this->get_description();

		$this->html = $html;

		return $this->html;
	}
}