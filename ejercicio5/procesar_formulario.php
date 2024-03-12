<?php

function calcularTabla(){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    echo "Tabla del primer número ingresado es: $num1";
    echo "<br>Límite de acuerdo al segundo número ingresado es: $num2";

    $tabla = $num1;
    $limite = $num2;
    echo "<br><br>Tabla del $tabla <br>";
    for ($i=1; $i <= $limite ; $i++) { 
        echo $tabla.' * '.$i.' = '.$tabla*$i.'<br>';
    }
}
calcularTabla();
?>