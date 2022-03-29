<?php $__env->startSection("content"); ?>

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ge Pyxis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicons -->
    <link href="assets/icono.png" rel="icon">
    <link href="assets/icono.png" rel="">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Carrucel dinamico -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<!--==========================
  Header
============================-->
<a href="https://wa.me/525522793490" target="_blank" class="whats" data-toggle="tooltip"><img src="https://img.icons8.com/color/96/000000/whatsapp.png"/ alt="Whatsapp Logo"></a>

<!--==========================
  Intro Section
============================ -->
<!-- Lugar del codigo para el slider -->

<main id="main">


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3><?php echo e($subcategoria->nombre); ?></h3>
            </header>
            <br>
            <br>


            <section class="our-services-area bg-gray section-padding-90-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5">
                        <div class="alazea-service-area mb-100">

                            <!-- Single Service Area -->
                            <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                                <!-- Content -->
                                <div class="service-content">
                                    <p style="font-family:Calibri Light; font-size: 20px; text-align: justify;"><?php echo $subcategoria->introduccion; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <div class="alazea-video-area  mb-100">
                            <div class="single-hero">
                                <img src="https://juanjoselo.files.wordpress.com/2017/10/screen-shot-2017-08-15-at-1-35-54-pm.png?w=429&h=209" class="slide-img"  width="400" height="300">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                </div>
            </div>
            <div class="description_area">
                <p style="font-family:Calibri Light; font-size: 20px; text-align: justify;"><?php echo $subcategoria->descripcion; ?></p><br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                </div>
            </div>
            <div class="description_area">
                <p style="font-family:Calibri Light; font-size: 20px; text-align: justify;"><?php echo $subcategoria->contenido; ?></p>
                <br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                </div>
            </div>
            <div class="description_area">
                <p style="font-family:Calibri Light; font-size: 20px; text-align: justify;"><?php echo $subcategoria->diferenciadores; ?></p><br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                </div>
            </div>
            <div class="description_area">
                <p style="font-family:Calibri Light; font-size: 20px; text-align: justify;"><?php echo $subcategoria->carac_adi; ?></p><br>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-12">
            <!-- Section Heading -->
            <p style="font-family:Calibri Light; font-size: 18px; text-align:center">
            <?php echo $subcategoria->info_adi; ?>

            <p style="text-align:center"><img src="https://lh3.googleusercontent.com/proxy/6F7MWjyVhbVrjeWITOs3Ar5qxR9q4d0awCQq8aOA7aFuSRyRcdFIt6wMyWUspR6QSL9LpPXfjt6DlOfGnnND6ntjfNoGPgHu8CZC85gznAURXWnzL9c4yh7pCNSNeTtpQ3rlpuA"  width="250" height="150" ></p>
            </p>
        </div>
    </div>
    </div>


</main>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>


<!-- Carrucel dinamico -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/cliente/sub_categoria/show.blade.php ENDPATH**/ ?>