<?php
include '../conexion.php';
session_start();
if(isset($_POST['usuario']) && $_POST['nombre'] && $_POST['contrasenia']){
    // aquí pongo lo de mysql para verificar que no exista usuario y para guardar el nuevo usuario.
    $usuario = $mysqli->query("SELECT usuario FROM usuarios WHERE usuario = ".$_POST['usuario'])->fetch_object()->usuario;
    if(isset($usuario)){
        echo 'lo lamento... ya existe usuario';
    }else{

        $usuario = '"'.$mysqli->real_escape_string($_POST['usuario']).'"';
        $nombre = '"'.$mysqli->real_escape_string($_POST['nombre']).'"';
        $contrasenia = '"'.$mysqli->real_escape_string($_POST['contrasenia']).'"';

        //MySqli Insert Query
        $insert_row = $mysqli->query("INSERT INTO usuarios (usuario, nombre, contra) VALUES($usuario, $nombre, $contrasenia)");

        if($insert_row){
            print 'Ok, todo grabado : ' .$mysqli->insert_id .'<br />'; 
            $_SESSION['usuario']=$_POST['usuario'];
            header('Location: ../index.html');
        }else{
            die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        }
       
    }
    
}


?>