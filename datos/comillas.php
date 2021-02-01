<?php

echo 'Un texto de una linea
varias lineas
comillas simpleas \' backslas\\ continuar con mas texto
$varible <br>';

$name = 'Javier';
echo "Mi nombre es $name <br>";

// Estructura compleja
$courses = [
    'backend' => [ 
        'PHP',
        'Laravel'
    ]
];

Class User
{
    public $name = 'Javier';
}

$user = new User;

// Cuando queremos acceder a una estructura compleja necesitamos
// usar llaves al inciar y al final para que php lo comprenda
echo "$user->name quiere aprender {$courses['backend'][0]} <br>";

// Ejemplo de variables variables

$teacher = 'italo';
$italo = 'Profesor de PHP';

echo "$teacher es ${$teacher} <br>";


function getTeacher(){
    return 'tutor';
}

$tutor = 'javier';
echo "${getTeacher()} enseña PHP";
