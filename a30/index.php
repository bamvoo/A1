<?php


$primos = array();
$es_primo = false;
//Con un bucle sacamos los num primos hasta el 100
for($i = 2; $i<100; $i++) {
    $es_primo = true; 
    //Aumentamos el divisor
    for($k=2;$k<=($i/2);$k++) {
        //Si el resto da 0 no es primo y se va
        if($i%$k==0){
            $es_primo = false;
            //sal del bucle
            break;
        }
    }   
    //si es_primo es primo lo mete en el array 
    if($es_primo){
        array_push($primos,$i);
    }            
}
//un echo para ver el resultado
echo array_sum($primos);