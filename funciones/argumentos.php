<?php

// Valores
function greet($name)
{
    return "Hola, $name";
}

// echo greet("Javier");

// Referencia
$course = "PHP";
function path(&$course)
{
    $course = "Laravel";
    echo $course . "<br>";
}

path($course);
echo $course . "<br>";


// Predeterminado

function sayHellow($name = 'Javier')
{
    return "Hola $name <br>";
}

echo sayHellow();
echo sayHellow("Pedro");