<?php

namespace JesGs\WP\Form\Element;

use JesGs\WP\Form\Element;

/**
 * Textarea
 *
 * @author Jess Green <jgreen@psy-dreamer.com>
 * @package Textarea
 * @version $Id$
 */
class Textarea extends Element {


	/**
	 * Echo form element
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->html;
	}
}