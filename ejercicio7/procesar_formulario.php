<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos elegidos</title>
</head>
<body>
    
</body>
<?php
$nombre = $_POST ['nombreInput'];
$autoInput = $_POST ['autoInput'];

echo "<br><br>Bienvenida/o  $nombre!!! <br><br> Llegó tu auto:";


foreach ($autoInput as $index => $auto) {
    echo " $auto," ;}
?>
<br><br>
<a href="index.php">Volver a elegir</a>




</html>