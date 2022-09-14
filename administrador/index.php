 <?php
session_start();
if (isset($_SESSION['nombre'])) {
    header('Location: http://localhost/mat/administrador/inicio.php');
}
?>
  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">

    <link rel="stylesheet" href="../assets/css/estilos.css">


</head>
<body>
    <form class="formulario" action="" method="post" autocomplete="off">

    <h1>Login</h1>
     <div class="contenedor">



         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input class="input" id="usuario" type="text" name="mail" required="" placeholder="Email">

         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input class="input" id="contrasenia" type="password" name="pass" required="" placeholder="Contraseña">

         </div>
         <input type="submit" name="submit" value="Ingresar" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
     </div>
    </form>

     <?php
if (isset($_POST['submit'])) {
    require "../controlador/conexion.php";

    $op       = new BaseDeDatos();
    $username = $_POST['mail'];
    $pass     = $_POST['pass'];

    $sql = "SELECT * FROM usuario";
    $con = $op->conexion();
    $res = mysqli_query($con, $sql) or die('No se puede hacer una consulta');

    while ($fila = mysqli_fetch_assoc($res)) {
        $nombre = $fila['nombre'];
        $mail   = $fila['emai'];
        $contra = $fila['passwor'];
    }

    if (($mail == $username) && ($contra == $pass)) {
        $_SESSION['nombre'] = $nombre;

        header('Location: http://localhost/mat/administrador/inicio.php');
    } else {
        ?>
        <h4>!Contraseña o usuario incorrectos</h4>
        <?php
}
}
?>
</body>
</html>
