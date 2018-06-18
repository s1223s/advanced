<?php


	class AddressManager{
		private $addresses = array("202.131.36.159", "74.125.19.106");

		function outputAddresses($resolve){
			foreach ($this->addresses as $vaddress) {
				print $address;
				if($resolve){
					print "(".gethostbyaddr($address).")"
				}
				print "\n";
			}

		}
	}

?>