<?php
//creamos el link de la página actual con el contenido de la cabezera host y la URI
$link_actual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $link_actual;