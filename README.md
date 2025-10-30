## ¿Qué es JSON?

JSON nos permite representar y encapsular datos complejos de forma organizada, lo que facilita su uso en internet. 
Aunque su nombre deriva de JavaScript, JSON fue creado para ser utilizado por todos los lenguajes de programación. 

## Convertir objetos PHP a JSON
Dado que la información en JSON se almacena en pares clave/valor, es más probable que  json_encode()  se utilice para
codificar objetos PHP y sus variables de instancia. 

## Ejemplo de objeto PHP a JSON

``` en PHP
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'
 && isset($_POST['surname']) && isset($_POST['nombre'])) {
  
    $nombre = $_POST['nombre'];
    $apellido = $_POST['surname'];

   echo json_encode( ["nombre" => $nombre,
   "apellido" => $apellido]);
 
}
``` en PHP
?>



