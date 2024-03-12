<?php
setcookie('cookieName', '', time() - 3600, "/");
setcookie('cookieApellido', '', time() - 3600, "/");
header("Location: mostrar_cookies.php");
exit;
?>