<?php
include 'conexion.php';
session_start();
if(isset($_POST['puntajeTotal']) && $_POST['id_juego']){

    $puntos_j = "0";
    $usuario = $_SESSION['usuario'];
    $id_juego = "0";

    if($_POST['puntajeTotal'] == null){
        $puntos_j = "0";
    }else
    $puntos_j = $_POST['puntajeTotal'];

    if($_POST['id_juego'] == null){
        $id_juego = "0";
    }else
    $id_juego = $_POST['id_juego'];

    $sql1 = "SELECT usuario FROM puntaje WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
       
        
        if ($result = $mysqli -> query($sql1)) {
    
            $sql = "UPDATE puntaje SET puntos_j = ".$puntos_j." WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
           
        }else{
        $usuario = '"'.$mysqli->real_escape_string($_SESSION['usuario']).'"';
        $puntos_j = '"'.$mysqli->real_escape_string($_POST['puntajeTotal']).'"';
        $id_juego = '"'.$mysqli->real_escape_string($_POST['id_juego']).'"';
        $sql2="INSERT INTO puntaje (id_juego, usuario, puntos_j) VALUES(".$_POST['id_juego'].",". $usuario.", ".$_POST['puntajeTotal'].")";
           
        $insert_row = $mysqli->query($sql2);
        
        }
        $mysqli -> close();
    }

?>