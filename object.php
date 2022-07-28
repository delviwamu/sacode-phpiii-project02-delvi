<?php

class car {

	public $color;
	public $model;
	public function _construct($color, $model){
		$this->color = $color;
		$this->model = $model;
	}
	public function message(){
		return "my car is a " . $this->color . " " . $this->model . "!";
	}
}

$myCar = new car("black", "volvo");
echo $myCar->message();
echo "<br>";
$myCar = new car('Red', "Toyota");
echo $myCar->message();

?>