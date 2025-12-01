<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Web PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1><?php echo "Bienvenido a tu proyecto PHP"; ?></h1>
        <p>Servidor: <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'PHP Built-in Server'; ?></p>
    </header>

    <main>
        <section>
            <h2>Información del Sistema</h2>
            <ul>
                <li>Versión de PHP: <?php echo phpversion(); ?></li>
                <li>Fecha actual: <?php echo date('d/m/Y H:i:s'); ?></li>
                <li>Sistema operativo: <?php echo PHP_OS; ?></li>
            </ul>
        </section>

        <section>
            <h2>Características del Proyecto</h2>
            <p>Este es un proyecto web PHP básico con:</p>
            <ul>
                <li>Estructura de carpetas organizada</li>
                <li>Separación de assets (CSS, JS, imágenes)</li>
                <li>Archivo de configuración</li>
                <li>Soporte para includes y componentes</li>
            </ul>
        </section>

        <section>
            <h2>Formulario de Contacto</h2>
            <p>Envía tus datos y se procesarán con PHP:</p>
            <form action="procesar.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad" min="1" max="120" required>
                </div>

                <div class="form-group">
                    <label for="pais">País:</label>
                    <select id="pais" name="pais" required>
                        <option value="">Selecciona un país</option>
                        <option value="España">España</option>
                        <option value="México">México</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn-submit">Enviar Datos</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Mi Proyecto Web</p>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
