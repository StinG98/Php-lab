<?php 
function sum($x,$y) {
	return $x + $y;
}


$a = $_GET["a"];
$b = $_GET["b"];
echo "$a+$b =";
echo sum($a, $b);
?>	
