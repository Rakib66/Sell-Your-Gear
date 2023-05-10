<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sell Your Gear</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>

  <?php include('includes/header.php'); ?>
 

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">


        <!--  ======================= Start Banner Area =======================  -->
        <section class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h1 class="title-text">\m/</h1>
                        <h2 class="title-text text-uppercase">Welcome to the</h2>
                        <h4 class="title-text text-uppercase">Used Guitar Marketplace</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                               <button type="button" class="btn button primary-button mr-4 text-uppercase">Read more</button> 
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="./img/banner/gg.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  ======================= End Banner Area =======================  -->

        <!--  ========================= About Area ==========================  -->
       
        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/about.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>BYE</span>
                            <span>AND</span>
                            <span>SELL</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                Please feel free to join and trade your insturments and other stuffs with people. Trading is not that common in BD.We are trying to make it easy and acceptable to everyone
                            </p>
                            <p class="para">
                                Just like Bob Dylan said, the times they are a'changing. Brick and mortar stores are closing left and right, and music gear sales are moving more and more to the Internet.
                            </p>
                        </div>
                        <button type="button" class="btn button primary-button text-uppercase">Read More</button>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area ==========================  -->

        <!--  ======================== Brand Area ==============================  -->

        <section class="brand-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="first-row row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/f.png" alt="Brand-1 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/e.png" alt="Brand-2 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/p.png" alt="Brand-3 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/g.png" alt="Brand-4">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/gr.png" alt="Brand-5 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/ib.png" alt="Brand-6">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/j.png" alt="Brand-7 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/er.png" alt="Brand-8 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/y.png" alt="Brand-9">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="experience-area">
                            <div class="d-flex flex-row years-area">
                               
                                <h2>
                                    <span>Want</span>
                                    <span>To</span>
                                    <span>Learn</span>
                                    <span>Guitar??</span>
                                </h2>
                            </div>
                            <div class="d-flex flex-row flex-wrap call-area">
                                <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                                <div class="call-now">
                                    <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                                    <span class="font-roboto py-2">(+880)-1786850214</span>
                                </div>
                            </div>
                            <div class="bg-panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================== End Brand Area ==============================  -->

        <!--  ====================== Start Services Area =============================  -->

        <section class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">Basic Guitar Chords</h1>
                        <p class="para">
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/bc.png" alt="Services-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Basic Chords</h5>
                                    <p class="card-text text-secondary">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/notes.png" alt="Services-2">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Fretboard notes</h5>
                                    <p class="card-text text-secondary">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/bar.png" alt="Services-3">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Bar Chords
                                    </h5>
                                    <p class="card-text text-secondary">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/scales.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Scales</h5>
                                    <p class="card-text text-secondary">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== End Services Area =============================  -->

        <!--  ======================= Project Area =============================  -->

        <section class="project-area">
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Popular Guitar String</h1>
                    <h1 class="text-uppercase title-h1">Brands</h1>
                </div>

               

                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/g.png">
                                    <img src="./img/portfolio/g.png" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Gibson</h4>
                                <span class="text-secondary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/e.png">
                                    <img src="./img/portfolio/e.png" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Ernie Ball</h4>
                                <span class="text-secondary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/eli.jpg">
                                    <img src="./img/portfolio/eli.jpg" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Elixir</h4>
                                <span class="text-secondary"></span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>


    </main>
    <!--  ======================= End Main Area ================================ -->
   
   <?php include('includes/footer.php'); ?>

 

    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>


</body>

</html>