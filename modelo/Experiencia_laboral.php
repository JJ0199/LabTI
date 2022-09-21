<?php 
    class Experiencia_laboral{
        private $id;
        private $puesto;
        private $institucion;
        private $fecha_inicio;
        private $fecha_fin;

        public function __construct(){
            $this->id = -1;
            $this->puesto = "";
            $this->institucion = "";
            $this->fecha_inicio = "000-00-00";
            $this->fecha_fin = "000-00-00";
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setPuesto($puesto){$this->puesto = $puesto;}
        public function getPuesto(){return $this->puesto;}

        public function setInstitucion($institucion){$this->institucion = $institucion;}
        public function getInstitucion(){return $this->institucion;}

        public function setFecha_inicio($fecha_inicio){$this->fecha_inicio = $fecha_inicio;}
        public function getFecha_inicio(){return $this->fecha_inicio;}

        public function setFecha_fin($fecha_fin){$this->fecha_fin = $fecha_fin;}
        public function getFecha_fin(){return $this->fecha_fin;}
    }

?>