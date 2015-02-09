<?php

namespace Foo;

class Bar {

	private $_baz = NULL;

	public function setBaz($baz) {
		$this->_baz = $baz;
	}

	public function getBaz() {
		return $this->_baz;
	}
}
