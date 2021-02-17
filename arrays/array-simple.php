<?php

/** Array Simple
 * 
 * Los datos de los Arrays son datos complejos 
 * por que nos permiten guardar varios datos dentro 
 * de una sola variable. 
 * 
 * Array simple: Es aquel al cúal no el hemos defiinido
 * un key,en cambio solo se estan manejando los
 * valores.
 */

//  Declaración de un Array Simple
// A partir de PHP 5.4 también se puede usar la sintaxis de array corta, 
// la cual reemplaza array() con [].

$course = ['javascript', 'laravel', 'php', 'vue'];
$cursos = array('javascript', 'laravel','php','vue');

echo "<pre>";
var_dump($cursos);

/* Salida

array(4) {
  [0]=>
  string(10) "javascript"
  [1]=>
  string(7) "laravel"
  [2]=>
  string(3) "php"
  [3]=>
  string(3) "vue"
}
*/