
<?php
    include("..//..//model/BaseDatos.php");
    include("..//..//model/Informacionpersonal.php");
    include("..//..//model/Multimedia.php");

    $bd = new BaseDatos();
    $list_inf = $bd->lista_estp();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estancias profesionales</title>

    <!-- Bootstrap -->
    <?php include("bootstrap_v5.php"); ?>

    <!-- Para el menu -->
    <!-- <script src="view/js/desplegar_menu.js"></script> -->

    <!--Iconos-->
    <link rel="shortcut icon" href="..//img/icono_lic_info.png">

</head>
<body>
    <div class="container">
        <?php include("menu_nav.php"); ?>
    </div>

    <main>
        <!-- Espacio -->
        <div class="container">
            <br>
        </div>

        <!-- Titulo de la pagina  -->
        <div  class="container">
            <div class="row justify-content-start g-0">
                <div class="col-2 align-self-start">
                    <img src="..//img/ProfesorInvestigador.png"  class="col-md-6 mb-3 ms-md-3" alt="...">
                </div>
                <div class="col-6 align-self-center">
                    <h1>Alumnos de estancias profesiones </h1>
                </div>
            </div>
        </div>

        <!-- Espacio -->
        <div class="container">
            <br>
        </div>

        <!-- Lista de Profesores investigadores -->
        <<div class = container>
            <div class="row row-cols-1 row-cols-md-2 g-4">
<?php
    foreach($list_inf as $Inf){

        $idimg = $Inf->getFotografia();
        $fotografia = $bd->img_pfi($idimg);
        
        printf('<div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">');
                        printf('<img src="/Users/%s/Perfil/%s" class="card-img-top" alt="...">', $Inf->getEmail(),$fotografia->getNombreArchivo());
                        printf('</div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="card-body">');
                                    printf('<h3 class="card-title"> %s %s</h4>',$Inf->getNombre(),$Inf->getApellido());
                                    /* print('<h6 class="card-subtitle mb-2 text-muted">Maestra en Ciencias Computacionales</h6>'); */
                        printf('<a href="#" class="card-link">Ver C.V.</a>');
            printf('</div>
            </div>
        </div>
    </div>
</div>');
        }
?>
            </div>
        </div>

        <!-- Espacio -->
        <div class="container">
            <br>
            <br>

        </div>
    </main>

    <?php include("footer.php"); ?>
</body>
</html>