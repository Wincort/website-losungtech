<?php
class AlbumController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        
        $Album=new Album($this->adapter);
        $allAlbum=$Album->getAll();
        $titulo="Grupos de Imágenes";
        $this->view("Album",array(
            "allAlbum"=>$allAlbum,
            "titulo"=> $titulo
        ));

    }
    
    public function crear(){
        //$userSession = new Sesiones();
        //$IdUsuario=$userSession->getCurrentUserId();
        $Album=new Album($this->adapter);
        $Album->set_nombre($_POST["nombre"]);
        //$Album->setUC($IdUsuario);
        //$Album->setUUM($IdUsuario);
        $Album->set_publicar($_POST["publicar"]);
        $Album->save();
        $this->redirect("Album", "index");
    }

    public function actualizar(){
        if(isset($_GET["id"])){
            //$userSession = new Sesiones();
            //$IdUsuario=$userSession->getCurrentUserId();
            $Album=new Album($this->adapter);
            $id=(int)$_GET["id"];
            $Album->setId($id);
            $Album->set_nombre($_POST["nombre"]);
            //$Album->setUUM($IdUsuario);
            $Album->set_publicar($_POST["publicar"]);
            $Album->update($id);
        }
        $this->redirect("Album", "index");
    }

}
?>
