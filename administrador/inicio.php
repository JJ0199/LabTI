<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: http://localhost/mat/administrador/");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width,initial-scale=1" name="viewport">
                    <meta content="#" name="keywords">
                        <meta content="#" name="description">
                            <title>
                                administrador
                            </title>
<!-- Fav and touch icons -->
<link href="../assets/images/favicon.ico" rel="apple-touch-icon-precomposed" sizes="144x144">
<link href="../assets/images/favicon.ico" rel="apple-touch-icon-precomposed" sizes="114x114">
<link href="../assets/images/favicon.ico" rel="apple-touch-icon-precomposed" sizes="72x72">
<link href="../assets/images/favicon.ico" rel="apple-touch-icon-precomposed">
<link href="../assets/images/favicon.ico" rel="shortcut icon">
<!-- Bootstrap -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fontawesome -->
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<!-- Flaticons -->
<link href="../assets/css/font/flaticon.css" rel="stylesheet">
<!-- Slick Slider -->
<link href="../assets/css/slick.css" rel="stylesheet">
<!-- Range Slider -->
<link href="../assets/css/ion.rangeSlider.min.css" rel="stylesheet">
<!-- Datepicker -->
<link href="../assets/css/datepicker.css" rel="stylesheet">
<!-- magnific popup -->
<link href="../assets/css/magnific-popup.css" rel="stylesheet">
<!-- Nice Select -->
<link href="../assets/css/nice-select.css" rel="stylesheet">
<!-- Custom Stylesheet -->
<link href="../assets/css/style.css" rel="stylesheet">
<!-- Custom Responsive -->
<link href="../assets/css/responsive.css" rel="stylesheet">
</link>
</link>
                                                                            </link>
                                                                        </link>
                                                                    </link>
                                                                </link>
                                                            </link>
                                                        </link>
                                                    </link>
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <!-- Header -->
        <!-- Start Topbar -->
        <header class="header">
            <div class="topbar bg-theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="leftside">
                                <ul class="custom-flex">

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="rightside full-height">
                                <ul class="custom-flex full-height">
                                    <li class="book-appointment">
                                        <a href="../close.php">
                                            Cerrar session
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <div class="main-navigation">
                                    <div class="logo">
                                        <a href="inicio.php">
                                            <img alt="logo" class="img-fluid" src="../assets/images/arbol3.png"/>
                                        </a>
                                    </div>
                                    <div class="main-menu">
                                        <ul class="custom-flex">
                                            <li class="menu-item active">
                                                <a href="inicio.php">
                                                    Inicio
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">
                                                    admin
                                                </a>
                                                <ul class="submenu custom">
                                                    <li class="menu-item">
                                                        <a href="">
                                                            Admin
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#mision">
                                                            Misión
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">
                                                            Historía
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#gallery">
                                                            Galería
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#contacto">
                                                            Contacto
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">
                                                    admin
                                                </a>
                                                <ul class="submenu custom">
                                                    <li class="menu-item">
                                                        <a href="blog.html">
                                                            Sistemas Inteligentes y Distribuidos
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-left-sidebar.html">
                                                            Objetivos
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-right-sidebar.html">
                                                            Integrantes
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-details.html">
                                                            Responsable
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-details-left-sidebar.html">
                                                            Multimedia
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-details-right-sidebar.html">
                                                            Proyectos
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">
                                                    Admin
                                                </a>
                                                <ul class="submenu custom">
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Proyectos
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Staf
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-right-sidebar.html">
                                                                    Problematica
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details.html">
                                                                    Solución Propuesta
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details-left-sidebar.html">
                                                                    Objetivo
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details-right-sidebar.html">
                                                                    Participantes
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details-right-sidebar.html">
                                                                    Prestador
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details-right-sidebar.html">
                                                                    Informe Técnico
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Congresos
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Descripcion
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-right-sidebar.html">
                                                                    Hipervinculo
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details.html">
                                                                    Contacto
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Cuerpo Académico
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Descripción
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-right-sidebar.html">
                                                                    Contacto
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details.html">
                                                                    Inventario de Reportes
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-details.html">
                                                                    Integrantes
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">
                                                    Miembros del Lab
                                                </a>
                                                <ul class="submenu custom">
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Profesores Investigadores
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                    Información de Contacto
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Curriculum Vitae
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">
                                                                    Publicaciones
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Alumnos Tesistas
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="#">
                                                                    Informacion de Contacto
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">
                                                                    Curriculum Vitae
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Estancias Profesionales
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                    Informacion de Contacto
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Curriculum Vitae
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Servicio Social
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                    Informacion de Contacto
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Curriculum Vitae
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            C.E
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                    Informacion de Contacto
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Curriculum Vitae
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">
                                                            Alumno
                                                        </a>
                                                        <ul class="submenu custom">
                                                            <li class="menu-item">
                                                                <a href="blog.html">
                                                                    Informacion de Contacto
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="blog-left-sidebar.html">
                                                                    Curriculum Vitae
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">
                                                    Difusión
                                                </a>
                                                <ul class="submenu custom">
                                                    <li class="menu-item">
                                                        <a href="booking.html">
                                                            Noticias
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="faqs.html">
                                                            Eventos
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="gallery.html">
                                                            Conferencias
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hamburger-menu">
                                        <div class="menu-btn">
                                            <span>
                                            </span>
                                            <span>
                                            </span>
                                            <span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Topbar -->
        <!-- Header -->
        <!-- Start Subheader -->
        <div class="subheader normal-bg section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-custom-white">
                            Bienvenido: <?php echo $_SESSION['nombre'] ?>
                        </h1>
                        <ul class="custom-flex justify-content-center">
                            <li class="fw-500">
                                <a class="text-custom-white" href="inicio.php">
                                    inicio
                                </a>
                            </li>
                            <li class="active fw-500">
                                ir
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subheader -->
        <!-- Start Blog -->
        <section class="section-padding bg-light-white our_articles">
            <div class="container">
                <div class="row">
                    <h6 class="d-none">
                        1
                    </h6>
                    <div class="col-lg-8">
                        <div class="row">
                            <!-- article -->
                            <article class="col-md-6 post mb-xl-30">
                                <div class="post-wrapper bx-wrapper">
                                    <div class="post-img animate-img">
                                        <a href="#">
                                            <img alt="img" class="full-width" src="../assets/images/blog/65.jpg"/>
                                        </a>
                                        <div class="post-date">
                                            <div class="text-custom-white fw-600 date bg-custom-blue">
                                                dia
                                            </div>
                                            <div class="text-custom-white year">
                                                mes/año
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-meta padding-20 bg-custom-white p-relative">
                                        <div class="post-meta mb-xl-20">
                                            <a class="text-light-dark mr-1" href="#">
                                                <span class="text-custom-blue">
                                                    <i class="fas fa-comment">
                                                    </i>
                                                </span>
                                                Comentarios
                                            </a>
                                            <a class="text-light-dark mr-1" href="#">
                                                <span class="text-custom-blue">
                                                    <i class="fas fa-thumbs-up">
                                                    </i>
                                                </span>
                                               Likes
                                            </a>
                                        </div>
                                        <div class="post-heading">
                                            <h2>
                                                <a class="text-custom-black fw-600 fs-20" href="#">
                                                    Nombre del evento
                                                </a>
                                            </h2>
                                            <p class="text-light-dark no-margin">
                                                Descripcion breve del evento
                                        </div>
                                    </div>
                                    <div class="post-footer">
                                        <div class="post-author">
                                            <cite class="text-custom-black">
                                                Quien lo imparte
                                                <a href="#">
                                                    Profesor
                                                </a>
                                            </cite>
                                        </div>

                                    </div>
                                </div>
                            </article>
                            <!-- article -->
                            <!-- article -->
                            <article class="col-md-6 post mb-xl-30">
                                <div class="post-wrapper bx-wrapper">
                                    <div class="post-img animate-img">
                                        <a href="#">
                                            <img alt="img" class="full-width" src="../assets/images/blog/65.jpg">
                                            </img>
                                        </a>
                                        <div class="post-date">
                                            <div class="text-custom-white fw-600 date bg-custom-blue">
                                                21
                                            </div>
                                            <div class="text-custom-white year">
                                                mes/año
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-meta padding-20 bg-custom-white p-relative">
                                        <div class="post-meta mb-xl-20">

                                        </div>
                                        <div class="post-heading">
                                            <h2>
                                                <a class="text-custom-black fw-600 fs-20" href="#">
                                                    Nombre evento
                                                </a>
                                            </h2>
                                            <p class="text-light-dark no-margin">
                                                Descripcion breve del evento
                                            </p>
                                        </div>
                                    </div>
                                    <div class="post-footer">
                                        <div class="post-author">
                                            <cite class="text-custom-black">
                                                Quien lo imparte
                                                <a href="#">
                                                    Profesor
                                                </a>
                                            </cite>
                                    </div>
                                </div>
                            </article>
                            <!-- article -->

                            <!-- article -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <nav class="section-padding-top">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                Paginas
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                1
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">
                                                2
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                3
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                más
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <aside class="col-lg-4">
                        <div class="sidebar_wrap mb-md-80">
                            <div class="sidebar">
                                <div class="sidebar_widgets mb-xl-30">
                                    <div class="widget_title">
                                        <h5 class="no-margin text-custom-white">
                                            Buscar
                                        </h5>
                                    </div>
                                    <form>
                                        <div class="input-group group-form">
                                            <input class="form-control form-control-custom" name="#" placeholder="Search" type="search">
                                                <span class="input-group-append">
                                                    <i class="fas fa-search">
                                                    </i>
                                                </span>
                                            </input>
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar_widgets mb-xl-30">
                                    <div class="widget_title">
                                        <h5 class="no-margin text-custom-white">
                                            Categoría
                                        </h5>
                                    </div>
                                    <ul class="categories custom">
                                        <li>
                                            <a class="text-custom-black fs-14" href="#">
                                                Tipo
                                                <span class="text-light-dark">
                                                    num
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-custom-black fs-14" href="#">
                                               Tipo
                                                <span class="text-light-dark">
                                                    num
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-custom-black fs-14" href="#">
                                                Tipo
                                                <span class="text-light-dark">
                                                    num
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-custom-black fs-14" href="#">
                                                Tipo
                                                <span class="text-light-dark">
                                                    num
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar_widgets mb-xl-30">
                                    <div class="widget_title">
                                        <h5 class="no-margin text-custom-white">
                                            Eventos populares
                                        </h5>
                                    </div>
                                    <ul class="custom popular_post">
                                        <li class="mb-xl-20">
                                            <div class="post">
                                                <div class="post-wrapper">
                                                    <div class="popular_post_img animate-img">
                                                        <a href="#">
                                                            <img alt="#" class="image-fit" src="../assets/images/blog/65.jpg"/>
                                                        </a>
                                                    </div>
                                                    <div class="popular_post_title">
                                                        <h6>
                                                            <a class="text-custom-black fs-14" href="#">
                                                                evento
                                                            </a>
                                                        </h6>
                                                        <span class="date text-custom-blue fw-600 fs-14">
                                                            fecha(12 Dec 2019)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-xl-20">
                                            <div class="post">
                                                <div class="post-wrapper">
                                                    <div class="popular_post_img animate-img">
                                                        <a href="#">
                                                            <img alt="#" class="image-fit" src="../assets/images/blog/65.jpg"/>
                                                        </a>
                                                    </div>
                                                    <div class="popular_post_title">
                                                        <h6>
                                                            <a class="text-custom-black fs-14" href="#">
                                                               evento
                                                            </a>
                                                        </h6>
                                                        <span class="date text-custom-blue fw-600 fs-14">
                                                            fecha(12 Dec 2019)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Sidebar Widgets -->
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- End Blog -->
<?php
include "../controlador/conexion.php";
include "../controlador/operacion.php";
?>
        <center><font class="solo">Registros del Profesor</font></center>
            <div class="contener">

            <table border="2" align="center">
                <tr>
                    <td><font face="Century Gothic">Matrícula</font></td>
                    <td><font face="Century Gothic">Nombre</font></td>
                    <td><font face="Century Gothic">Apellidos</font></td>
                    <td><font face="Century Gothic">Proyectos Terminados</font></td>
                    <td><font face="Century Gothic">Servicio social</font></td>
                    <td><font face="Century Gothic">Puesto</font></td>
                    <td><font face="Century Gothic">Botón</font></td>
                    <td><font face="Century Gothic">Botón</font></td>

                </tr>
                <?php
