<?php 
	//inheritance
	class Vehicle{
		private $name;
		private $model;

		public function __construct($name,$model){
			$this->name; = $name;
			$this->model = $model;
		}

		public function printDetails(){
			return "Car name is ".$this->name." and car model is ".$this->model;
		}
	}

	class Car extends Vehicle
	{
	    public function __construct($name,$model){
			parent::__construct($name,$model);
		}

		public function printCar(){
			return "Car name is ".$this->car;
		}
	}

	$v = new Vehicle("Audi","J3jf");
	$c = new Car("Toyota","76xjf");

	$v->printDetails();
	$c->printDetails();
	$c->printCar();
?>