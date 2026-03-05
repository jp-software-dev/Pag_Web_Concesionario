<?php
// Configura la cabecera JSON e importa la conexión a la base de datos
header('Content-Type: application/json');
require_once '../config/config.php';

// Consulta los vehículos y genera una lista simplificada para llenar selects/dropdowns
$stmt = $pdo->query("SELECT id, brand, model, year FROM vehicles ORDER BY brand, model");
$options = [];
while ($row = $stmt->fetch()) {
    $options[] = [
        'value' => $row['id'],
        'label' => $row['brand'] . ' ' . $row['model'] . ' ' . $row['year']
    ];
}

// Imprime las opciones en formato JSON respetando caracteres especiales
echo json_encode($options, JSON_UNESCAPED_UNICODE);
?>
