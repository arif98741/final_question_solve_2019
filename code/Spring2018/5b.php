<?php
//not output
$x = 4;
while ($x >= 5) {
    echo "The number is: $x <br>";
    echo $x--;
}


//it will print 4
$x = 4;
do{
	 echo "The number is: $x <br>";
    echo $x--;
}while ($x >= 5);