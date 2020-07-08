<?php

function operacion($numero1, $numero2, $operacion)
{
    if($operacion == '+'){
        return $numero1 + $numero2;
    }

    if($operacion == '-'){
        return $numero1 - $numero2;
    }

    if($operacion == '*'){
        return $numero1 * $numero2;
    }

    if($operacion == '/'){
        return $numero1 / $numero2;
    }

    return 0;    
}


?>