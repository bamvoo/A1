<?php
function del_duplicados($x) {
  //array_values devuelve los valores de un array
  //array_unique elimina valores duplicados de un array
  $num = array_values(array_unique($x));
  return $num ;
}
$array = array(1,1,2,2,3,4,5,5);
print_r(del_duplicados($array));

