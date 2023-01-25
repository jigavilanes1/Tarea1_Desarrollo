<?php

$cantidad = $_GET["numero"];
$num =(int)$cantidad;

for ($i = 0; $i <=$num; $i++) { 
$nDiv = 0; 
for ($n = 1; $n <= $i; $n++){ 
if($i%$n == 0){ 
$nDiv = $nDiv + 1; 
} 
} 
if($nDiv == 2 or $i == 1)
{ 
print '<br>'; 
print $i; 
} 
} 
?> 
