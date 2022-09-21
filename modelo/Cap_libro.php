<?php
include_once("Publicacion.php");
 class Cap_libro{
    private $isbn;
    private $doi;

    public function __construct(){
        $this->isbn = "";
        $this->doi = "";
        $this->nombre = "";
    }

    public function setIsbn($isbn){$this->isbn = $isbn;}
    public function getIsbn(){return $this->isbn;}

    public function setDoi($doi){$this->doi = $doi;}
    public function getDoi(){return $this->doi;}
}
?>