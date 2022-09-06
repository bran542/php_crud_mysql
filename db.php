<?php

//SESION PARA GUARDAR DATOS (MENSAJES DE ALERTA)
session_start();

$conn = mysqli_connect(
    'localhost','root','','php_crud_mysql_db'
);
/* PRUBA DE CONEXION A LA BASE DE DATOS
if(isset($conn)){
    echo 'DB IS CONNECTED';
}
*/
?>