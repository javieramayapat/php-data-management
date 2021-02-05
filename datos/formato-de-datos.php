<?php

# Formatos de Texto

/**
 * Alterar Strings
 * strtoupper() -> Para convertir una cadena a mayúsculas
 * strtolower() -> Convertir una cadena en minuscula
 * ucfirst() -> convierte el primer caracter de una cadena en mayúscula
 * lcfirst() -> convierte el primer caracter de una cadena a minúscula 
 * strrev() ->
 */

$texto = "<h1>PHP es un LENGUAJE, Año 2020 programación</h1><br>";
// echo strtoupper($texto);
// echo strtolower($texto);
// echo ucfirst($texto);
// echo lcfirst($texto);
// echo strrev("Javier Amaya");


/**   Remplazar
 *  str_replace() ->Remplaza todas las ocurrencias de busqueda
 *                  con un nuevo string proporcionado.
 */

$slug = str_replace(' ', '-', $texto);
// echo strtolower($slug);

/**
 * Modificación de strings
 * 
 *  str_pad() -> Rellena un string hasta una longitud determinada con 
 *               otro string
 * 
 *  strip_tags() -> Quita las etiquetas html y php de un string.
 */

$folioCode = 25;
// echo str_pad($folioCode, 8, 0) . "<br>";
// echo str_pad($folioCode, 8, 0, STR_PAD_LEFT) . "<br>";
// echo str_pad($folioCode, 8, 0, STR_PAD_BOTH) . "<br>";

$userName = "<strong>Javier Amaya </strong><br>";
// echo $userName;
// echo strip_tags($userName);

// echo strtoupper($texto); //Monobite
// echo mb_strtoupper($texto); //multibyte


/**
 * Comparación
 * similar_text() -> Calcula la similaridad entre cadenas.
*/

$texto1 = "Durate la mañana";
$texto2 = "Durate la tarde";

//   echo similar_text($texto1, $texto2, $percent);

/** Funciones de Utilidad
 * 
 * strlen() -> Obtiene la longitud de una cadena
 * strpos() -> Encuentra la posición de la primera
 *             ocurrencia de una substring dentro de
 *             una string.(Busca la aguja en el pajar :D)
 * str_repeat() ->Repite una string.
 */

$cadena = "Hola a todos son una cadena de texto";
// echo strlen($cadena);

$haystack = "abcdef";
$needle = "e";
$position = strpos($haystack,$needle);

// if ($position === false) {
//     echo "La <strong>$needle</strong> no fue encontrada dentro de <strong>$haystack</strong>";
// } else {
//     echo "La <strong>$needle</strong> fue encontrada dentro de <strong>$haystack</strong> <br>";
//     echo "En la posición <strong>$position</strong>";
// }

echo str_repeat("+_+ ",10);
