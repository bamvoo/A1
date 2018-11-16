<?php
function convert($string) {
    //explode convierte un String en un Array ya que lo separa
    $warr = explode(';',$string);
    $result = '';
    foreach($warr as $value){
        //trim elimina el espacio en blanco
        switch(trim($value)){
            case 'zero': $result .= '0'; break;
            case 'one': $result .= '1'; break;
            case 'three': $result .= '3'; break;
            case 'five': $result .= '5'; break;
            case 'six': $result .= '6'; break;
            case 'eight': $result .= '8'; break;
            case 'nine': $result .= '9'; break;    
        }
    }
    return $result;
}

echo convert("zero;three;five;six;eight;one")."\n";

