<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title><?php echo $titulo;?></title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="assets/css/navbar.css" rel="stylesheet">
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"  media='screen,print' />
        <link href='assets/lib/DataTables/css/dataTables.bootstrap.min.css'rel='stylesheet' type='text/css' media='screen,print' >
        <link href='assets/lib/FixedHeader-3.1.4/css/fixedHeader.bootstrap.min.css'rel='stylesheet' type='text/css' media='screen'> 
        <link href='assets/lib/Responsive-2.2.2/css/responsive.bootstrap.min.css'rel='stylesheet' type='text/css' media='screen'> 

        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
            .right-align{
                text-align: right;
            }
            .modal-body{
                BACKGROUND: #777;
            }
            .modal-body,.modal-footer,.modal-header {
                padding: 8px;
            }
            .even,.odd,tbody,.modal-header,.modal-footer{
                BACKGROUND: #4e4e4e !important;
            }
            thead{
                BACKGROUND: #39393e;
            }
            tr,.Titulo,#lista_presupuestos_filter,#lista_presupuestos_length,.dataTables_info,.modal-header,.modal-body{
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
            .close{
                color: white;
                text-shadow: none;
            }
            .modal.fade .modal-dialog {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0); // IE9 only
                transform: translate(0, 0);
            }
            .fade {
                opacity: 0;
                -webkit-transition: opacity .1s linear;
                transition: opacity .1s linear;
            }
            body{
                background:transparent;
            }
            

        </style>
    </head>
    <body>
    
        <?php include('view/includes/navbar.php')?>
        <?php include('view/includes/modal_newAlbum.php')?>

        <div class="container espacio-top">
                <div class="">
                    <h3 class="Titulo" style="display:inline;"><?php echo $titulo;?></h3>
                    <?php if($sesion->getEsAdmin()){?>
                        <a href="#addnew" class="btn btn-primary right" data-toggle="modal" style="display:inline;"><span class="glyphicon glyphicon-plus"></span>  Nuevo Grupo</a>
                    <?php } ?>
                    <hr/>
                </div>
                
                <table id="lista_presupuestos" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Registro</center></th>
                            
                            <th><center>Activo</center></th>
                            <th><center>Última Actualización</center></th>
                            <th><center>Acción</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($allAlbum as $album) {?>
                        <?php
                            include('view/includes/modal_updateAlbum.php'); 
                        ?>
                        <tr>
                            <td><?php echo $album->id; ?></td>
                            <td><?php echo $album->nombre; ?></td>
                            <td><?php 
                            if($album->publicar){echo "Sí";}
                            else{echo "No";}?></td>
                            <td><?php $date=strtotime($album->FUM); echo date("d/m/Y g:i a",$date); ?></td>
                            <td>
                                <center>
                                    <?php if(true){?>
                                        <a href="<?php echo $helper->url("imagenes","index"); ?>&id=<?php echo $album->id; ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-cog"></span> Imágenes</a>
                                    <?php } ?>

                                    <?php if($sesion->getEsAdmin()){?>
                                        <a href="#edit_<?php echo $album->id; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                    <?php } ?>
                                </center>
                            </td>
                        </tr>
                        
                        
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!--<?php include('view/includes/footer.php')?>-->
    
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/Config_DataTables_ListaPresupuestos.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src='assets/lib/DataTables/js/jquery.dataTables.min.js'></script>
        <script src='assets/lib/DataTables/js/dataTables.bootstrap.js'></script>
        <!--<script src='assets/lib/pdfmake-0.1.36/vfs_fonts.js'></script>-->
        <script src='assets/lib/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js'></script>
        <script src='assets/lib/Responsive-2.2.2/js/dataTables.responsive.min.js'></script>
        <script src='assets/lib/Responsive-2.2.2/js/responsive.bootstrap.min.js'></script>
        <script src="assets/js/Config_navbar.js"></script>

        <script></script>
        
    </body>
</html>