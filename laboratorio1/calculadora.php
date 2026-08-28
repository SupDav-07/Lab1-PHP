<?php
header('Content-Type: text/html; charset=utf-8');

$num1 = (float) $_POST['num1'];
$num2 = (float) $_POST['num2'];
$operacion = $_POST['operacion'];
$decimales = (int) $_POST['decimales'];

$resultado = 0;
$simbolo = "";

switch ($operacion) {
    case 'suma':
        $resultado = $num1 + $num2;
        $simbolo = "+";
        break;
    case 'resta':
        $resultado = $num1 - $num2;
        $simbolo = "-";
        break;
    case 'multiplicacion':
        $resultado = $num1 * $num2;
        $simbolo = "*";
        break;
}

$resultado = round($resultado, $decimales);

echo "<h2>Resultado</h2>";
echo "$num1 $simbolo $num2 = $resultado";

?>