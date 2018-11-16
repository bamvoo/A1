<?php

function fm($x, $y){
    //Aislamos los caracteres con explode que divide un string en varios string, 
    //Con trim borramos los espacios extra y los guardamos.
    $a1 = explode(' ',trim($x));
    $a2 = explode(' ',trim($y));
    //Cada llave del array la multiplicamos y la guardamos en r.
    foreach($a1 as $llave=>$valor){
        $a3[$llave] = $a1[$llave]*$a2[$llave];
    }
//Devolvemos el array.
return print_r($a3);
}
//llamamos la función con los valores de los arrays
echo fm((" 1 2 3 "), (" 4 5 6 "));