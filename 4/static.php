<?php
	class StaticExample{
		static public  $aNum=0;
		static function sayHello(){
		self::$aNum++;
		print "hello (".self::$aNum.")\n";

			}
	}
?>