$ob   = new metodos();
$sql  = "SELECT id, nombre, apellido, proyecto, servicio, puesto FROM paciente";
$Data = $ob->VerDatos($sql);
foreach ($Data as $key) {
    ?>
                <tr>
                    <?php $id = $key['id'];?>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $key['nombre']; ?></td>
                    <td><?php echo $key['apellido']; ?></td>
                    <td><?php echo $key['proyecto']; ?></td>
                    <td><?php echo $key['servicio']; ?></td>
                    <td><?php echo $key['puesto']; ?></td>
                    <td><?php echo "<a href='actualizaPaciente.php?id=$id'> Modificar </a>"; ?></td>
                    <td><?php echo "<a href='../controlador/EliminarPaciente.php?id=$id'> Eliminar </a>"; ?></td>
                </tr>
                <?php
}
?>
                </table>

        </div>

    </body>
    </body>
    </html>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-custom-white">
                            | Grupo de desarrollo: Estudiantes de los cursos de verano de Diseño estructurado de algoritmos,
                                estructura de datos, Diseño web, Ingeniería de Software II y Sistemas distribuidos

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
        <div class="back-top" id="back-top">
            <a href="#top">
                <i class="flaticon-arrows">
                </i>
            </a>
        </div>
        <!-- Place all Scripts Here -->
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js">
        </script>
        <!-- Popper -->
        <script src="assets/js/popper.min.js">
        </script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js">
        </script>
        <!-- Range Slider -->
        <script src="assets/js/ion.rangeSlider.min.js">
        </script>
        <!-- Slick Slider -->
        <script src="assets/js/slick.min.js">
        </script>
        <!-- Datepicker -->
        <script src="assets/js/datepicker.js">
        </script>
        <script src="assets/js/datepicker.en.js">
        </script>
        <!-- Isotope Gallery -->
        <script src="assets/js/isotope.pkgd.min.js">
        </script>
        <!-- Nice Select -->
        <script src="assets/js/jquery.nice-select.js">
        </script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.min.js">
        </script>
        <!-- Maps -->
        <script src="http://www.google.cn/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg">
        </script>
        <!-- Custom Js -->
        <script src="assets/js/custom.js">
        </script>
        <!-- /Place all Scripts Here -->
    </body>
</html>