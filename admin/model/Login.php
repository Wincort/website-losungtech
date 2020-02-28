<?php
class Login extends EntidadBase{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $username;
    //private $credencial;
    
    public function __construct($adapter) {
        $table="usuarios";
        parent::__construct($table, $adapter);
    }

    /*public function getCredencial() {
        return $this->credencial;
    }

    public function setCredencial($credencial) {
        $this->credencial = $credencial;
    }*/
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function confirmarUsuario(){
        //$query="SELECT * FROM usuarios WHERE email='".$this->email."' AND password='".$this->password."'";
        $query="SELECT * FROM usuarios WHERE username='".$this->username."' AND password='".$this->password."'";
        $resultado=$this->db()->query($query);
        //$this->db()->error;
        return $resultado->num_rows;
    }

}
?>