<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Inicio</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="assets/css/Loader.css" rel="stylesheet">
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"  media='screen,print' />
        <link href="assets/css/navbar.css" rel="stylesheet">
       
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
            .Titulo{
                color:white;
            }
            .espacio-top{
                margin-top: 6rem;
            }
            .navbar-center {
                width: 100%;
                text-align: center;
            }
            .navbar-center li {
                float: none;
                display: inline-block;
            }
            ul li a:hover{
               text-decoration:none;
           }

        </style>
    </head>
    <body>
        <div class="loader-wrapper">
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>

        <?php include('view/includes/navbar.php')?>

        <div class="container espacio-top slide-body">
            <div class="row">
                <div class="col-md-6" style="color:white;">
                    <img id="logo" src="../images/LOGO.png" width="50%">
                    <h1>¡BIENVENIDO!</h1><h2> <?php echo $sesion->getCurrentUserNombre()." ".$sesion->getCurrentUserApellido(); ?></h2>
                </div>
                <div class="col-md-6" style="color:white;max-height:50vh;overflow-y:auto;">
                    <h3>Funciones</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href='<?php echo $helper->url("Mensajes","index");?>'>
                                <h4 class="list-group-item-heading">Mensajes</h4>
                                <p class="list-group-item-text">Consultar los mensajes enviados desde la página web mediante la sección de contacto.</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6"></div>
                <?php if($sesion->getEsAdmin()){?>
                <div class="col-md-6" style="color:white;max-height:50vh;overflow-y:auto;">
                    <h3>Configuración de aplicación</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href='<?php echo $helper->url("Usuarios","index");?>'>
                                <h4 class="list-group-item-heading">Gestión usuarios</h4>
                                <p class="list-group-item-text">Agregar, editar y borrar usuarios con acceso a la aplicación</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php } ?>
               
            </div>
        </div>
        
        <!--<?php include('view/includes/footer.php')?>-->
    
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/Loader.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Config_navbar.js"></script>

    </body>
</html>