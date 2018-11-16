<?php
function encontrar($n, $n2) {
  //iniciamos variable 
  $nums_pairs ="";
  for($i=0;$i<=count($n);$i++) {
     for($j=$i+1;$j<count($n);$j++) {
        if($n[$i]+$n[$j]==(int)$n2) {
           $nums_pairs .= $n[$i] . "," . $n[$j] . ";";
        }
     }
  }
  return $nums_pairs;
}
//creamos el array con sus números y 
$n=array(1,2,3,4,5,6);
echo encontrar($n, 7)."<br>";
echo encontrar($n, 5);
