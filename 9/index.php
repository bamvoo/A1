<?php

if (isset($_SERVER['HTTPS'])) {
    echo 'Estás en https';
} else {
    echo 'No estás en https, te entra un virus seguro';
    
}
