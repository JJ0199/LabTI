<?php
 class BaseDatos {
    private $sql;

    public function __construct(){
        $this->sql = new mysqli("localhost", "root", "","centro_de_computo");
        if($this->sql->errno){
            echo "Error en la conexión";
        }
    }

    public función listmiembros(){
        
    }

}
