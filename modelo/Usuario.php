<?php 
    class Usuario{
        private $id;
        private $nombre;
        private $contrasenia;
/*         private $fecha_inicio;
        private $fecha_fin; */

        public function __construct(){
            $this->id = -1;
            $this->nombre = "";
            $this->contrasenia = "";
           /*  $this->fecha_inicio = "000-00-00";
            $this->fecha_fin = "000-00-00"; */
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setNombre($nombre){$this->nombre = $nombre;}
        public function getNombre(){return $this->nombre;}

        public function setContrasenia($contrasenia){$this->contrasenia = $contrasenia;}
        public function getContrasenia(){return $this->contrasenia;}

        /* public function setFecha_inicio($fecha_inicio){$this->fecha_inicio = $fecha_inicio;}
        public function getFecha_inicio(){return $this->fecha_inicio;}

        public function setFecha_fin($fecha_fin){$this->fecha_fin = $fecha_fin;}
        public function getFecha_fin(){return $this->fecha_fin;} */
    }
?>