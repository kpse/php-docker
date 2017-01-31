<?php

/**
 * Created by PhpStorm.
 * User: louis.suo
 * Date: 1/31/17
 * Time: 10:39 AM
 */
abstract class AbstractClass
{
	abstract protected function getValue();
	public function prefixValue($prefix) {
		return "{$prefix}{$this->getValue()}";
	}
}