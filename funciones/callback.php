<?php

/** Llamadas de retorno (Callbacks / Callables)
 * 
 * Una función de callback es una función que se pasa a otra función como un argumento, 
 * que luego se invoca dentro de la función externa para completar algún tipo de rutina o acción.
 * 
 * */

 $restaurante =  function ($platillo)
 {
     return "Hola a todos el día de hoy probare un platillo especial llamado: $platillo";
 };


 echo (call_user_func($restaurante,"Pescado Thai"));
//  Salida: Hola a todos el día de hoy probare un platillo especial llamado: Pescado Thai