<?php

$data = 'Estoy estudiando PHP en Platzi';
// echo $data[17]; //Imprime P
// echo $data[18]; //Imprime H
// echo $data[19]; //Imprime P


/*
 Ejercicio 1: Substraer los 20 primeros caracteres de la variable $post. 
 Simulando un estracto de un post
 substr() -> función que permite cortar una cadenas de texto especificando
             los rangos de inicio y fin del corte.
*/
$post = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam repellat rem quas. 
        Non, harum quis vero ipsa officia et molestiae dolorum cumque porro, sit deleniti
        eveniet nostrum amet optio iure.";
$extract = substr($post, 0, 20);
// echo "$extract... [Ver más]";


/* 
 Ejercicio 2: Pasar una cadena de texto a un arreglo.

 explode() ->Permite mediante un delimitador proporcionado por el usuario cortar una cadena
             de texto reagrupando cada segmento como una posición de un array.
            
*/
$lenguajes = "Javascript, PHP, Laravel, Go, Java, Typescript, Python";
$tags = explode(', ', $lenguajes);
echo "<pre>";
// var_dump($tags);


/*
 Ejercico 3: Pasa de un array a una cadena de texto usando el método implode()

 implode() -> Retorna una cadena proveniente de los elementos de un array fromateandola
              con a petición del usuario.
*/

$array = ['Javascript', 'SQL', 'PHP'];
$cadena = implode(', ', $array);
// echo $cadena;



/* 
Ejercicio 3: Crea una variable de cadena y agrega espacios al inicio y al final, despues 
             formatear el texto para quitar esos espacios.

        ltrim() ->elimina los espacios en blanco al inicio del texto.
        rtrim() ->elimina los espacios en blanco al final del texto.
        trim() ->elimina los espacios en blanco al inicio y al final del texto.
*/

$curso = "                Ejemplo de texto             ";

echo "<h1>Formatear texto usando Trim</h1>";
echo "<hr>";

$cadenaConTextoEspaciado =  "Este es $curso con mucho espacio <br>";
$textoSinEspaciosALaIzquierda = ltrim($curso);
$textoSinEspaciosALaDerecha = rtrim($curso);
$textoSinEspacios = trim($curso);

echo $cadenaConTextoEspaciado . "<br>";
echo $textoSinEspaciosALaIzquierda . "sin espacio a la izquierda <br>";
echo $textoSinEspaciosALaDerecha . "<br>";
echo $textoSinEspacios . "<br>";
