<?php 
	interface student{
		public function setName($name);
		public function setAge($age);
	}

	class Resource implements student{
		private $name;
		private $age;

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setAge($age){
			$this->age = $age;
		}

		public function printData()
		{
			$data  = $this->name;
			$data .= ", ".$this->age;
			return $data;
		}
	}

	$resource = new Resource();
	$resource->setName("Jhon");
	$resource->setAge(20);
	echo $resource->printData();
?>