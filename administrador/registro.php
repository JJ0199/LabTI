<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">>
    <link rel="stylesheet" href="../assets/css/estilos.css">


</head>
<body>
 <form class="formulario" action="" method="post" autocomplete="true">

    <h1>Registrate</h1>
     <div class="contenedor">

     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input class="input" id="usuario" type="text" name="nombre" required="" placeholder="Nombre completo: ">

         </div>

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input class="input" id="usuario" name="mail" required="" type="text" placeholder="Correo Electronico: ">

         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input class="input" id="contrasenia" name="pass" required="" type="password" placeholder="Contraseña: ">

         </div>
         <input type="submit" name="submit" value="Registrar" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="index.php">Iniciar Sesion</a></p>
     </div>
    </form>
    <?php
if (isset($_POST['submit'])) {
    require "../controlador/conexion.php";
    $op            = new BaseDeDatos();
    $username      = $_POST['nombre'];
    $email         = $_POST['mail'];
    $password      = $_POST['pass'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = $query->prepare("SELECT * FROM usuario WHERE mail = emai");
    $query->bindParam("mail", $email, PDO::PARAM_STR);
    $con = $op->conexion();

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $conexion->prepare("INSERT INTO usuario(id,nombre,emai,passwor) VALUES ('','$username->nombre','$email->mail','$password->pass')");
        $query->bindParam("nombre", $username, PDO::PARAM_STR);
        $query->bindParam("pass", $password_hash, PDO::PARAM_STR);
        $query->bindParam("mail", $email, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>
</body>
</html>