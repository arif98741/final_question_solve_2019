<?php
class Shows
	{
		public $name;
		private $number;

	    public function __construct($name,$number)
	    {
	        $this->name   = $name;
	        $this->number = $number;
	    }

	    public function setNumber($number)
	    {
	    	$this->number = $number;
	    }

	    public function getNumber()
	    {
	    	return $this->number;
	    }
	}

	$sh = new Shows("Jhon","017XXXXXX");
	$sh->number; //generate error
	$sh->setNumber("015XXXXXX");
	$sh->getNumber();
	$sh->Air(); //no error
	
?>
