<?php
	class Person{
		private $_name;
		private $age;

		function __set($property, $value){
			$method = "set{$property}";
			if (method_exists($this, $method)) {
					return $this->$method($value);
			}

		}
		 function __get($property){
			$method = "get{$property}";
			if (method_exists($this, $method)) {
				return $this->$method;
			}
		}

	function setName($name){
		$this->_name = $name;
		if(!is_null($name)){
			$this->_name = strtoupper($this->_name);
		}
	}
	function setAge($age){
		$this->_age = strtoupper($age);
	}
	function getName(){
		return "Bob";
	}

	function getAge(){
		return 44;
	}
	}

	//$p = new Person();
	//print $p->getName='1';
?>