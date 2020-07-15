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

    
            $sql = "UPDATE puntaje SET punatje_j WHERE usuario = ".$_POST['puntajeTotal'];
            $sql = "UPDATE puntaje SET id_juego WHERE usuario = ".$_POST['puntajeTotal'];
    
    
        $usuario = '"'.$mysqli->real_escape_string($_SESSION['usuario']).'"';
        $puntos_j = '"'.$mysqli->real_escape_string($_POST['puntajeTotal']).'"';
        $id_juego = '"'.$mysqli->real_escape_string($_POST['id_juego']).'"';

        $insert_row = $mysqli->query("INSERT INTO puntaje (id_juego, usuario, puntos_j) VALUES($id_juego, $usuario, $puntos_j)");

        $mysqli -> close();


?>