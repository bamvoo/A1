
<?php
//variable con el gmail
$gmail = "Aguilord9s9@gmail.com";

//comprobamos si es un gmail con el validador
if(filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
    echo("$gmail es válido");
} 
else{
    echo("la cuenta es falsa o está mal escrita");
}
