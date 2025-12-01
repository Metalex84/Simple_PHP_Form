<?php
/**
 * Archivo de configuración del proyecto
 */

// Configuración de la aplicación
define('APP_NAME', 'Mi Proyecto Web PHP');
define('APP_VERSION', '1.0.0');
define('APP_ENV', 'development'); // development, production

// Configuración de rutas
define('BASE_PATH', __DIR__);
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('ASSETS_PATH', BASE_PATH . '/assets');

// Configuración de base de datos (ejemplo)
define('DB_HOST', 'localhost');
define('DB_NAME', 'mi_base_datos');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Configuración de error reporting
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Zona horaria
date_default_timezone_set('Europe/Madrid');

// Iniciar sesión
session_start();
