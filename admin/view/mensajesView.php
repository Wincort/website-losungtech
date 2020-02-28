<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title><?php echo $titulo;?></title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"  media='screen,print' />
        <link href='assets/lib/DataTables/css/dataTables.bootstrap.min.css'rel='stylesheet' type='text/css' media='screen,print' >
        <link href='assets/lib/FixedHeader-3.1.4/css/fixedHeader.bootstrap.min.css'rel='stylesheet' type='text/css' media='screen'> 
        <link href='assets/lib/Responsive-2.2.2/css/responsive.bootstrap.min.css'rel='stylesheet' type='text/css' media='screen'> 
        <link rel="stylesheet" href="../assets/lib/metro-notifications/static/css/MetroNotificationStyle.min.css">
        <link href="assets/css/navbar.css" rel="stylesheet">
        <link href="assets/css/Mensajes.css" rel="stylesheet">
        <link href="../assets/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    </head>
    <body>
    
        <?php include('view/includes/navbar.php')?>

        <div class="container espacio-top">
                <div class="">
                    <h3 class="Titulo" style="display:inline;"><?php echo $titulo;?></h3>
                    <hr/>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <table id="lista_mensajes" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mensajes as $mensaje) {?>
                                <?php 
                                    include('view/includes/mensaje.php'); 
                                    include('view/includes/modal_send_copy_msg.php'); 
                                ?>
                                <tr id="row_msg_<?php echo $mensaje->id;?>" <?php if(!$mensaje->revisado) echo 'class="no-revisado"';?> onclick="cargarMensaje(<?php echo $mensaje->id;?>);return false;">
                                    <td><?php echo $mensaje->id; ?></td>
                                    <td><?php $date=strtotime($mensaje->fecha); echo date("d/m/Y g:i a",$date); ?></td>
                                    <td><?php echo $mensaje->email; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-5 panel-mensaje">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Mensaje</div>
                            <div class="panel-body">
                                <div id="PanelMensaje">
                                    <h2>Seleccione un mensaje para visualizar contenido</h2>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/Config_DataTables_mensajes.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src='assets/lib/DataTables/js/jquery.dataTables.min.js'></script>
        <script src='assets/lib/DataTables/js/dataTables.bootstrap.js'></script>

        <script src='assets/lib/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js'></script>
        <script src='assets/lib/Responsive-2.2.2/js/dataTables.responsive.min.js'></script>
        <script src='assets/lib/Responsive-2.2.2/js/responsive.bootstrap.min.js'></script>
        <script src="assets/js/Config_navbar.js"></script>
        <script src="../assets/lib/metro-notifications/static/js/MetroNotification.min.js"></script>
        <script src="assets/js/Notificaciones.js"></script>  
        <script src="assets/js/ValidarDatos.js"></script>
        <script src="assets/js/ProcesarMensajes.js"></script>

        <script>
            function cargarMensaje(id){
                $(`#PanelMensaje`).empty();
                $(`#msg${id}`).clone().prependTo('#PanelMensaje');
                if($(`#row_msg_${id}`).hasClass("no-revisado")){
                    ActualizaEstadoCorreo(id);
                }
            }

            $(function() {
                $("tr").click(function() {
                    $("tr").removeClass("active");
                    $(this).addClass("active");
                });
            });

            let ActualizaEstadoCorreo = (idMensaje) => {
                Actualiza(idMensaje)
                    .then(data => {
                        //MostrarNotifiacion(data);
                        if (data.status) {
                            $(`#row_msg_${idMensaje}`).removeClass("no-revisado");
                        }
                        $(`#msg_pendientes`).html(data.pendiente);
                    })
                    .catch(err => console.error(err));
            }

            let Actualiza = async(idMensaje) => {
                let param=`id=${idMensaje}`
                let response = await fetch(`index.php?controller=Mensajes&action=actualizar_revisado&${param}`, {method: "POST",});
                let data = await response.json();
                return data;
            }
        </script>
        
    </body>
</html>