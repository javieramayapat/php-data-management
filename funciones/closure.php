<?php

/** Funciones Anónimas
 * 
 * Las funciones anónimas son funciones sin un nombre en
 * especifico.
 * 
 * Para hacer uso de una función anónima hay dos formas
 * la primera es usando la sintaxis de:
 * 
 * 1) funciones variables: Significa que podemos igular una 
 * la lógica de una función a una variable para que al
 * interactuar con ella podamos obtener el retorno de la función.
 * 
 * Nota: Cuando una función anónima es asiganda a una variable
 * esta debe terminar con punto y coma.
 * 
 * La segunda forma y con la que se explota más el potencial
 * de las funciones anónimas es:
 * 
 * Usandola como parámetro de los callbacks:
 * 
 * Una retrollamada o más conocida como callback:
 * Se define cuando se crea una función "A" y esta se usa como
 * argumento de otra función "B", esta inmediatamento va a la
 * función "A" y la ejecuta obteniendo un resultado que usara "B".
 * 
 * Un ejemplo muy claro en php es la función: 
 * call_user_func: Nos permite llamar a una función anónima
 *además de poder mandarle parámetros para configurarla ejemplo 2).
 * 
 * 
 * Nota: Cuando una función vaya a recibir como parametro una
 * closure es una buena práctica indicarselo colocando la
 * palabra reservada Closure entre los ().
 * 
 */

//  Ejemplo 1) : Función anónima asignada a una variable
 $hola = function()
 {
     return "Soy una función anónima";
 };

echo $hola(); //imprime: Soy una función anónima


// Ejemplo 2) : Función anónima utilizada como parámetro de un callback

$profesor = function ($nombre)
{
    echo "El profesor de la clase es $nombre" ;
};

call_user_func('profesor',"Italo Morales");
call_user_func('profesor',"Fredy Vega");


// Ejemplo: uso de variables en una clausura
$plataforma = "Platzi";
$mensaje = function() use ($plataforma)
{
    echo "Nunca Pares de Aprender en $plataforma";
};

$mensaje(); //imprime: Nunca Pares de Aprender en Platzi


// Ejemplo de una función anónima usando una variable cuyo valor será
// cambiado ya que se pasará como referencia
$trabajo = "programador";
$mostrarInformacion = function() use (&$trabajo)
{
    $trabajo = "Desarrollador Backend";
    echo "<h1>Hola me llamo Javier y soy $trabajo";
};

$mostrarInformacion(); //imprime: Hola me llamo Javier y soy Desarrollador Backend


// Ejemplo del profesor emulando el comportamiento
// de la función call_user_func

// Saludando a los profesores de platzi en diferentes idiomas

function saludar ($idiomaSaludo, $profesor)
{
    return $idiomaSaludo($profesor);
}

$es = function ($name)
{
    return "Hola $name <br>";
};

$en =  function ($name)
{
    return "Hello $name <br>";
};

$port = function ($name)
{
    return "Olá $name <br>";
};

echo saludar($es,'Italo Morales');
echo saludar($en,'Italo Morales');
echo saludar($port,'Italo Morales');