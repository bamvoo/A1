<?php
 function encontrar($word) {
  $chr = null;
  //cuenta la longitud de palabra
  for ($i = 0; $i <= strlen($word); $i++) {
     //Cuenta el número de apariciones de la cadena 2(substr) en la cadena 1($word)
     if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
  }
}

echo encontrar("albahaca")."<br>";
echo encontrar("salvaje")."<br>";
echo encontrar("truenos")."<br>";
