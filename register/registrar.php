<?php


include '../conexion.php';
session_start();




if(isset($_POST['usuario']) && $_POST['nombre'] && $_POST['contrasenia']){
    // aquí pongo lo de mysql para verificar que no exista usuario y para guardar el nuevo usuario.
    
    $sql = "SELECT usuario FROM usuarios WHERE usuario = ".$_POST['usuario'];

    if ($result = $mysqli -> query($sql)) {
      // es error, el usuario existe.
      echo 'lo lamento... ya existe usuario';
      $result -> free_result();
    }else{
        // aquí grabamos el nuevo usuario.
        $usuario = '"'.$mysqli->real_escape_string($_POST['usuario']).'"';
        $nombre = '"'.$mysqli->real_escape_string($_POST['nombre']).'"';
        $contrasenia = '"'.$mysqli->real_escape_string($_POST['contrasenia']).'"';

        //MySqli Insert Query
        $insert_row = $mysqli->query("INSERT INTO usuarios (usuario, nombre, apellido, contra) VALUES($usuario, $nombre,'apellidos', $contrasenia)");

        if($insert_row){
            print 'Ok, todo grabado : ' .$mysqli->insert_id .'<br />'; 
            $_SESSION['usuario']=$_POST['usuario'];
            header('Location: ../index.html');
        }else{
            die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        }
    }
    
    $mysqli -> close();

   
    
}


?>