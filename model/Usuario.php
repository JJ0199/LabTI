<?php 
    class Usuario{
        private $id;
        private $nombre;
        private $contra;

        public function __construct(){
            $this->id = -1;
            $this->nombre = "";
            $this->contra = "";
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setNombre($nombre){$this->nombre = $nombre;}
        public function getNombre(){return $this->nombre;}

        public function setContra($contra){$this->contra = $contra;}
        public function getContra(){return $this->contra;}
    }
?>