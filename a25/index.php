<?php

$a = 1;
$b = 2;
echo $a.' y '.$b."\n";
//se usa una tercera variable
$c = $a;
$a = $b;
$b = $c;

echo $a.' y '.$b;