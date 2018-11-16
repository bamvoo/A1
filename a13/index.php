<?php

// filemtime obtiene el momento de la última modificación de un archivo

$n_archivo = 'index.php';
if (file_exists($n_archivo)) {
    echo "La última modificación fue en ".date("F d Y H:i:s.",filemtime("index.php"));}