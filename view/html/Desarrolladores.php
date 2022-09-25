<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrolladores</title>

    <!-- Bootstrap -->
    <?php include("bootstrap_v5.php"); ?>

    <!--Iconos-->
    <link rel="shortcut icon" href="..//img/icono_lic_info.png">

</head>
<body>
    <div class="container">
        <?php include("menu_nav.php"); ?>
    </div>

    <main>
        <!-- Desarrolladores -->
        <div id="des" class="container">

            <h2>Desarrolladores</h2>
            <br>

            <div class="row row-cols-1 row-cols-md-2 g-4">

                <!-- Miembro -->
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..//img/maria_peralta_calvo.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Miembro -->
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..//img/icono_lic_info.png" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>


    </main>
    <?php include("footer.php"); ?>
</body>
</html>