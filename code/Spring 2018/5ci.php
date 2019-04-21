<?php 
	function findPos($string)
	{
		$position = strpos("Best Regards! Regards!", $string);
		return $position;
	}

	echo findPos("Regards"); //out put is 5

?>