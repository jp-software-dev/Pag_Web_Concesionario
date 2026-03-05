<?php
// Configura la cabecera JSON e importa la conexión a la BD
header('Content-Type: application/json');
require_once '../config/config.php';

// Obtiene los vehículos y estructura los datos para la API del Frontend
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

// Retorna el JSON final respetando acentos y caracteres especiales
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>
