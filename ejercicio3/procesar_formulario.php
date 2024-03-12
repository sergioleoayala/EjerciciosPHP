
<?php
if(isset($_POST['nombre']) && isset($_POST['apellido'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    setcookie('cookieName', $nombre, time() + (86400 * 30), "/");
    setcookie('cookieApellido', $apellido, time() + (86400 * 30), "/");
}
header("Location: mostrar_cookies.php");
exit;
?>
