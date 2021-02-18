<?php

/* Union de arrays */

$frontend = ['javascript'];
$backend = ['php','laravel','symfony'];

echo "<pre>";

/** Ejemplo: Uniendo arrays sencillos con el operador +
 * 
 * var_dump($frontend + $backend);
 * 
 * Problema: Php al hacer la union y ver que tanto en el array fronted
 * como en el array backend existe la posición 0 sobreescribe la posición
 * 0 del segundo array y por eso elimina el elemento php.
 * 
 * Solución: agregar keys personalizados para que no existan dos posiciones 
 * 0 en en array como en el otro. con ello obtenemos los 4 valores en un mimso array.
 * 
 * $frontend = [0 => 'javascript'];
 * $backend = [1 => 'php', 2=> 'laravel', 3 => 'symfony'];
 * 
 * var_dump($frontend + $backend); //Salida: javascript,php,laravel, symfony
 * 
 */ 

// var_dump($frontend + $backend); //Salida: javascript,laravel, symfony

/** Uniendo array con keys strings repetidos y la función array_merge
 * 
 * $frontend = ['javascript'];
 * $backend = ['php','laravel','symfony'];
 * 
 * var_dump(array_merge($frontend,$backend)); //Salida php,laravel,symfoni
 * 
 * Al ser cadenas el ultimo key a remplaza al anterior eliminando a javascript.
 * Solución: Uar array_merge_recursive: Esta solución engloba en un array con la
 * llave a los elementos asociados a esa llave $a = ['javascript','php] y en otros
 * dos para englobar los keys b y c.
 * 
 * array_merge: Une uno o más arrays 
 * array_merge_recursive: Une dos o más arrays de manera recursiva
 * 
 */

$frontend = ['a' => 'javascript'];
$backend = ['a' => 'php','b' => 'laravel', 'c' => 'symfony'];

// var_dump(array_merge($frontend,$backend));
var_dump(array_merge_recursive($frontend,$backend));


/** Uniendo arrays con array_combine creando un arreglo de claves y uno de valores
 *  para poder integrarlos en uno mismo.
 * 
 * array_combine: Crea un array usando un array para las keys y otros para lso valores.
 */

 $cursos = ['php','javascript','laravel'];
 $categorias = ['back','front','framework'];

 var_dump(array_combine($categorias,$cursos)); //Salida back => php , front => javascript, framework => laravel