<?php
class ShopProduct{
	
	//public $numPages;
	private $title;	
	private $producerMainName;	
	private $producerFirstName;
	protected $price;
	private $discount = 0;

 	function __construct($title, $firstName, $mainName, $price){
 		$this->title = $title;
 		$this->producerMainName = $mainName;
 		$this->producerFirstName = $firstName;
 		$this->price = $price;
 		
 	}
 	public function getproducerFirstName()
 	{
 		return $this->producerFirstName;
 	}
 	public function getproducerMainName()
 	{
 		return $this->producerMainName;
 	}
 	//创建折扣
 	public function setDiscount($num){
 		$this->discount = $num;
 	}

 	public function getDiscount()
 	{
 		return $this->discount;
 	}

 	public function getTitle()
 	{
 		return $this->title;
 	}
 	//获取折扣
 	public function getPrice(){
 		return ($this->price - $this->discount);
 	}

	public function getProducer(){

		return "{$this->producerFirstName}".
				"{$this->producerMainName}";
	}
	public function getSummaryLine(){
		$base = "$this->title ({$this->producerMainName},";
		$base .="{$this->producerFirstName})";
		return $base;
	}

}

class ShopProductWriter{

	private $products = array();
	public function addProduct (ShopProduct $shopProduct){
		$this->products[] = $shopProduct;
	}
	public function write($shopProduct){
		$str = "";
		foreach ($this->products as $shopProduct) {
			$str .= "{$shopProduct->title}:";
			$str .= $shopProduct->getProducer();
			$str .= "({$shopProduct->getprice()})\n";
		}
		print $str;
	}
}

class CdProduct extends ShopProduct{

	private $playLength = 0;

		public function __construct( $title,$firstName,$mainName,$price,$playLength){
			parent::__construct($title,$firstName,$mainName,$price);
			$this->playLength = $playLength;
		}

		public function getPlayLength(){
			return $this->playLength;
		}


		public function getSummaryLine(){
			$base = "{$this->title} ({$this->producerMainName},";
			$base .= "{$this->producerFirstName}";
			$base .= ": playing time - {$this->playLength}";

			return $base;
		}

}
class BookProduct extends ShopProduct{
		private $numPages = 0;

		public function __construct($title,$firstName,$mainName,$price,$numPages){
			parent::__construct($title,$firstName,$mainName,$price);
			$this->numPages = $numPages;
		}

		public function getNumberOfPages(){
			return $this->numPages;
		}
		public function getSummaryLine(){
			$base = parent::gatSummaryLine();
			$base .= ": page count - {$this->numPages}";

			return $base;
		}
		public function getProce(){
			return $this->price;
		}
}





?>










