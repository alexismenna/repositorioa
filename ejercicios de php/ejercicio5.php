<?php


$num = rand(0, 20);

echo  "Valor aleatorio: $num<br/>";

$suma = 0;

for ($i=1; $i<=$num; $i++) {
	$suma += $i;
}

echo "Suma: $suma";