
## ¿Qué es JSON?

JSON nos permite representar y encapsular datos complejos de forma organizada, lo que facilita su uso en internet. 
Aunque su nombre deriva de JavaScript, JSON fue creado para ser utilizado por todos los lenguajes de programación. 

## Tecnologías y Herramientas
![JSON](https://img.shields.io/badge/JSON-000000?style=for-the-badge&logo=json&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

## Convertir objetos PHP a JSON
Dado que la información en JSON se almacena en pares clave/valor, es más probable que  json_encode()  se utilice para
codificar objetos PHP y sus variables de instancia. 

## Ejemplo de Fetch con PHP y respuesta en formato JSON
``` en Fetch
<form id="formElem" >
    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre"  required/>
    <input type="text" id="surname" name="surname" placeholder="Tu apellido" required />
    <input   type="submit" id="enviar" />
     <input   type="reset" id="Limpiar" />
</form> 
<p id="respuesta"></p>

    <script>
       formElem.onsubmit = async(e) =>{
           e.preventDefault(); //evitar el comportamiento del evento.
           
          let response = await fetch('procesa_formdata.php',{
               method: 'POST',
               body: new FormData(formElem)
           });
           
           let result = await response.json();
           //alert(result.message);

           const resultadoDiv = document.getElementById('respuesta');
          resultadoDiv.innerHTML = `
            <h3>Resultados</h3>
            <p>Nombre: ${result.nombre}</p>
            <p>Apellido: ${result.apellido}</p>
          `;
   
          };
    </script>

<script src="js/bootstrap.bundle.min.js"></script>
<body>
    
</body>
</html>
```
### Respuesta del lado de PHP

``` en PHP
<?php
header('Content-Type: application/json');
//¿Qué hace?
//Informa al cliente (navegador o app) que la respuesta que devolverá este script será en formato JSON.
//También es útil para evitar errores de interpretación del contenido por parte del navegador o herramientas externas.

if ($_SERVER['REQUEST_METHOD'] == 'POST'
 && isset($_POST['surname']) && isset($_POST['nombre'])) {
  
    $nombre = $_POST['nombre'];
    $apellido = $_POST['surname'];

   echo json_encode( ["nombre" => $nombre,
   "apellido" => $apellido]);
 
}
?>
```

## Otro Ejemplo
Las matrices asociativas son matrices que utilizan claves con nombre como índices para sus valores.
Ejemplo: $age = array(“Jonh”=> “11”, "Ken"=>"19", "Tim"=>"14“);
Codificando una matriz asociativa con Json:
``` en PHP
<?php 
     $book = array("id"=>101, "label"=>"Lorem Ipsum"); 
     echo json_encode($book); 
?>
```


## json_encode() 
Retorna la representación JSON del valor dado.
json_encode() es una función nativa de PHP que le permite convertir datos PHP al formato JSON.

**Editor de Código :** 
- Visual Estudio Code

## 🔢 Estadísticas

 ![Creado](https://img.shields.io/badge/Creado-30--10--2025-blue)
![Visitor Count](https://badgen.net/github/watchers/Salomon2514/EjemplosJson)
![Visitas](https://visitor-badge.laobi.icu/badge?page_id=Salomon2514.EjemplosJson)

## 📚 Cómo usar este repositorio

1. Descarga o clona el repositorio, ubica una carpeta en www -> para WampServer o htdocs  si es Xampp
  ```bash
   [https://github.com/Salomon2514/EjemplosJson.git]
2. Para correrlos edita el URL de su navegador:  http://127.1.1.1/Carpeta/ o  http://localhost/Carpeta/
```

## 👨‍🏫 Autor

**Irina Fong**  
Docente de Programación  
Universidad Tecnológica de Panamá  

📧 **Email:** irina.fong@utp.ac.pa  
🌐 **GitHub:**(https://github.com/Salomon2514)  


## 📖 Referencias
![GitHub watchers](https://img.shields.io/github/watchers/Salomon2514/EjemplosJson.svg?style=social)
![Status](https://img.shields.io/badge/Estado-Finalizado-success)
![License](https://img.shields.io/badge/License-MIT-blue.svg)





