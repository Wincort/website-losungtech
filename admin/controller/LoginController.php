<?php

//Funciones para sesiones
//require_once 'core/Sesiones.php';

class LoginController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        //Cargamos la vista index y le pasamos valores
        $this->view("login",array());
    }

    public function existeUsuario(){
        if(isset($_POST["user"]) && isset($_POST["password"]) ){ 
            if(!empty($_POST["user"]) && !empty($_POST["password"]) ){ 
                $login=new Login($this->adapter);
                //$login->setEmail($_POST["email"]);
                $login->setUsername($_POST["user"]);
                $login->setPassword(sha1($_POST["password"]));
                $result=$login->confirmarUsuario();
                if($result){
                    //$infoUsuario=$login->getBy("email",$login->getEmail());
                    $infoUsuario=$login->getBy("username",$login->getUsername());
                    $login->setId($infoUsuario[0]->id);
                    $login->setUsername($infoUsuario[0]->username);
                    $login->setNombre($infoUsuario[0]->nombre);
                    $login->setApellido($infoUsuario[0]->apellido);
                    $login->setEmail($infoUsuario[0]->email);
                    
                    $userSession = new Sesiones();
                    $userSession->setCurrentUser($login->getUsername());
                    $userSession->setCurrentUserId($login->getId());
                    $userSession->setCurrentUserEmail($login->getEmail());
                    $userSession->setCurrentUserNombre($login->getNombre());
                    $userSession->setCurrentUserApellido($login->getApellido());
                    $userSession->setEsAdmin($infoUsuario[0]->administrador);

                    $this->redirect();
                }
                else{
                    $this->view("login",array(
                        "errorLogin"=>"Usuario y/o Contraseña incorrectos."
                    ));
                }
            }
            else{
                $this->view("login",array(
                    "errorLogin"=>"Por favor, introduzca información en todos los campos."
                ));
            }
            
        }
        else{
            $this->redirect("login","index");
        }
    }

    public function cerrarSesion(){
        $userSession = new Sesiones();
        $userSession->closeSession();
        $this->redirect();
    }
}
?>
