<?php
class Contacto extends EntidadBase{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;
    private $mensaje;
    
    public function __construct($adapter) {
        $table="contacto";
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function get_telefono() {
        return $this->telefono;
    }

    public function set_telefono($telefono) {
        $this->telefono = $telefono;
    }

    public function get_mensaje() {
        return $this->mensaje;
    }

    public function set_mensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function save(){
        $query="INSERT INTO contacto (id,nombre,apellido,email,telefono,mensaje,fecha)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->apellido."',
                       '".$this->email."',
                       '".$this->telefono."',
                       '".$this->mensaje."',
                       NOW() );";             
        $save=$this->db()->query($query);
        return $save;
    }

    public function correo_revisado(){
        $query="UPDATE contacto SET revisado=1 WHERE id=".$this->id;             
        $update=$this->db()->query($query);
        return $update;
    }

}
?>