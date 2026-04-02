<?php
// Establece que la respuesta del archivo será en formato JSON y manda a llamar el archivo de configuración para conectar a la base de datos.
header('Content-Type: application/json');
require_once '../config/config.php';

// Obtiene todos los vehículos de la base de datos y mapea cada registro para estructurar ordenadamente su información básica, especificaciones técnicas y características.
$vehicles = getVehicles($pdo);
$result = array_map(function($v) {
    return [
        'id' => $v['id'],
        'brand' => $v['brand'],
        'model' => $v['model'],
        'year' => $v['year'],
        'price' => number_format($v['price'], 2, '.', ''),
        'priceUnit' => $v['price_unit'],
        'kilometers' => $v['mileage'],
        'exteriorColor' => $v['exterior_color'],
        'interiorColor' => $v['interior_color'],
        'imageBase' => $v['image_base'],
        'imageExtension' => $v['image_extension'],
        'totalImages' => $v['total_images'],
        'specs' => [
            'motor' => $v['engine'],
            'potencia' => $v['potencia'],
            'aceleracion' => $v['aceleracion'],
            'velocidadMax' => $v['velocidad_max'],
            'transmision' => $v['transmision'],
            'traccion' => $v['traccion'],
            'consumo' => $v['consumo']
        ],
        'features' => $v['features'] ?? []
    ];
}, $vehicles);

// Convierte el arreglo final a formato JSON, asegurando que los acentos y caracteres especiales no se rompan, y lo imprime como respuesta.
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>