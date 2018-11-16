<?php
function buscar($x, $z) {
  //strlen da la longitud
  $zlong = strlen($z);
  $xlong = strlen($x);
  $w_start = $xlong-$zlong-1;
  //substr devuelve parte de una cadena
   if(substr($x, $xlong-$zlong, $zlong) == $z){
      return "true";
   } 
   else{
      return "false";
   }
}
echo buscar("colador","dor")."<br>";
