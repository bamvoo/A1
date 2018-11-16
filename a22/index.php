<?php

//Se crea un archivo temporal en un directorio temporal usando las funciones siguientes
//tempnam crea un fichero en el dir. temporal del sistema y devuelve la ruta del fichero
//sys_get_temp_dir devuelve la ruta del directorio para archivos temporales
$ftemp= tempnam(sys_get_temp_dir(), 'ftemp');
echo $ftemp."\n";