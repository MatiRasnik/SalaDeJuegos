<?php
include '../conexion.php';
$sql = "SELECT usuario FROM usuarios WHERE usuario = ".$_POST['usuario'];
if ($result = $mysqli -> query($sql)) {
    $sql = "SELECT contra FROM usuarios WHERE contra = ".$_POST['contrasenia'];
    if ($result = $mysqli -> query($sql)) {
            session_start();
            $_SESSION['usuario']=$_POST['usuario'];
            header('Location: ../index.html');
    }
        }else{
                echo "El Usuario o contaseña no son correctas";
}