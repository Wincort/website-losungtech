<?php
class Imagen extends EntidadBase{
    private $id;
    private $id_album;
    private $titulo;
    private $imagen;
    private $contenido;
    private $publicar;
    
    public function __construct($adapter) {
        $table="Imagenes";
        parent::__construct($table, $adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId_Album() {
        return $this->id_album;
    }

    public function setId_Album($id_album) {
        $this->id_album = $id_album;
    }
    
    public function get_titulo() {
        return $this->titulo;
    }

    public function set_titulo($titulo) {
        $this->titulo = $titulo;
    }

    public function get_imagen() {
        return $this->imagen;
    }

    public function set_imagen($imagen) {
        $this->imagen = $imagen;
    }

    public function get_contenido() {
        return $this->contenido;
    }

    public function set_contenido($contenido) {
        $this->contenido = $contenido;
    }
    
    public function get_publicar() {
        return $this->publicar;
    }

    public function set_publicar($publicar) {
        $this->publicar = $publicar;
    }

    public function save(){
        $query="INSERT INTO Imagenes (id,idAlbum,titulo,imagen,contenido,publicar,FUM)
                VALUES(NULL,
                       '".$this->id_album."',
                       '".$this->titulo."',
                       '".$this->imagen."',
                       '".$this->contenido."',
                       '".$this->publicar."',
                       NOW() );";             
        $save=$this->db()->query($query);
        return $save;
    }

    public function update($id){
        $query="update Imagenes set 
                    titulo='".$this->titulo."',
                    imagen='".$this->imagen."',
                    contenido='".$this->contenido."',
                    publicar='".$this->publicar."',
                    FUM= NOW()
                where id=".$id."
                ";             
        $update=$this->db()->query($query);
        return $update;
    }



}
?>