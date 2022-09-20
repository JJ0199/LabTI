<?php 
    class Conexion{
        private $sql;
    
        public function __construct(){
            $host = "bl19s6c0qfp7rzf0cwp3-mysql.services.clever-cloud.com";
            $user = "ukzfvj9sa1uyijcg";
            $pass = "JI0TbGgwDBDkBSYnOhSH";
            $db ="bl19s6c0qfp7rzf0cwp3";
            $this->sql = new mysqli($host, $user,$pass,$db);
            if($this->sql->errno){
                echo "<script>console.log('Error en la conexión'); </script>"; 
            }
        }
        
        public function insertar(){
            $consulta = "INSERT INTO Usuario VALUES (1,'Miguel Ángel','miguelangel')";
            $this->sql->query($consulta);
        }

        public function consultar(){
            $consulta = "SELECT *FROM Usuario";
            $respuestasql = $this->sql->query($consulta);
            if($respuestasql->num_rows<=0){
                echo "No se insertaron datos";
            }else{
                $respuesta = $respuestasql->fetch_array();
                echo "El id del usuario es ".$respuesta[0];
                echo "El nombre del usuario es".$respuesta[1];
                echo "La contrasenia del usuario es".$respuesta[2];
            }
        }


        public function login($username,$pass){
            $consulta = "SELECT Id from usuario WHERE Contraseña = '$pass'";
            $respuestasql = $this->sql->query($consulta);
            $consulta = "SELECT * from informacion_personal where Email = '$username'";
            $emailsql = $this->sql->query($consulta);

            if($respuestasql->num_rows > 0 && $emailsql->num_rows > 0  ){
                $idString = $respuestasql->fetch_array();
                $id = $idString[0];
                $idint = (int) $id;
                $emailString = $emailsql->fetch_array();
                $email = $emailString[0];
                $_SESSION['user'] = $email;
                $_SESSION['id_user'] = $idint;
                header("Location:inicio.php");
            }else{
                echo "El correo, la contraseña o ambos son incorrectos";
            }
        }

        public function registrarUser($username,$apellido,$telefono,$email,$password,$ubicacion_foto){

            $consulta = "SELECT Id from usuario ORDER BY Id ASC LIMIT 1";
            $idsql = $this->sql->query($consulta);
            if($idsql->num_rows == 0 || $idsql == false || $idsql == null){
                $idUser = 1;
                echo $idUser;
            }else{
                $idUsuarioString = $idsql->fetch_array();
                $idUsuario = (int) $idUsuarioString[0];
                $idUser = $idUsuario;
                echo "El id es ".$idUser;
            }

            $consulta = "INSERT INTO usuario VALUES($idUser,'".$username."','".$password."')";
            $this->sql->query($consulta);
            $consulta = "SELECT Id from usuario ORDER BY Id DESC LIMIT 1";
            $idsql = $this->sql->query($consulta);
            if($idsql->num_rows > 0 ){
                $idString = $idsql->fetch_array();
                $id = $idString[0];
                $idInt = (int) $id;
                $telefonoInt = (int) $telefono;
                $consulta = "INSERT INTO informacion_personal(Id,Nombre,Apellido,Fotografia,Telefono,Email,Id_usuario) VALUES($idInt,'".$username."','".$apellido."','".$ubicacion_foto."',$telefonoInt,'".$email."',$idInt)";
                $this->sql->query($consulta);

                header("Location:");

            }
        }

        public function obtenerInvestigador(){
            $consulta = "SELECT *FROM Usuarios";
        }
    }

?>