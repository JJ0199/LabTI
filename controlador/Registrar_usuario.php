<?php 
    session_start();
    $tipo = $_SESSION['tipo_usuario'];
    
    include("../vista/html/Registrar_usuario.html");
?>