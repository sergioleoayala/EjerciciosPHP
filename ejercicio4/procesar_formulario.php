<?php
$nombre = $_POST ['nombreInput'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacionInput = $_POST ['operacionInput'];




echo "<br><br>Bienvenida/o  $nombre!!! <br>";
echo "<br><br>Primer número ingresado es: $num1";
echo "<br><br>Segundo número ingresado es: $num2";

foreach ($operacionInput as $index => $operaciones) {
echo "<br><br> La operación seleccionada es $operaciones," ;}

if (is_numeric($num1) && is_numeric($num2)) {
        // Realizar la operación seleccionada
        switch ($operaciones) {
        case 'sumar':
                $resultado = $num1 + $num2;
                break;
        case 'restar':
                $resultado = $num1 - $num2;
                break;
        case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
        case 'dividir':
                // Verificar si el segundo número es cero
                if ($num2 != 0) {
                $resultado = $num1 / $num2;
                } else {
                $resultado = "Error: división por cero";
                }
                break;
        default:
                $resultado = "Operación no válida";
        }

        // Mostrar el resultado
echo "<br><br>El resultado de la operación $operaciones es:--------> $resultado";
} else {
        echo "<br>Por favor, ingrese números válidos.";
} 

?>