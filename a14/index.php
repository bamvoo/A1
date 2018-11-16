<?php

//La ruta con el archivo 
$caminito = '../a13/index.php';
//variable con las lineas del archivo
$lineas = count(file($caminito));
//imprime la variable
echo ('número de líneas : ' . $lineas);