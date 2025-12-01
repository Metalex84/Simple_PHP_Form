<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Mi Proyecto Web PHP'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <h1><?php echo APP_NAME ?? 'Mi Proyecto Web'; ?></h1>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Acerca de</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
