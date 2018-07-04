<?php
	class StaticExample{
		static public  $aNum=0;
		static function sayHello(){
		self::$aNum++;
		print "hello (".self::$aNum.")\n";

			}
		function __toString(){
			echo  '1';
		}
	}

	$a = new StaticExample;
	print $a;
?>