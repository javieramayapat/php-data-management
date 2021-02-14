<?php

/* 
    return -> Solo devuelve un resultado
    exit() ->detiene el sistema
*/

function sumar($a,$b)
{
    return $a + $b;
}

// echo(sumar(5,8));

// Valores
function greet()
{
    return ['PDF','vista'];
}

var_dump(greet());