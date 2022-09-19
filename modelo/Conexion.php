<?php 
    class Conexion{
        private $sql;

        public function __construct(){
            $this->sql = new mysqli('localhost', 'root','','labti');
            if($this->sql->errno){
                echo "<script>console.log('Error en la conexión'); </script>"; 
            }
        }
    
        function login($user,$pass){
            
        }



    }

?>