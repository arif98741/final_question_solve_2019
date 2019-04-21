
Numeric Arrays: Numeric arrays use integer / numbers as their index number to identify each item of the array. The example we discussed above are numeric arrays as they have integer values as index numbers for each item.
<?php
$colours = array("white","black","blue");
print_r($colours);

/*
output will be
	Array
	(
		[0] => white
		[1] => black
		[2] => blue
	)
*/?>
----------------------------------------------------------------
Associative Array: Sometimes it’s better to use the index name instead of index number for example if you want to save three students' names and numbers so your best option will be to use each student’s name as index value for the array and his numbers as the values, behold on the example below,

<?php 
$students['Anna']  		= 23;
$students['Maria'] 		= 24;
$students['Jennifer']	= 25;
/*
output will be
	Array
	(
		[Anna] 		=> 23
		[Maria] 	=> 24
		[Jennifer]  => 25
	)
*/
?>
----------------------------------------------------------
Multidimensional Array : A multidimensional array can contain arrays within itself and the sub arrays contain more arrays within them.
<?php 
	$david = array(
		'name'	 => 'Jhon',
		'address'=> "New York",
		'mobile' => "+12-2654",
		'interest'=> array(
			'game'		=> ['cricket','football','hocky'],
			'interest'	=> ['hiking','travelling']
		)
	);
	echo '<pre>';
	print_r($david);
?>


