<?php
	include "personwrite.php";
	class Person{
		private $writer;

		function __construct(PersonWriter $writer){
			$this->writer = $writer;
		}		

		function __call($methodname,$ages){
			if (method_exists($this->writer, $methodname)) {
				return $this->writer->$methodname($this);
			}
		}

		function getName(){return "Bob";}
		function getAge(){return 44;}


}
$person = new Person(new PersonWriter());
		$person->writeName();