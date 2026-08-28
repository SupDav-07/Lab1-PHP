<?php
header('Content-Type: text/html; charset=utf-8');
$pulgadas = $_POST['pulgadas'];
$centimetros = $pulgadas * 2.54;
echo "$pulgadas pulgadas equivalen a $centimetros centímetros.";
?>