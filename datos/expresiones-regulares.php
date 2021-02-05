<?php

#Expresiones Regulares


/** Nota
 * Para poder representar el acento circunflejo,
 * podemos usar la combinación de teclas alt + 94 
 * para darnos este resultado ^ 
*/

/* Sintaxis

/  -> Contenedor de la aexpresión regular.
^  -> El acento circunflejo marca el inicio de la expresión regular.
$  -> El signo de pesos marca el final de la expresión regular.
-  -> El signo menos indica el rango entre un valor y otro de la expresión.
[] -> Se utilizan para agrupar caracteres en grupos o clases.
      Ejemplos:
      [a-z] -> Patrón que puede contener letras minusculas y de la a a la z.
      [A-Z] -> El patrón puede contener letras mayúsculas de la a a la z.
      [0-9] -> EL patrón puede contener numero del 0 al 9.

{} -> Permite agregar condiciones a nuestra expresion regular.
      Ejemplo:   
      {6,9} La expresión puede tener minimo 6 número y máximo 9
    
*/

$password = "123456";
var_dump( (boolean) preg_match('/^[0-9]{6,9}$/', $password) );