<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Explorador de Archivos Local</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        h1 { color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { background: #f4f4f4; margin: 5px 0; padding: 10px; border-radius: 5px; }
        a { text-decoration: none; color: #007BFF; font-weight: bold; }
        a:hover { text-decoration: underline; }
        .py { border-left: 5px solid #28a745; } /* Verde para Python */
        .html { border-left: 5px solid #ffc107; } /* Amarillo para HTML */
    </style>
</head>
<body>
    <h1>Mis Proyectos</h1>
    <ul>
        <?php
        // Escanear el directorio actual
        $archivos = scandir('.');

        foreach ($archivos as $archivo) {
            // Ignorar directorios '.' y '..' y este archivo index.php
            if ($archivo == '.' || $archivo == '..' || $archivo == 'index.php') {
                continue;
            }

            // Obtener extension
            $ext = pathinfo($archivo, PATHINFO_EXTENSION);

            // Mostrar solo .py y .html
            if ($ext == 'py' || $ext == 'html') {
                echo "<li class='$ext'><a href='$archivo'>$archivo</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>