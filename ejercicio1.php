<?php
$num = rand(100,1000);;
$numinv = 0;
$cociente = $num;
while ( $cociente != 0)
{
	$resto = $cociente % 10;
	$numinv = $numinv * 10 + $resto;
	$cociente = (int)($cociente / 10);
}
if ( $num == $numinv )
	print "El numero $num Es capicua <br/>";
else
	print "El numero $num NO es capicuabr <br/>";
?>

