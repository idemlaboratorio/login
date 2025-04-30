<?php
/*
 * Archivo de configuración de la base de datos
 * Guarda aquí tus credenciales y detalles de conexión.
 */

// Define constantes para los detalles de la conexión
define('DB_SERVER', 'localhost');      // Servidor de la base de datos (usualmente localhost)
define('DB_USERNAME', 'jerr');         // Usuario de la base de datos (cambia esto en producción)
define('DB_PASSWORD', '123456789');             // Contraseña de la base de datos (cambia esto en producción)
define('DB_NAME', 'login_db');         // Nombre de la base de datos que creaste

// Intentar conectar a la base de datos MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar la conexión
if($conn === false){
    // Si la conexión falla, muestra un error genérico y detiene el script.
    // En un entorno de producción, deberías registrar este error en lugar de mostrarlo.
    die("ERROR: No se pudo conectar a la base de datos. " . mysqli_connect_error());
}

// Opcional: Establecer el charset a utf8mb4 (recomendado)
mysqli_set_charset($conn, "utf8mb4");

// Nota: No cerramos la conexión ($conn) aquí.
// Se cerrará en los scripts que la usen o automáticamente al final de la ejecución del script PHP.
?>