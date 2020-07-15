<div id="header">

    <div id="1" class="TopNavbar" style="background-color: #292929;">
        <img src="img/Logo.png" id="LogoHeader">
    </div>

    <nav class="navbar navbar-expand-sm bg-custom navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"><i class="fas fa-bars"></i></button>
        
        <div class="collapse navbar-collapse flex-md-column" id="navbar">
        <ul class="navbar-nav">
            <a class="nav-link" href="index.html">Inicio</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Juegos
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Ahorcado/ahorcado.php">Ahorcado</a>
                  <a class="dropdown-item" href="loteria/loteria.php">Lotería</a>
                  <a class="dropdown-item" href="Mayor/Mayor.php">Mayor</a>
                </div>
            </li>
            <?php
            session_start();
                if(isset ($_SESSION['usuario'])){  
                    $buttonvisible = "display: none;";
                    $buttonvisible1 = "display: block;";

                }else{
                    $buttonvisible1 = "display: none;";
                    $buttonvisible = "display: block;";
                }
                ?>   
            <a class="nav-link" href="register/Login.html" style="<?php echo $buttonvisible ?>">Login</a>
            <a class="nav-link" href="register/Register.html" style="<?php echo $buttonvisible ?>">Register</a>
            <a class="nav-link" href="register/CerrarSesion.php" style="<?php echo $buttonvisible1 ?>">Cerrar Sesion</a>
        </ul>

        </div>
    </nav>

</div> 