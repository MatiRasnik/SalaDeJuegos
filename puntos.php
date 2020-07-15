<?php
include 'conexion.php';
session_start();
if(isset($_POST['puntajeTotal']) && $_POST['id_juego']){

    $puntos_j = 0;
    $usuario = $_SESSION['usuario'];
    $id_juego = 0;

    if($_POST['puntajeTotal'] == null){
        $puntos_j = 0;
    }else
    $puntos_j = $_POST['puntajeTotal'];

    if($_POST['id_juego'] == null){
        $id_juego = 0;
    }else
    $id_juego = $_POST['id_juego'];

    $usuario = '"'.$mysqli->real_escape_string($_SESSION['usuario']).'"';
    $id_juego = '"'.$mysqli->real_escape_string($_POST['id_juego']).'"';

    $sql1 = "SELECT usuario FROM puntaje WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
    $usuario1 = $mysqli->query($sql1);
        
        if ($usuario1->num_rows > 0) {
            $sql2 = "SELECT puntos_j FROM puntaje WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
    
            $result = $mysqli->query($sql2);
            $row = $result->fetch_assoc();
            $puntos = $row["puntos_j"];    

        
            $puntajeTotal1 = $puntos_j;
            $puntos_j = $puntos + $puntajeTotal1;
            
            $sql = "UPDATE puntaje SET puntos_j = ".$puntos_j." WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
           
            $insert_row = $mysqli->query($sql);

            echo $puntos_j;

        }else{
        $sql3="INSERT INTO puntaje (id_juego, usuario, puntos_j) VALUES(".$_POST['id_juego'].",". $usuario.", ".$_POST['puntajeTotal'].")";
           
        $insert_row = $mysqli->query($sql3);
        
        echo $puntos_j;
        
        }
        $mysqli -> close();
    }

?>

