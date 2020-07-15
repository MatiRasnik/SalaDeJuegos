<?php
include '../conexion.php';
if(isset($_POST['usuario']) && $_POST['contrasenia']){
    $sql = "SELECT contra FROM usuarios WHERE contra = ".$_POST['contrasenia'];
    $result = $mysqli -> query($sql);
        if ($result) {
            session_start();
            $_SESSION['usuario']=$_POST['usuario'];
        }else{
    echo "El Usuario o contaseña no son correctas";
    }
}
?>