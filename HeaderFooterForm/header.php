<div id="header">

    <div class="TopNavbar" style="background-color: #292929;">
        <img id="LogoHeader" src="../img/Logo.png">
    </div>

    <nav class="navbar navbar-expand-sm bg-custom navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"><i class="fas fa-bars"></i></button>
        
        <div class="collapse navbar-collapse flex-md-column" id="navbar">
        <ul class="navbar-nav">
            <a class="nav-link" href="../index.html">Inicio</a>
            <a class="nav-link" href="../Form/login.html">Login</a>
            <a class="nav-link" href="../Form/register.html">Register</a>
        </ul>
        <?php
        session_start();
        
        echo "<h2>Bienvenido: ". $_SESSION['usuario']."</h2>";
        ?>
        </div>
    </nav>
</div> 