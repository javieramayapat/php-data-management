<?php

/* 
Estas son algunas de las funciones de PHP utilizadas para los arrays:
sort: Ordena un array (Menor a mayor)
rsort: Ordena un array en orden inverso. (Mayor a menor)
ksort: Ordena un array por clave. (Menor a mayor)
krsort: Ordena un array por clave en orden inverso.
array_slice: Extrae una parte de un array.
array_chunk: Divide un array en fragmentos.
array_shift: Quita un elemento del principio del array.
array_pop: Extrae el último elemento del final del array.
array_unshift: Añadir al inicio de un array uno a más elementos.
array_push: Inserta uno o más elementos al final de un array.
array_flip: Intercambia todas las claves de un array con sus valores asociados.
array_keys:Retorna todas las llaves de un array
array_values:Devuelve todos los elementos de un array
array_unique: Remueve los valores duplicados de un array
array_count_values: retorna un array usando los valores de la matriz array 
                    como keys y su frecuencia en array como valores.

*/


$abecedario = ['a','c','b','f','j'];
$lenguajes = [
    'php' => 'Laravel',
    'javascript' => 'Angular'
];
$duplicados = [1,1,3,3,4,5,6,7,8,9,10];

echo "<pre>";

// Ordenamiento por valores

// sort($abecedario);
// rsort($abecedario);
// var_dump($abecedario);

// ordenamiento por llaves

// ksort($lenguajes);
// krsort($lenguajes);
// var_dump($lenguajes);


// Manipulación de arrays

// var_dump(array_slice($abecedario,2)); 
// var_dump(array_chunk($abecedario,2));
// array_shift($abecedario);  //Salida c,b,f,j
// array_pop($abecedario); //salida a,c,b,f
// array_unshift($abecedario,'h');
// array_push($abecedario,'v');
// var_dump(array_keys($lenguajes));
// var_dump(array_values($lenguajes));
// var_dump(array_unique($duplicados));
// var_dump(array_sum($duplicados)); //Salida 57
// var_dump(array_count_values($duplicados));

// var_dump(array_flip($lenguajes));

