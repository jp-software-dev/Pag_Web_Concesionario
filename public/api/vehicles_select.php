<?php
// Configura el archivo para que devuelva datos en formato JSON y carga la conexión a la base de datos.
header('Content-Type: application/json');
require_once '../config/config.php';

// Ejecuta una consulta para obtener el ID, marca, modelo y año de todos los vehículos, ordenados alfabéticamente.
$stmt = $pdo->query("SELECT id, brand, model, year FROM vehicles ORDER BY brand, model");
$options = [];

// Recorre los resultados de la consulta, los formatea combinando la información en una sola etiqueta visual y los imprime como JSON.
while ($row = $stmt->fetch()) {
    $options[] = [
        'value' => $row['id'],
        'label' => $row['brand'] . ' ' . $row['model'] . ' ' . $row['year']
    ];
}
echo json_encode($options, JSON_UNESCAPED_UNICODE);
?>