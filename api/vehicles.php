<?php
// Especificamos que la respuesta de este archivo será en formato JSON
header('Content-Type: application/json');
require_once '../config/config.php';

// Método para obtener la lista completa de vehículos desde la Base de Datos
$vehicles = getVehicles($pdo);

// Mapeamos y reestructuramos los datos obtenidos de la BD para enviarlos limpios y ordenados al Frontend
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

// Convertimos el arreglo a formato JSON y lo imprimimos (JSON_UNESCAPED_UNICODE evita que se rompan los acentos o las ñ)
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>
