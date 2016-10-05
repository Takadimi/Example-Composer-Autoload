<?php

namespace Acme\SubDirTest;

class Person {
	private $name;
	private $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age  = $age;
	}

	public function greeting() {
		echo "Hi, my name is {$this->name} and I am {$this->age} years old!\n";
	}
}
