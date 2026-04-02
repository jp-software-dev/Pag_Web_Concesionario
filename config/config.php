<?php
// Inicia la sesión si no existe
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Definir la ruta al archivo .env (subiendo un nivel desde 'config' hacia la raíz)
$envPath = __DIR__ . '/../.env';

// Verificar que el archivo exista por seguridad
if (!file_exists($envPath)) {
    die("Error crítico: Archivo de configuración no encontrado.");
}

// Leer las variables del .env
$env = parse_ini_file($envPath);

// Asignar variables (asegúrate de que los nombres coincidan con tu archivo .env)
$host   = $env['DB_HOST'];
$dbname = $env['DB_NAME'];
$user   = $env['DB_USER'];
$pass   = $env['DB_PASS'];

// Conexión segura con PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    error_log("Error de conexión PDO: " . $e->getMessage()); 
    die("Error interno del servidor. No se pudo conectar a la base de datos.");
}

// Obtiene la lista completa de vehículos ordenados del más reciente al más antiguo...
function getVehicles($pdo) {
    $stmt = $pdo->query("SELECT * FROM vehicles ORDER BY id DESC");
    $vehicles = $stmt->fetchAll();
    foreach ($vehicles as &$v) {
        $stmtF = $pdo->prepare("SELECT feature FROM vehicle_features WHERE vehicle_id = ?");
        $stmtF->execute([$v['id']]);
        $v['features'] = $stmtF->fetchAll(PDO::FETCH_COLUMN);
    }
    return $vehicles;
}

// Busca y devuelve los datos detallados de un vehículo específico...
function getVehicle($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM vehicles WHERE id = ?");
    $stmt->execute([$id]);
    $v = $stmt->fetch();
    if ($v) {
        $stmtF = $pdo->prepare("SELECT feature FROM vehicle_features WHERE vehicle_id = ?");
        $stmtF->execute([$id]);
        $v['features'] = $stmtF->fetchAll(PDO::FETCH_COLUMN);
    }
    return $v;
}

// Borra físicamente del servidor todas las imágenes...
function deleteCarImages($pdo, $id, $basePath) {
    $stmt = $pdo->prepare("SELECT image_base, image_extension, total_images FROM vehicles WHERE id = ?");
    $stmt->execute([$id]);
    $car = $stmt->fetch();
    if ($car && $car['image_base']) {
        for ($i = 1; $i <= $car['total_images']; $i++) {
            $file = $basePath . '/' . $car['image_base'] . $i . $car['image_extension'];
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }
}
?>