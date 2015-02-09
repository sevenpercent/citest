<?php

use Foo\Bar;

class Bar_TestCase extends PHPUnit_Framework_TestCase {

	public function testGetNullBaz() {
		$this->assertNull((new Bar())->getBaz());
	}

	public function testSetBaz() {
		$bar = new Bar();
		$bar->setBaz('qux');
		$this->assertEquals('qux', $bar->getBaz());
	}
}
