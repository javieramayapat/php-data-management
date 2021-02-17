<?php

$courses = [
  'frontend' => 'javascript',
  'framework' => 'Laravel',
  'backend' => 'php'
];

echo ("<pre>");

// Imprimir el arreglo usando un foreach clave-valor
foreach ($courses as $key => $value) {
  echo ("$key : $value <br>");
}

// Salida
// frontend : javascript
// framework : Laravel
// backend : php

// Imprimir los valores del arreglo usando un foreach simple
foreach ($courses as $course) {
  echo ("$course <br>");
}

// Salida
// javascript
// Laravel
// php

// Uso de array_walk
// array_walk — Aplicar una función proporcionada por el usuario a cada miembro de un array

function upper($course)
{
  echo strtoupper($course) . "<br>";
}

function lower($course)
{
  echo strtolower($course) . "<br>";
}

array_walk($courses, 'lower');

/** Funciones puras del lenguaje php
 * 
 * arrray_key_exist() ->Revisa si el index o la llave existen en el array
 * in_array() -> comprueba que un valor existe dentro de un array
 * array_keys()-> Retorna todas las llaves de un array
 * array_values() -> Retorna todos los valores de un array
 */

echo (array_key_exists('backend', $courses)); //Salida 1
echo (in_array('javascript', $courses)); //Salida 1
var_dump(array_keys($courses));

// Salida
/* 
array(3) {
  [0]=>
  string(8) "frontend"
  [1]=>
  string(9) "framework"
  [2]=>
  string(7) "backend"
}
*/

var_dump(array_values($courses));
// Salida
/* 
array(3) {
  [0]=>
  string(10) "javascript"
  [1]=>
  string(7) "Laravel"
  [2]=>
  string(3) "php"
}
*/
