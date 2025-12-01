# Mi Proyecto Web PHP

Proyecto web básico con soporte PHP 8.5

## Estructura del Proyecto

```
myweb/
├── index.php          # Página principal
├── config.php         # Configuración del proyecto
├── .htaccess          # Configuración de Apache
├── README.md          # Este archivo
├── assets/            # Recursos estáticos
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── images/
└── includes/          # Archivos PHP reutilizables
    └── header.php
```

## Cómo ejecutar el proyecto

### Opción 1: Servidor PHP integrado (recomendado para desarrollo)

```bash
php -S localhost:8000
```

Luego abre tu navegador en: http://localhost:8000

### Opción 2: Apache/MAMP/XAMPP

1. Copia el proyecto a la carpeta `htdocs` o `www`
2. Accede a través de: http://localhost/myweb

### Opción 3: Docker (opcional)

```bash
docker run -d -p 8080:80 -v $(pwd):/var/www/html php:8.5-apache
```

## Requisitos

- PHP 8.5 o superior
- Servidor web (Apache, Nginx, o el servidor integrado de PHP)

## Próximos pasos

1. Configurar la base de datos en `config.php`
2. Crear nuevas páginas en la raíz o usar un sistema de enrutamiento
3. Agregar componentes reutilizables en la carpeta `includes/`
4. Personalizar los estilos en `assets/css/style.css`

## Notas

- El archivo `.htaccess` está configurado para Apache
- Si usas Nginx, necesitarás configurar las reglas de reescritura en tu configuración de servidor
- El modo de desarrollo está habilitado en `config.php` (muestra errores)
