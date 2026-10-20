<?php
$host = getenv('DB_HOST') ?: 'localhost';
$db   = getenv('DB_NAME') ?: 'incidencias';
$user = getenv('DB_USER') ?: 'app_incidencias';
$pass = getenv('DB_PASS');

if ($pass === false || $pass === '') {
    die('Falta configurar DB_PASS.');
}

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    die("No se ha podido conectar con la base de datos.");
}
