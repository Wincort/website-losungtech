<!DOCTYPE html>
<html lang="es">
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?php echo $titulo;?></title>
	    <meta charset="utf-8">
        
        <link href="assets/css/navbar.css" rel="stylesheet">
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"  media='screen,print' />
        <link href="assets/css/Secciones.css" rel="stylesheet">
        <style>
            body{font-family:arial;}
            
            #web{display:table;width:100%;text-align:center;margin:10px 0 30px;}
            #web a{display:table-cell;color:#222;background:#222;color:#eee;height:80px;line-height:80px;text-decoration:none;}
            #web a:hover{background:#333;}
            
            #contenedor{width:100%;margin:auto;overflow:hidden;padding:20px;}
            #contenedor .img{float:left;width:333px;height:200px;margin-bottom:10px;}
            #contenedor .img img{width:100%;height:100%;}
            
            .cargador{background:#fff url(images/ajax-loader.gif) no-repeat center center;}
            .cargador img{display:none;}
            
            .clear-both{clear:both;}
        </style>
    </head>
    <body>
        <?php include('view/includes/navbar.php')?>

        <?php include('view/includes/modal_newImg.php')?>

        <div class="container espacio-top">
            <button style="margin-left:1rem;" class="btn btn-default right" onclick="goBack()">Regresar</button>
            <h3 class="Titulo" style="display:inline;"><?php echo $titulo;?></h3>
            <?php if($sesion->getEsAdmin()){?>
                <a href="#addnew" class="btn btn-primary right" data-toggle="modal" style="display:inline;"><span class="glyphicon glyphicon-plus"></span>  Nueva imagen</a>
            <?php } ?>
            <hr/>

            <div id="contenedor" class="container-fluid">
                <?php foreach($all_imagenes as $Imagen) {?>
                    <?php
                        include('view/includes/modal_updateImg.php'); 
                    ?>
                    <?php if($sesion->getEsAdmin()){?>
                        <a href="#edit_<?php echo $Imagen->id; ?>" data-toggle="modal">
                        <div class="img cargador">
                            <img data-src="<?php if ($Imagen->imagen!=''){echo 'assets/img/'.$Imagen->imagen;}?>" class="post-carga" style="display: inline;" onerror="this.src='images/sin-imagen.png';">
                        </div>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        
        <script>
            $(document).ready(function(){
                CargarImagenes();
            })

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
                //Establacer la ruta completa dependiendo de la existencia del archivo
                var ruta=original_filename!=""?`assets/img/${original_filename}`:"";
                //Especificar la ruta del archivo dependiendo del modal
                var ruta_img=idmodal!="addnew"?ruta:"";
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
                        console.log(input.id);
                        var preview_id=`#preview_${input.id}`;
                        var preview_thumbnail_id=`#preview-thumbnail-${input.id}`;
                        console.log(preview_id,preview_thumbnail_id);
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
            
            function CargarImagenes()
            {
                $(".post-carga").each(function(){
                    $(this).attr('src', $(this).data('src')).on(function(){
                        $(this).fadeIn();
                    });
                })  
            }
        </script>

        <script>
            function goBack() {
                window.history.back();
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
                                $(`#Imagen_${id}`).submit();
                            } 
                            else{ 
                                alert('file not uploaded'); 
                            } 
                        }, 
                    }); 
                }
                else{
                    if($(`#preview_img_${id}`).attr('src')==""){$(`#img_${id}_hidden`).val("");}
                    $(`#Imagen_${id}`).submit()
                }
            }
             
        </script> 
	
</body></html>