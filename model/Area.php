<?php 
    class Area{
        public $id;
        public $nombre;
        public $acronimo;
        public $objetivo;

        public function __construct(){
            $this->id = "";
            $this->nombre = "";
            $this->acronimo = "";
            $this->objetivo = "";
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setnombre($nombre){$this->nombre = $nombre;}
        public function getNombre(){return $this->nombre;}

        public function setAcronimo($acronimo){$this->acronimo = $acronimo;}
        public function getAcronimo(){return $this->acronimo;}

        public function setObjetivo($objetivo){$this->objetivo = $objetivo;}
        public function getObjetivo(){return $this->objetivo;}
        
    }
?>