<?php 
    class Conferencia{
        private $id;
        private $titulo;
        private $evento;
        private $lugar;
        private $fecha;

        public function __construct(){
            $this->id = -1;
            $this->titulo = "";
            $this->evento = "";
            $this->lugar = "";
            $this->fecha = "000-00-00";
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setTitulo($titulo){$this->titulo = $titulo;}
        public function getTitulo(){return $this->titulo;}

        public function setEvento($evento){$this->evento = $evento;}
        public function geEvento(){return $this->evento;}

        public function setLugar($lugar){$this->lugar = $lugar;}
        public function getLugar(){return $this->lugar;}

        public function setFecha($fecha){$this->fecha = $fecha;}
        public function getFecha(){return $this->fecha;}
    }
?>