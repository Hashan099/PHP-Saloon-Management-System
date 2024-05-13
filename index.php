<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Salon Liya Soba</title>
    <link rel="shortcut icon" href="img/salon_logo.png" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--css file-->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/venobox.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/chosen.css" rel="stylesheet">
    <link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="css/notifIt.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .btn-success:hover {
        background-color: #D4B5DE;
    }
</style>
</head>

<body>
    <!--Preload-->
    <?php include_once('includes/header.php');?>
    <!-- end nav -->
    <!-- end banner -->




    <section class="section-spacing inverse-bg" id="gallery"  style="background-color: #D2AACF;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span> Showcase </span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/gallery/facial spa.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/facial spa.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Facial Massage</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/services/bridal-makeup.jpg" class="venobox" data-gall="gallery">
                            <img src="img/services/bridal-makeup.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Bridal Makeup</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/gallery/hair treatment.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/hair treatment.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Hair Treatment</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/massage-room.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/28.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Skin Care</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/gallery/body massage.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/27.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>clean up</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="img/cosmetics.jpg" class="venobox" data-gall="gallery">
                            <img src="img/gallery/47.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <h3>Nail Care</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center; margin-top:50px;">
    <a href="gallery.php" style="text-decoration: none;">
        <button class="btn-success" style="padding: 10px 20px; border-radius: 10px; background-color: #9434B6; border: none; color: white; transition: background-color 0.3s;">View More</button>
    </a>
</div>
 </section>
    <!-- end gallery -->

    
    <!-- end appointment -->

    <!--Counter part and funfacts-->
    <section class="section-spacing" id="fun_fact"  style="background-color: #D2AACF;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fun-fact-img wow fadeIn">
                        <img class="tilt-img rounded" style="height: 400px" src="img/gallery/46.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">359</span>
                                <h3>Clients</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">12</span>
                                <h3>Services</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">5</span>
                                <h3>Beautician</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">25</span>
                                <h3>Products</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end fun facts -->
    <?php include_once('includes/footer.php');?>
    <!-- end footer -->

    <!-- Bact to top -->
    <div class="back-top">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/bootstrap-timepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/chosen.jquery.js"></script>
    <script src="js/notifIt.min.js"></script>

    <script src="mail/js/form-validator.min.js"></script>
    <script src="mail/js/contact-form-script.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
