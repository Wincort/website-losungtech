<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<div class="navbar-brand">
                <a href="./"><img id="logo" src="../assets/img/logo.png" width="50%"></a>
            </div>-->
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="./">Inicio <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo $helper->url("Mensajes","index"); ?>">Mensajes <span id="msg_pendientes" class="badge badge-primary"><?php echo $sin_leer ;?></span></a></li>
                <?php if($sesion->getEsAdmin()){?>
                <li class="dropdown" >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Configuración App<span class="caret"></span></a> 
                  <ul class="dropdown-menu" role="menu">
                    <li ><a href="<?php echo $helper->url("Usuarios","index"); ?>">Gestión de usuarios<span class="sr-only">(current)</span></a></li>
                    <li ><a href="<?php echo $helper->url("Secciones","index"); ?>">Configuración de secciones</a></li>
                    <li ><a href="<?php echo $helper->url("Album","index"); ?>">Grupos de Imágenes</a></li>
                  </ul>
                  </ul>
                </li>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $sesion->getCurrentUser(); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $helper->url("login","cerrarSesion"); ?>">Cerrar Sesión</a></li>
                        </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>