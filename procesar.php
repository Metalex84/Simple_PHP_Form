<?php
/**
 * Página para procesar datos del formulario
 */

// Verificar que se recibieron datos por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Sanitizar y obtener los datos del formulario
$nombre = htmlspecialchars($_POST['nombre'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$edad = htmlspecialchars($_POST['edad'] ?? '', ENT_QUOTES, 'UTF-8');
$pais = htmlspecialchars($_POST['pais'] ?? '', ENT_QUOTES, 'UTF-8');
$mensaje = htmlspecialchars($_POST['mensaje'] ?? '', ENT_QUOTES, 'UTF-8');

// Validar que todos los campos tengan datos
if (empty($nombre) || empty($email) || empty($edad) || empty($pais) || empty($mensaje)) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Procesados - Mi Proyecto Web PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>✅ Datos Procesados Correctamente</h1>
        <p>Los datos se han recibido mediante POST</p>
    </header>

    <main>
        <section class="success-section">
            <h2>Información Recibida</h2>
            
            <div class="data-display">
                <div class="data-item">
                    <span class="data-label">Nombre:</span>
                    <span class="data-value"><?php echo $nombre; ?></span>
                </div>

                <div class="data-item">
                    <span class="data-label">Email:</span>
                    <span class="data-value"><?php echo $email; ?></span>
                </div>

                <div class="data-item">
                    <span class="data-label">Edad:</span>
                    <span class="data-value"><?php echo $edad; ?> años</span>
                </div>

                <div class="data-item">
                    <span class="data-label">País:</span>
                    <span class="data-value"><?php echo $pais; ?></span>
                </div>

                <div class="data-item">
                    <span class="data-label">Mensaje:</span>
                    <span class="data-value message-text"><?php echo nl2br($mensaje); ?></span>
                </div>
            </div>

            <div class="info-box">
                <h3>Detalles Técnicos</h3>
                <ul>
                    <li>Método de envío: <strong><?php echo $_SERVER['REQUEST_METHOD']; ?></strong></li>
                    <li>Fecha de procesamiento: <strong><?php echo date('d/m/Y H:i:s'); ?></strong></li>
                    <li>IP del cliente: <strong><?php echo $_SERVER['REMOTE_ADDR'] ?? 'Desconocida'; ?></strong></li>
                    <li>User Agent: <strong><?php echo substr($_SERVER['HTTP_USER_AGENT'] ?? 'Desconocido', 0, 50); ?>...</strong></li>
                </ul>
            </div>

            <a href="index.php" class="btn-back">← Volver a la Página Principal</a>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Mi Proyecto Web</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
