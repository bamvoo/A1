<?php



function armstrong_number($x) {
  //obtiene la longitud de x
  $longitud = strlen($x);
  $sum = 0;
  $x = (string)$x;
  for ($i = 0; $i < $longitud; $i++) {
// pow devuelve el valor de x elevado a la potencia X.
    $sum = $sum + pow((string)$x{$i},$longitud);
  }
  if ((string)$sum == (string)$x) {
    return "True";
  } else {
    return "False";
  }
}
$num1 = 370;
$num2 = 80;
echo $num1." es ".armstrong_number($num1).'<br>';
echo $num2." es ".armstrong_number($num2).'<br>';
