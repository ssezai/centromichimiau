<?php
$nombre_regist = $_POST ['nombre'];
$apellido_regist = $_POST ['apellido'];
$telefono_regist = $_POST ['telefono'];
$mail_regist = $_POST ['mail'];
$comentario_regist = $_POST ['comentario'];


$datos_bd = mysqli_connect ("localhost", "root", "", "adoptantes") or exit ("No se puede conectar con la Base de Datos");

mysqli_query($datos_bd, "INSERT INTO datos_adop VALUES (null, '{$_POST ['nombre']}', '{$_POST ['apellido']}', '{$_POST ['telefono']}', '{$_POST ['mail']}', '{$_POST ['comentario']}')");

header("Location: index.php?ok#registro");
?>
