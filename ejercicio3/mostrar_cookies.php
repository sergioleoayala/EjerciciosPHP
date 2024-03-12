<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar cookies</title>
</head>
<body>
    <h1>Mostrar cookies</h1>
    <?php
    if(isset($_COOKIE['cookieName']) && isset($_COOKIE['cookieApellido'])) {
        echo "Nombre: " . $_COOKIE['cookieName'] . "<br>";
        echo "Apellido: " . $_COOKIE['cookieApellido'] . "<br><br>";
    } else {
        echo "No hay ningún nombre y apellido guardado en el formulario.<br><br>";
    }
    ?>
    <form action="destruir.php" method="post">
        <input type="submit" value="Limpiar Cookies">
    </form>
    <br>
    <a href="index.php">Volver a cargar nuevos datos</a>
</body>
</html>
