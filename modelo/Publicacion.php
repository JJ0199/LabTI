<?php 
    class Publicacion{
        private $id;
        private $nombre;

        public function __construct(){
            $this->id = "";
            $this->nombre = "";
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setNombre($nombre){$this->nombre = $nombre;}
        public function getNombre(){return $this->nombre;}

    }
?>