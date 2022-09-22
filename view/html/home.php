<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Bootstrap -->
    <?php include("bootstrap_v5.php"); ?>

    <!-- Para el menu -->
    <script src="./js/desplegar_menu.js"></script>

    <!--Iconos-->
    <link rel="shortcut icon" href="view/img/icono_lic_info.png">

    <!-- CSS -->
    <link href="view/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container">
        <?php include("menu_nav.php"); ?>
    </div>

    <main>
        <div id="carousel_labti" class="carousel slide pointer-event" data-bs-ride="carousel">
        
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel_labti" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#carousel_labti" data-bs-slide-to="1" class="" aria-label="Slide 2" ></button>
                <button type="button" data-bs-target="#carousel_labti" data-bs-slide-to="2" class="" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="view/img/Diapositiva1.png" class="d-block w-100" alt="...">

                    <div class="container">  <!-- checar -->
                        <div class="carousel-caption ">  <!-- v1 text-start || vacio centra ||text-end -->  <!-- v2 d-none d-md-block  -->
                            <h1>Example headline.</h1>  <!-- h5 checar -->
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>  <!-- checar -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="view/img/Diapositiva2.png" class="d-block w-100" alt="...">

                    <div class="container">  <!-- checar -->
                        <div class="carousel-caption ">  <!-- v1 text-start || vacio centra ||text-end -->  <!-- v2 d-none d-md-block  -->
                            <h1>Example headline.</h1>  <!-- h5 checar -->
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>  <!-- checar -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="view/img/Diapositiva3.png" class="d-block w-100" alt="...">

                    <div class="container">  <!-- checar -->
                        <div class="carousel-caption ">  <!-- v1 text-start || vacio centra ||text-end -->  <!-- v2 d-none d-md-block  -->
                            <h1>Example headline.</h1>  <!-- h5 checar -->
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>  <!-- checar -->
                        </div>
                    </div>
                </div>

            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_labti" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_labti" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>

        </div>
    </main>
    <?php include("footer.php"); ?>
</body>
</html>