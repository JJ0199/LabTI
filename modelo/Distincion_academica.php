<?php 
    class Distincion_academica{
        private $id;
        private $distincion;
        private $otorgada;
        private $fecha_inicio;
        private $fecha_fin;

        public function __construct(){
            $this->id = -1;
            $this->distincion = "";
            $this->otorgada = "";
            $this->fecha_inicio = "000-00-00";
            $this->fecha_fin = "000-00-00";
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setDistincion($distincion){$this->distincion = $distincion;}
        public function getDistincion(){return $this->distincion;}

        public function setOtorgada($otorgada){$this->otorgada = $otorgada;}
        public function getOtorgada(){return $this->otorgada;}

        public function setFecha_inicio($fecha_inicio){$this->fecha_inicio = $fecha_inicio;}
        public function getFecha_inicio(){return $this->fecha_inicio;}

        public function setFecha_fin($fecha_fin){$this->fecha_fin = $fecha_fin;}
        public function getFecha_fin(){return $this->fecha_fin;}
    }
?>