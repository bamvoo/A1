<?php


//para hacer las 6 filas
for($i=1;$i<7;$i++){
    //para hacer una fila
    for($x=1;$x<7;$x++){
        //Si $x es igual a uno, cada dos caracteres habrá un espacio en el else será cada 3.
        if($x==1){
            //Rellena un string hasta una longitud de 2 con otros datos
            echo str_pad($i*$x,2," ");
        }
        else{
            //Rellena un string hasta una longitud de 3 con otros datos
            echo str_pad($i*$x,3," ");
        }
    }
    //Al acabar una línea se hace un enter
    echo "<br>";
}