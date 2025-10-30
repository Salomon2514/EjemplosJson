<?php
// Establecer cabecera para indicar que la respuesta es JSON
header('Content-Type: application/json');
//📌 ¿Qué hace?
//Informa al cliente (navegador o app) que la respuesta que devolverá 
//este script será en formato JSON. 🔒 También es útil para evitar
//errores de interpretación del contenido por parte del navegador
//o herramientas externas.


// Obtener los datos JSON de la entrada 
//$input = file_get_contents('php://input');
//Lee el contenido del archivo datos.json como una cadena json y luego 
//lo convierte a un arreglo asociativo en PHP gracias al segundo parámetro 
//true de json_deconde.

$data = json_decode(file_get_contents('datos.json'), true); //Convierte a un Arreglo Asociativo [true]


// Validar que existan los tres lados
if (!isset($data['a']) || !isset($data['b']) || !isset($data['c'])) {
    echo json_encode(['error' => 'Faltan uno o más lados del triángulo']);
    exit;
}

$a = $data['a'];
$b = $data['b'];
$c = $data['c'];



// Verificar si los lados forman un triángulo válido
if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    // Determinar tipo de triángulo
    if ($a == $b && $b == $c) {
        $tipo = "Equilátero";
    } elseif ($a == $b || $a == $c || $b == $c) {
        $tipo = "Isósceles";
    } else {
        $tipo = "Escaleno";
    }

    echo json_encode([
        'valido' => true,
        'tipo' => $tipo
    ]);
} else {
    echo json_encode([
        'valido' => false,
        'mensaje' => 'Los lados no forman un triángulo válido'
    ]);
}
?>