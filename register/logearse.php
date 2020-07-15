<?php
include '../conexion.php';
if(isset($_POST['usuario']) && $_POST['contrasenia']){
        $sql = "SELECT * FROM usuarios WHERE usuario = '".$_POST['usuario']."'";
        $result = $mysqli -> query($sql);
        $ss = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if ($result) {
                if($ss["contra"]==$_POST['contrasenia']){
                        session_start();
                        $_SESSION['usuario']=$_POST['usuario'];
                        header('Location: ../index.html');
               
        }else{ 
                $_SESSION['reg2'] = true;
                header("Location: ../Register/login.html");            
                echo '<script language="javascript">alert("El usuario o la contra esta mal!");</script>';
        }
}
}
?>