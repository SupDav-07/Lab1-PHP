<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Práctica 3 - Variables</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="tarjeta">
        <?php
            // Guardar cadenas de texto en variables
            $author1 = "René Gaitán";
        

            // Imprimir una cadena que combina texto fijo (HTML)
            // con el valor de las variables (interpolación)
            echo "<h1>Hello World!</h1>
            <p>This dynamic web page was created by $author1</p>";
        ?>
    </div>
</body>
</html>
