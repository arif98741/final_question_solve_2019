<?php 
	interface TV_Programs{
		public function setName();
		public function setNumber();
	}

	class Shows implements TV_Programs
	{
		private $name;
		private $number;
	   
	    public function __construct($name,$number)
	    {
	        $this->setName($name);
	        $this->setNumber($number);
	    }

	    public function setName($name)
	    {
	    	$this->name = $name;
	    }

	    public function setNumber($number)
	    {
	    	$this->number = $number;
	    }

	    public function Air()
	    {
	    	$data = $this->name.", ".$this->number;
	    	return $data;
	    }

	}

	$sh1 = new Shows("Game of Thrones",67);
	$sh2 = new Shows("That 70s Show",200);
	$sh3 = new Shows("Breaking Bad",62);

	$sh1->Air();
	$sh2->Air();
	$sh3->Air();

?>