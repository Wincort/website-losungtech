<?php
class Album extends EntidadBase{
    private $id;
    private $nombre;
    private $publicar;
    
    public function __construct($adapter) {
        $table="Album";
        parent::__construct($table, $adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function get_nombre() {
        return $this->nombre;
    }

    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function get_publicar() {
        return $this->publicar;
    }

    public function set_publicar($publicar) {
        $this->publicar = $publicar;
    }

    public function save(){
        $query="INSERT INTO Album (id,nombre,publicar,FUM)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->publicar."',
                       NOW() );";             
        $save=$this->db()->query($query);
        return $save;
    }

    public function update($id){
        $query="update Album set 
                    nombre='".$this->nombre."',
                    publicar='".$this->publicar."',
                    FUM= NOW()
                where id=".$id."
                ";             
        $update=$this->db()->query($query);
        return $update;
    }



}
?>