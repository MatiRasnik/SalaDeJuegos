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

    

    $sql1 = "SELECT usuario FROM puntaje WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
       
        
        if ($result = $mysqli -> query($sql1)) {
            $sql2 = "SELECT puntos_j FROM puntaje WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
    
            $puntajeTotal1 = $puntos_j;
            $puntos_j = $sql2 + $puntajeTotal1;

            $sql = "UPDATE puntaje SET puntos_j = ".$puntos_j." WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
           
            $insert_row = $mysqli->query($sql);

            $sql4 = "SELECT puntos_j FROM puntaje WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
            echo $sql4;

        }else{
        $usuario = '"'.$mysqli->real_escape_string($_SESSION['usuario']).'"';
        $puntos_j = '"'.$mysqli->real_escape_string($_POST['puntajeTotal']).'"';
        $id_juego = '"'.$mysqli->real_escape_string($_POST['id_juego']).'"';
        $sql3="INSERT INTO puntaje (id_juego, usuario, puntos_j) VALUES(".$_POST['id_juego'].",". $usuario.", ".$_POST['puntajeTotal'].")";
           
        $insert_row = $mysqli->query($sql3);

        $sql5 = "SELECT puntos_j FROM puntaje WHERE usuario = ".$usuario." and id_juego= ".$_POST['id_juego'];
        echo $sql5;
        
        }
        $mysqli -> close();
    }

?>