## ¿Qué es JSON?

JSON nos permite representar y encapsular datos complejos de forma organizada, lo que facilita su uso en internet. 
Aunque su nombre deriva de JavaScript, JSON fue creado para ser utilizado por todos los lenguajes de programación. 

## Convertir objetos PHP a JSON
Dado que la información en JSON se almacena en pares clave/valor, es más probable que  json_encode()  se utilice para
codificar objetos PHP y sus variables de instancia. 

## Ejemplo de objeto PHP a JSON

<img width="1339" height="583" alt="image" src="https://github.com/user-attachments/assets/efbbbfaf-e3e5-454b-8dc1-870594b860b8" />

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
📧 **Email:** irinafong@gmail.com<br>
🌐 **GitHub:**(https://github.com/Salomon2514)  


## 📖 Referencias





