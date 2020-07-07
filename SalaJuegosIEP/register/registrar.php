<?php
include '../conexion.php';
session_start();
if(isset($_POST['usuario'])){
    // aquí pongo lo de mysql para verificar que no exista usuario y para guardar el nuevo usuario.
    $_SESSION['usuario']=$_POST['usuario'];
}

header('Location: ../index.html');
?>