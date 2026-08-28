<?php
header('Content-Type: text/html; charset=utf-8');

// Leer el radio (dato real) enviado desde el formulario
$radio = (float) $_POST['radio'];

// Calcular el área de la circunferencia: Área = π * r^2
$area = pi() * pow($radio, 2);

// Calcular el perímetro de la circunferencia: Perímetro = 2 * π * r
$perimetro = 2 * pi() * $radio;

// Redondear los resultados a 2 decimales
$area = round($area, 2);
$perimetro = round($perimetro, 2);

// Mostrar los resultados en pantalla
echo "<h2>Resultado</h2>";
echo "Radio: $radio <br>";
echo "Área de la circunferencia: $area <br>";
echo "Perímetro de la circunferencia: $perimetro";
?>
