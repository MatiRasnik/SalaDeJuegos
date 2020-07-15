<?php
include '../conexion.php';
if(isset($_POST['usuario']) && $_POST['contrasenia']){
    $sql = "SELECT usuario FROM usuarios WHERE usuario = ".$_POST['usuario'];
        if ($result = $mysqli -> query($sql)) {
            $sql2 = "SELECT contra FROM usuarios WHERE contra = ".$_POST['contrasenia'];
        if ($result = $mysqli -> query($sql2)) {
            session_start();
            $_SESSION['usuario']=$_POST['usuario'];
            header('Location: ../index.html');
    }
}else{
    echo "El Usuario o contaseña no son correctas";

}
?>