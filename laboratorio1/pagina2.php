<?php
header('Content-Type: text/html; charset=utf-8');

// Leer el nombre enviado desde el formulario
$Nombre = $_REQUEST['nombre'];
echo "El nombre es: " . $Nombre . "<br>";

// Leer la edad enviada desde el formulario
$Edad = $_POST['edad'];

// Validar si la persona es mayor de edad para votar
if (isset($Edad) and $Edad >= 18) {
    echo "Usted puede votar en las próximas elecciones 2028";
} else {
    echo "Usted no es mayor de edad";
}
?>
