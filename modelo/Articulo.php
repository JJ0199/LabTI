<?php
include_once("Publicacion.php");
 class Articulo{
    private $isbn;
    private $no_pag;

    public function __construct(){
        $this->isbn = "";
        $this->no_pag = -1;
        $this->nombre = "";
    }

    public function setIsbn($isbn){$this->isbn = $isbn;}
    public function getIsbn(){return $this->isbn;}

    public function setDoi($no_pag){$this->no_pag = $no_pag;}
    public function getDoi(){return $this->no_pag;}
}
?>