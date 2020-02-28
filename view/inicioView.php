<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Losüng Tech</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link href="assets/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media='screen,print' />
    <link rel="stylesheet" href="assets/lib/swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Fuentes.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/Inicio.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>


<body id="Inicio">

    <?php include('view/includes/navbar.php')?>

    <!-- Swiper -->
    <div class="desktop_slider swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(images/PORTADA-WEB.png)">
                <div class="carousel-caption bottom" >
                    <div class="Titulo">
                        <!--<h2>Tecnología Alemana</h2>-->
                    </div>
                    <div class="Contenido">
                        <p>Construimos confianza cumpliendo cabalmente lo que prometemos</p>
                    </div>
                    <div class="Enlace">
                        <a class="btn" href="<?php echo $helper->url("Inicio","Contacto"); ?>">Contáctanos</a>
                    </div>        
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    <!-- Swiper -->
    <div class="mobile_slider swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(images/PORTADA-MOBILE.png)">
            <div class="carousel-caption bottom" >
                <div class="Titulo">
                    <!--<h2>Tecnología Alemana</h2>-->
                </div>
                <div class="Contenido">
                    <p>Construimos confianza cumpliendo cabalmente lo que prometemos</p>
                </div>
                <div class="Enlace">
                    <a class="btn" href="<?php echo $helper->url("Inicio","Contacto"); ?>">Contáctanos</a>
                </div>         
            </div>    
        </div>
    
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <?php if($nosotros->publicar){ ?>
    <section id="nosotros" class="nosotros">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"> 
                    <img class="img-responsive img-nosotros" width=100% src="admin/assets/img/<?php echo $nosotros->imagen ;?>">
                </div>
                <div class="col-sm-6">
                    <div class="Subtitulo">
                        <h2><u><?php echo $nosotros->titulo ;?></u></h2>
                    </div>
                    <div class="Contenido">
                    <?php echo $nosotros->contenido ;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php if($cultura->publicar){ ?>
    <section id="cultura" class="cultura">
        <!--Figura SVG en forma de onda usado para el clip-path del fondo-->
        <svg width="0" height="0">
            <defs>
            <clipPath id="myClip" clipPathUnits="objectBoundingBox" >
                <path d="M-0.07497142857142856,0.15460000000000002 C0.4393714285714286,-0.46373333333333333 0.9327428571428571,0.9111333333333332 1.4342000000000001,0.8979999999999999 L1.4261428571428572,1.0163333333333333 L0,1 Z"/>
            </clipPath>
            </defs>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="Subtitulo">
                        <h2><u><?php echo $cultura->titulo ;?></u></h2>
                    </div>
                    <div class="Contenido">
                        <?php echo $cultura->contenido ;?>
                    </div>
                    <div class="center">
                        <img class="center" width=100px src="images/ICONO 02.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-sm-6" style="float: right;transform: scale(0.8) translateY(-100%) translateX(-3%);"> 
        <img class="img-responsive img-circle img-circle-right" width="100%" src="admin/assets/img/<?php echo $cultura->imagen ;?>">
    </div>
    <?php } ?>

    <?php if($fondo->publicar){ ?>
    <div id="Fondo1" style="background-image:url('admin/assets/img/admin/assets/img/<?php echo $fondo->imagen ;?>')"></div>
    <?php } ?>

    <section id="servicios" class="servicios">
        <div class="container">
            <div class="row center">
                <div class="col-sm-12"> 
                    <div class="Subtitulo">
                        <h2><u>SERVICIOS</u></h2>
                    </div>
                </div>
                <div class="Contenido center">
                    <div class="col-sm-4"> 
                        <img class="img-responsive" width=100% src="images/Development.png">
                        <h3>Development</h3>
                    </div>
                    <div class="col-sm-4"> 
                        <img class="img-responsive" width=100% src="images/Management.png">
                        <h3>Management</h3>
                    </div>
                    <div class="col-sm-4"> 
                        <img class="img-responsive" width=100% src="images/Intelligence.jpg">
                        <h3>Intelligence</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if($soluciones->publicar){ ?>
    <section id="soluciones" class="soluciones">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5"> 
                    <img class="img-responsive img-circle img-circle-left" width=100% src="admin/assets/img/<?php echo $soluciones->imagen ;?>">
                </div>
                <div class="col-sm-7"> 
                    <div class="Subtitulo">
                        <h2><u><?php echo $soluciones->titulo ;?></u></h2>
                    </div>
                    <div class="Contenido">
                        <?php echo $soluciones->contenido ;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php if($outsourcing->publicar){ ?>
    <section id="operations" class="operations">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5"> 
                    <img class="img-responsive img-circle img-circle-left" width=100% src="admin/assets/img/<?php echo $outsourcing->imagen ;?>">
                </div>
                <div class="col-sm-7"> 
                    <div class="Subtitulo">
                        <h2><u><?php echo $outsourcing->titulo ;?></u></h2>
                    </div>
                    <div class="Contenido">
                        <?php echo $outsourcing->contenido ;?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php if($aliados->publicar){ ?>
    <section id="aliados" class="aliados">
        <div class="container-fluid">
            <div class="Subtitulo center">
                <h2><u><?php echo $aliados->titulo ;?></u></h2>
            </div>
            <div class="row center" style="background:white;">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"> 
                    <img class="img-responsive" width=100% src="admin/assets/img/<?php echo $aliados->imagen ;?>">
                </div>
            </div>
        </div>
    </section>
    <?php } ?>    
    <?php include('view/includes/footer.php')?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/swiper/dist/js/swiper.min.js"></script>
    <script src="assets/js/jquery.singlePageNav.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>