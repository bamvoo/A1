<?php
$codigofuente = file('http://blog.aulaformativa.com');
 
foreach($codigofuente as $lineanum => $linea){
    echo "<b>Line #{$lineanum}</b> ".htmlspecialchars($linea).'<br> ';
}
//$lineanum y $linea hacen referencia al número de línea y al contenido de dicha línea
//la función htmlspecialchars para que los caracteres especiales de HTML puedan imprimirse adecuadamente.
