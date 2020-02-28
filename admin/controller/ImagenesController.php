<?php
class ImagenesController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){

        if(isset($_GET["id"])){
            //Inicializar objetos y constantes
            $idalbum=$_GET["id"];
            $imagenes=new Imagen($this->adapter);
            $album=new Album($this->adapter);
            $mensaje=new Contacto($this->adapter);
            //Obtener toda las imágenes a mostrar 
            $all_imagenes=$imagenes->getBy("idAlbum",$idalbum);
            //Obtener el nombre del grupo de imágenes ha editar
            $ImgAlbum=$album->getById($idalbum);
            $titulo=$ImgAlbum->nombre;
            //Mostrar el contador de mensajes sin leer en el apartado "Mensajes"
            $sin_leer=$mensaje->getCountBy("revisado",0);
            $pendiente= $sin_leer[0]->CONTEO;       
            $this->view("imagenes",array(
                "all_imagenes"=>$all_imagenes,
                "titulo"=> $titulo,
                "id_album"=>$idalbum,
                "sin_leer"=> $pendiente,
            ));
        }
        $this->redirect("imagenes", "index");
        
    }
    
    public function crear(){

        $Imagen=new Imagen($this->adapter);
        $Imagen->set_titulo($_POST["titulo"]);
        $Imagen->set_imagen($_POST["imagen-hidden"]);
        $Imagen->set_contenido($_POST["contenido"]);
        $Imagen->set_publicar($_POST["publicar"]);
        $idalbum=$_POST["id_album"];
        $Imagen->setId_Album($idalbum);
        $Imagen->save();
        $params="id=".$idalbum;
        $this->redirect("imagenes", "index", $params);
        
    }

    public function actualizar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            $Imagen=new Imagen($this->adapter);
            $Imagen->set_titulo($_POST["titulo"]);
            $Imagen->set_imagen($_POST["imagen-hidden"]);
            $Imagen->set_contenido($_POST["contenido"]);
            $Imagen->set_publicar($_POST["publicar"]);
            //print_r($Imagen);
            $Imagen->update($id);
        }
        $idalbum=$_POST["id_album"];
        $params="id=".$idalbum;
        $this->redirect("imagenes", "index", $params);
    }

}
?>
