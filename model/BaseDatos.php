<?php
 class BaseDatos {
    private $sql;

    public function __construct(){
        $this->sql = new mysqli("localhost", "root", "","labti");
        if($this->sql->errno){
            echo "Error en la conexión";
        }
    }

    public function datos_lab(){
       /*  $datos_laboratorio=array(); */
        $consulta="SELECT Nombre,Email,Teléfono,Dirección,Misión,Visión,Definición FROM laboratorio WHERE Id=1;";
        $resultado = $this->sql->query($consulta);
        if($resultado){
            $DLaboratorio = new Laboratorio;
            while($registro = $resultado->fetch_assoc()){
                $DLaboratorio->setNombre($registro['Nombre']);
                $DLaboratorio->setEmail($registro['Email']);
                $DLaboratorio->setTelefono($registro['Teléfono']);
                $DLaboratorio->setDireccion($registro['Dirección']);
                $DLaboratorio->setMision($registro['Misión']);
                $DLaboratorio->setVision($registro['Visión']);
                $DLaboratorio->setDefinicion($registro['Definición']);
            }
            $resultado->close();
            return $DLaboratorio;
        }else{
            $resultado->close();
            /* return false; */
        }
    }

}
