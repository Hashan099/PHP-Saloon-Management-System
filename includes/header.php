<?php
  session_start()
?>

<div class="preloader">
        <div class="preloader_image">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg" style="background-color: #D2AACF;">

        <div class="container">
            <a class="navbar-brand" href="index.php">
            <img src="img/salon_logo.png" width="100px" height="100px" alt="Logo" style="border-radius: 100px;">

            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="product-list.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                    <li class="nav-item btn-appointment">
                        <a class="nav-link" href="appointment.php">Salon Appointment</a>
                    </li>
                    <li class="nav-item btn-appointment">
                        <a class="nav-link" href="admin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--    banner-->
<section class="carousel slide" id="banner" data-ride="carousel" style="background-color: #D2AACF;">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url(img/banner/111.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">

                                    <h1 class="animated fadeInUp" style="color:white">Salon Liya Soba</h1>
                                    <p class="animated fadeInUp" style="color:white">The place that makes you look like a star.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInUp">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(img/banner/112.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h1 class="animated fadeInUp" style="color:white">Salon Liya Soba</h1>
                                    <p class="animated fadeInLeft" style="color:white">The place that makes you look like a star.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInLeft">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url(img/banner/113.jpg)">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h1 class="animated fadeInUp" style="color:white">Salon Liya Soba</h1>
                                    <p class="animated fadeInRight" style="color:white">The place that makes you look like a star.</p>
                                    <a href="contact-us.php" class="btn btn-primary animated fadeInRight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
<!--    banner end-->
