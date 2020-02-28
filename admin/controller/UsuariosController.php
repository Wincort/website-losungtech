<?php
class UsuariosController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        
        //Creamos el objeto usuario
        $usuario=new Usuario($this->adapter);
        //Conseguimos todos los usuarios
        $allusers=$usuario->getAll();

        $mensaje=new Contacto($this->adapter);
        $sin_leer=$mensaje->getCountBy("revisado",0);
        $pendiente= $sin_leer[0]->CONTEO;

        $this->view("index",array(
            "allusers"=>$allusers,
            "sin_leer"=> $pendiente
        ));

    }
    
    public function crear(){
        if(isset($_POST["username"])){
            $usuario=new Usuario($this->adapter);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $usuario->setUsername($_POST["username"]);
            $usuario->setIsAdmin($_POST["isAdmin"]);
            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }

    public function actualizar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            $usuario=new Usuario($this->adapter);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setUsername($_POST["username"]);
            $usuario->setIsAdmin($_POST["isAdmin"]);
            $usuario->update($id);
        }
        $this->redirect("Usuarios", "index");
    }
    
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            
            $usuario=new Usuario($this->adapter);
            $usuario->deleteById($id); 
        }
        $this->redirect("Usuarios", "index");
    }

}
?>
