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
        <link href="assets/css/Secciones.css" rel="stylesheet">
    </head>
    <body>
    
        <?php include('view/includes/navbar.php')?>
        <?php include('view/includes/modal_newSeccion.php')?>

        <div class="container espacio-top">
                <div class="">
                    <h3 class="Titulo" style="display:inline;"><?php echo $titulo;?></h3>
                    <?php if($sesion->getEsAdmin()){?>
                        <a href="#addnew" class="btn btn-primary right" data-toggle="modal" style="display:inline;"><span class="glyphicon glyphicon-plus"></span>  Nueva Sección</a>
                    <?php } ?>
                    <hr/>
                </div>
                
                <table id="lista_secciones" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Título</center></th>
                            <th><center>Publicar</center></th>
                            <th><center>Última Actualización</center></th>
                            <th><center>Acción</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($all_secciones as $Seccion) {?>
                        <?php 
                            include('view/includes/modal_updateSeccion.php'); 
                        ?>
                        <tr>
                            <td><?php echo $Seccion->id; ?></td>
                            <td><?php echo $Seccion->titulo; ?></td>
                            <td><?php 
                            if($Seccion->publicar){echo "Sí";}
                            else{echo "No";}?></td>
                            <td><?php $date=strtotime($Seccion->FUM); echo date("d/m/Y g:i a",$date); ?></td>
                            <td>
                                <center>
                                    <?php if($sesion->getEsAdmin()){?>
                                        <a href="#edit_<?php echo $Seccion->id; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                    <?php } ?>
                                </center>
                            </td>
                        </tr>    
                        
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/config_DT_Secciones.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src='assets/lib/DataTables/js/jquery.dataTables.min.js'></script>
        <script src='assets/lib/DataTables/js/dataTables.bootstrap.js'></script>
        <script src='assets/lib/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js'></script>
        <script src='assets/lib/Responsive-2.2.2/js/dataTables.responsive.min.js'></script>
        <script src='assets/lib/Responsive-2.2.2/js/responsive.bootstrap.min.js'></script>
        <script src="assets/js/Config_navbar.js"></script>
        <script src="assets/lib/tinymce/tinymce.min.js"></script>

        <script>

        $(document).ready(function(){
            CargarImagenes();
            CargarTinyMCE();
            CargarDataTables("lista_secciones");
        })
        
         let CargarTinyMCE = () =>{
            tinymce.init({
                selector: 'textarea',
                language: 'es_MX',
                branding: false,
                menubar: false,
                plugins: "lists paste",
                height: 300,
                toolbar: 'undo redo | styleselect | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify',
                oninit : "setPlainText",
                paste_as_text: true
            }); 
        }

        $("input[name='imagen']").change(function(){
            readURL(this);
        });

        //Evento cada vez que se cierra una ventana modal
        $(".modal").on('hide.bs.modal', function(){
            var idmodal=this.id;
            //Determinar el id del registro dependiendo del modal (Nuevo registro o edición)
            var idfile=idmodal!="addnew"?idmodal.replace("edit_",""):"0";
            //Obtener nombre de la imagen antes de la edición  
            var original_filename=$(`#img_${idfile}_hidden`).val();
            var ruta=original_filename!=""?`assets/img/${original_filename}`:"";
            //Especificar la ruta del archivo dependiendo del modal
            var ruta_img=idmodal!="addnew"?ruta:"";;
            //Resetear la vista previa de la imagen al cerrar el modal sin modificar la información
            var preview_id=`#preview_img_${idfile}`;
            var preview_thumbnail_id=`#preview-thumbnail-img_${idfile}`;
            $(preview_id).attr('src', ruta_img);
            $(preview_thumbnail_id).css('display', "block");
            //Resetear el input file sin archivo cargado
            $(`#img_${idfile}`).val("");
            
        });
        //Función para mostrar vista previa de la imagen seleccionada en el input file
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var preview_id=`#preview_${input.id}`;
                    var preview_thumbnail_id=`#preview-thumbnail-${input.id}`;
                    $(preview_id).attr('src', e.target.result);
                    $(preview_thumbnail_id).css('display', "block");
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function remover_imagen(id_tumbnail){
            var id_imagen=id_tumbnail.replace("delete_","");
            var preview_id=`#preview_${id_imagen}`;
            var preview_thumbnail_id=`#preview-thumbnail-${id_imagen}`;
            $(preview_id).attr('src','');
            $(preview_thumbnail_id).css('display', "none");
            $(`#${id_imagen}`).val("");
        }

        function CargarImagenes(){
            $(".post-carga").each(function(){
                $(this).attr('src', $(this).data('src')).on(function(){
                    $(this).fadeIn();
                });
            })  
        }
        </script>

        <script type="text/javascript">
            function CargarImg(id){
                var fd = new FormData(); 
                var files = $(`#img_${id}`)[0].files[0]; 
                if(files!=undefined){
                    fd.append('file', files); 
                    $.ajax({ 
                        url: 'core/Upload.php', 
                        type: 'post', 
                        data: fd, 
                        contentType: false, 
                        processData: false, 
                        success: function(response){ 
                            if(response != 0){ 
                                $(`#img_${id}_hidden`).val(response);
                                $(`#Seccion_${id}`).submit();
                            } 
                            else{ 
                                alert('file not uploaded'); 
                            } 
                        }, 
                    }); 
                }
                else{
                    if($(`#preview_img_${id}`).attr('src')==""){$(`#img_${id}_hidden`).val("");}
                    $(`#Seccion_${id}`).submit()
                }
            }
             
        </script> 
        
    </body>
</html>