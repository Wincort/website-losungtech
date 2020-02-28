<?php
class Usuario extends EntidadBase{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $username;
    private $is_admin;
    /*private $permiso_crear;
    private $permiso_modificar;
    private $permiso_consultar;
    private $permiso_borrar;
    private $empresa;
    private $permiso_pagar;
    private $permiso_cancelar;*/
    
    public function __construct($adapter) {
        $table="usuarios";
        parent::__construct($table, $adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
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

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
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

    public function getIsAdmin() {
        return $this->is_admin;
    }

    public function setIsAdmin($is_admin) {
        $this->is_admin = $is_admin;
    }

    /*public function getPermisoCrear() {
        return $this->permiso_crear;
    }

    public function setPermisoCrear($permiso_crear) {
        $this->permiso_crear = $permiso_crear;
    }

    public function getPermisoModificar() {
        return $this->permiso_modificar;
    }

    public function setPermisoModificar($permiso_modificar) {
        $this->permiso_modificar = $permiso_modificar;
    }

    public function getPermisoConsulta() {
        return $this->permiso_consultar;
    }

    public function setPermisoConsulta($permiso_consultar) {
        $this->permiso_consultar = $permiso_consultar;
    }

    public function getPermisoBorrar() {
        return $this->permiso_borrar;
    }

    public function setPermisoBorrar($permiso_borrar) {
        $this->permiso_borrar = $permiso_borrar;
    }*/

    /*public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function getPermisoPagar() {
        return $this->permiso_pagar;
    }

    public function setPermisoPagar($permiso_pagar) {
        $this->permiso_pagar = $permiso_pagar;
    }

    public function getPermisoCancelar() {
        return $this->permiso_cancelar;
    }

    public function setPermisoCancelar($permiso_cancelar) {
        $this->permiso_cancelar = $permiso_cancelar;
    }*/

    public function save(){
        $query="INSERT INTO usuarios (id,nombre,apellido,email,password,username,administrador)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->apellido."',
                       '".$this->email."',
                       '".$this->password."',
                       '".$this->username."',
                       '".$this->is_admin."');";             
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

    public function update($id){
        $query="update usuarios set 
                    nombre='".$this->nombre."',
                    apellido='".$this->apellido."',
                    email='".$this->email."',
                    username='".$this->username."',
                    administrador='".$this->is_admin."'
                where id=".$id."
                ";             
        $update=$this->db()->query($query);
        return $update;
    }

    /*public function save(){
        $query="INSERT INTO usuarios (id,nombre,apellido,email,password,username,empresa,app_crear,app_modificar,app_borrar,app_consultar,pagar,cancelar,administrador)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->apellido."',
                       '".$this->email."',
                       '".$this->password."',
                       '".$this->username."',
                       '".$this->empresa."',
                       '".$this->permiso_crear."',
                       '".$this->permiso_modificar."',
                       '".$this->permiso_borrar."',
                       '".$this->permiso_consultar."',
                       '".$this->permiso_pagar."',
                       '".$this->permiso_cancelar."',
                       '".$this->is_admin."');";             
        $save=$this->db()->query($query);
        return $save;
    }
    public function update($id){
        $query="update usuarios set 
                    nombre='".$this->nombre."',
                    apellido='".$this->apellido."',
                    email='".$this->email."',
                    username='".$this->username."',
                    empresa='".$this->empresa."',
                    app_crear='".$this->permiso_crear."',
                    app_modificar='".$this->permiso_modificar."',
                    app_borrar='".$this->permiso_borrar."',
                    app_consultar='".$this->permiso_consultar."',
                    pagar='".$this->permiso_pagar."',
                    cancelar='".$this->permiso_cancelar."',
                    administrador='".$this->is_admin."'
                where id=".$id."
                ";             
        $update=$this->db()->query($query);
        return $update;
    }*/

}
?>