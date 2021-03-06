<html lang="en">
  <head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="../js/function.js"></script>
    <script src="JS/Functions.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <meta name="google" content="notranslate" />
    <title>Gameroom | El Mayor</title>
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
      <div id="Linea"></div>

    <div id="puntaje">Puntos: 0</div>
    <div class="negro">
      <div class="Titulo">
        El Mayor
      </div>
      <div id="juego" unselectable="on" class="unselectable">
                    <table>
                       <tr id="difum">
                        <td id="0" class="Texto" data-valor="valor" onclick="elegirCarta()"></td>
                        <td id="1" class="Texto" data-valor="valor" onclick="elegirCarta()"></td>
                        <td id="2" class="Texto" data-valor="valor" onclick="elegirCarta()"></td>
                       </tr>
                    </table>
                </div>
                <center>
                  <button type="button" id="btn1" class="btn btn-secondary" onclick="iniciarJuego()">Jugar</button>
                  <button type="button" id="btn1" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">¿Como Jugar?</button>
                </center>
                <br> 
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Instrucciones</h4>
                        </div>
                        <div class="modal-body">
                          <p id="TextoModal">Elegie una carta, si esa carta contiene el numero de mayor valor ganas 100 puntos.
                            <br>
                            ¡A Jugar!
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="btn3" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div> 
                    </div> 
                  </div>
                  <div class="modal1" id="ganar" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Resultado:</h4>
                        </div>
                        <div class="modal-body">
                          <p id="TextoModal">!Has Ganado 100 puntos felicitaciones!
                            ¡Continua Jugando para ganar mas puntos!
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="btn3" class="btn btn-default" onclick="cerarmodal1()"data-dismiss="modal">Cerrar</button>
                        </div>
                      </div> 
                    </div> 
                  </div>
                  <div class="modal1" id="perder" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Resultado:</h4>
                        </div>
                        <div class="modal-body">
                          <p id="TextoModal">!Has perdido, la proxima tendras mas suerte!
                             !Continua Jugando¡
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="btn3" class="btn btn-default" onclick="cerarmodal2()"data-dismiss="modal">Cerrar</button>
                        </div>
                      </div> 
                    </div> 
                  </div>
                  <div id="Linea"></div>
                  <div id="footer"></div>
              </body>
            </html>
    </body>
</html>