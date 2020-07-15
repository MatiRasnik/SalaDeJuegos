<!DOCTYPE html>
<html lang="en">
<head>
  <title>Loteria</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles.css">
  <script src="../js/function.js"></script>
  <script src="js/functions.js"></script>
</head>

<?php
    session_start();

            $_SESSION['reg'] = false;
             if (!isset($_SESSION['usuario'])){
                $_SESSION['reg'] = true;
                header("Location: ../Register/Register.html");
             }
    ?>

<body onload="hfform()">
    <div id="header"></div>
    <div class="container">

            <h1 id="h1Loteria">Lotería</h1>


        <div class="topnav">
            <input type="button" id="numbers" value="Nuevo juego!">
            <input type="button" id="go" value="Ver numeros" class="hidden botonLoteria">
            <input type="button" id="next" value="Siguiente ronda" class="hidden botonLoteria">
            <h2 id="aciertos" class="h2Loteria">Aciertos<div id="ac"></div></h2>
            <h2 id="puntos" class="h2Loteria">Puntos<div id="contenido"></div></h2>
            <h2 id="rondas" class="h2Loteria">Puntos Totales<div id="total"></div></h2>
            <h2 id="cantidad" class="h2Loteria">Rondas jugadas<div id="cantidad1"></div></h2>
        </div>  

        <div id="wrapper">
            <div class="ball">
                <div class="numWrapper">
                      <span></span>
                </div>
            </div>
            <div id="bola" class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div id="bola" class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>			
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>

            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
               <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
        </div>
        
        <div id="wrapper">
            <div class="ball">
               <div class="numWrapper">
                    <span></span>
                </div>
            </div>

            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>

            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>

            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
               <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>

            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
               <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>

            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
        </div>
        <div id="wrapper">
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
            <div class="ball">
                <div class="numWrapper">
                    <span></span>
                </div>
            </div>
        </div>
        <div class="numbers">
            <p id="titulo" class="LoteriaLetra"><b>NUMEROS CORRECTOS: </b></p>
            <p id="titulo1" class="LoteriaLetra"><b>SUS NUMEROS: </b></p>
        </div>
        <div class="numbers">
                <div id="wrapper1">
                    <div class="ball1">
                        <div class="numWrapper1">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball1">
                        <div class="numWrapper1">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball1">
                        <div class="numWrapper1">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball1">
                        <div class="numWrapper1">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball1">
                        <div class="numWrapper1">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball1">
                        <div class="numWrapper1">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div id="wrapper2">
                    <div class="ball2">
                        <div class="numWrapper2">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball2">
                        <div class="numWrapper2">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball2">
                        <div class="numWrapper2">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball2">
                        <div class="numWrapper2">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball2">
                        <div class="numWrapper2">
                            <span></span>
                        </div>
                    </div>
                    <div class="ball2">
                        <div class="numWrapper2">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>


    </div>
    
    <div id="footer"></div>
    <script src="js/functions.js"></script>
</body>
</html>
