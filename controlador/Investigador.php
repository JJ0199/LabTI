<?php 
    session_start();
    if(isset($_POST['enviar'])){
        header("Location:Registrar_usuario.php");
        $_SESSION["tipo_usuario"] = 1;
    }

    include("../vista/html/investigador.html");
?>