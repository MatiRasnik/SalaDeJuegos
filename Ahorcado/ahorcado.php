<html lang="es">

    <head>
        <title>Gameroom | Ahorcado</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles.css">
        <script src="../js/function.js"></script> 
    </head>

    <?php
    session_start();
    
            $_SESSION['reg'] = false;
             if (!isset($_SESSION['usuario'])){
                $_SESSION['reg'] = true;
                header("Location: ../Register/Register.html");
             }
    ?>

    <body onload="inicio()">

        <div id="header"></div>
        
        <div id="Linea"></div>

            <div id="container">
            <div class="pizarron">
                <div class="col">
                    <span id="LetraAhorcado" class="partidas">Partidas Ganadas: <span id="ganadas">0</span></span>
                    <span id="LetraAhorcado" class="partidas">Partidas Perdidas: <span id="perdidas">0</span></span>
                </div>
                <picture>
                    <img src="img/ahorcado_6.png" alt="" id="image6">
                    <img src="img/ahorcado_5.png" alt="" id="image5" class="oculto">
                    <img src="img/ahorcado_4.png" alt="" id="image4" class="oculto">
                    <img src="img/ahorcado_3.png" alt="" id="image3" class="oculto">
                    <img src="img/ahorcado_2.png" alt="" id="image2" class="oculto">
                    <img src="img/ahorcado_1.png" alt="" id="image1" class="oculto">
                    <img src="img/ahorcado_0.png" alt="" id="image0" class="oculto">
                </picture>
                <h3 id="acierto"></h3>
                <h2 class="palabra" id="palabra"></h2>
                <div class="col1">
                    <h3 id="LetraAhorcado">Intentos restantes: <span id="intentos">6</span></h3>
                    <span class="LetraAhorcadoPista" id="hueco-pista"></span>
                </div>
            </div>
            <div>
                <button class="botonAhorcado" id="reset" onclick="inicio()" class="button">Reiniciar</button>
                <button class="botonAhorcado" id="pista" onclick="pista()" class="button">Pista</button>
            </div>
            <div id="limit">
                <div id="abecedario" class="small-wrap">
                </div>
            </div>
        </div>
        <div id="Linea"></div>
        <div id="footer"></div>
        <script src="js/functions.js"></script>
    </body>
</html>
