<?php
include '../conexion.php';
if(isset($_POST['usuario']) && $_POST['contrasenia']){
        $sql = "SELECT contra FROM usuarios WHERE usuarios = ".$_POST['contrasenia'];
    $result = $mysqli -> query($sql);
        if ($result) {
                if($result==$_POST['contrasenia']){
                        session_start();
                        $_SESSION['usuario']=$_POST['usuario'];
                        header('Location: ../index.html');
               }
        }else{
                echo '<script language="javascript">alert("El usuario o la contra esta mal!");</script>';
        }
}
?>