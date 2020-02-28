<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Losüng Tech</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link href="assets/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media='screen,print' />

    <link rel="stylesheet" href="assets/css/Fuentes.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/contacto.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/lib/metro-notifications/static/css/MetroNotificationStyle.min.css">
    

</head>

<body>
    <?php include('view/includes/navbar.php')?>
    <h1 id="Titulo" class="espacio-top center"><u>CONTACTO</b></h1>
    <div class="container-fluid">          
        <div class="row">
            <div class="col-sm-2 col-xs-12"></div>
            <div class="col-sm-8 col-xs-12 form-contacto">
                
                <form id='formulario' method='post' action='' target='_self' onsubmit="return false;" enctype="multipart/form-data" autocomplete="off">                
                    
                        <div class="row">
                            <div>
                                <input id="opc" name="opc" type="hidden" value="GuardarComentario">
                            </div>
                            <div class="col-sm-6 ColFormulario">
                                <input id="nombre" name="nombre" type="text" class="form-control requerido" placeholder="NOMBRE">
                            </div>
                            <div class="col-sm-6 ColFormulario">
                                <input id="apellido" name="apellido" type="text" class="form-control requerido" placeholder="APELLIDO">
                            </div>
                        </div>	
                        <div class="row">
                            <div class="col-sm-6 ColFormulario">
                                <input id="correo" name="correo" type="email" class="form-control requerido" onblur="validaMail(this.value, this.id);return false;" placeholder="EMAIL">
                            </div>
                            <div class="col-sm-6 ColFormulario">
                                <input id="telefono" name="telefono" type="text" class="form-control" onkeypress="return isNumberKey(event);" onblur="validaLongitud(this.id,10);return false;" maxlength="10" placeholder="TELÉFONO">
                            </div>
                        </div>	
                        <div class="row">	
                            <div class="col-sm-12 ColFormulario">
                                <textarea id="mensaje" name="mensaje" class="form-control requerido" rows="10" placeholder="MENSAJE"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 DivGuardar">
                                <button type="submit" id="enviarcorreo" onclick="ValidarFormulario();return false;" class="btn btn-success" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando">ENVIAR</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>

    <?php include('view/includes/footer.php')?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/metro-notifications/static/js/MetroNotification.min.js"></script>
    <script src="assets/js/Notificaciones.js"></script>  
    <script src="assets/js/ValidarDatos.js"></script>
    <script src="assets/js/ProcesarMensajes.js"></script>

    <script type="text/javascript">

    $(window).ready(function() {
        $("#navigation").removeClass("animated-header");
        $(".Logo-Navbar").addClass("animated-header");
    });

    
    </script>
</body>

</html>