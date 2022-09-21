<?php
include_once("Publicacion.php");
 class Libro{
    private $isbn;

    public function __construct(){
        $this->isbn = "";
        $this->nombre = "";
    }

    public function setIsbn($isbn){$this->isbn = $isbn;}
    public function getIsbn(){return $this->isbn;}
}
?>