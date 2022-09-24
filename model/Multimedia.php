<?php
    class Multimedia{
        public $id;
        public $titulo;
        public $descripcion;
        public $nombreArchivo;
        public $fecha;

        public function __construct(){
            $this->id = "";
            $this->titulo = "";
            $this->descripcion = "";
            $this->nombreArchivo = "";
            $this->fecha = "";
        }

        public function setId($id){$this->id = $id;}
        public function setNombre($nombre){$this->nombre = $nombre;}

        public function setTitulo($titulo){$this->titulo = $titulo;}
        public function getTitulo(){return $this->titulo;}

        public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
        public function getDescripcion(){return $this->descripcion;}

        public function setNombreArchivo($nombreArchivo){$this->nombreArchivo = $nombreArchivo;}
        public function getNombreArchivo(){return $this->nombreArchivo;}

        public function setFecha($fecha){$this->fecha = $fecha;}
        public function getFecha(){return $this->fecha;}

    }
?>