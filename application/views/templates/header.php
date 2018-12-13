<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title><?php echo $title ?></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo $url . 'css/bootstrap.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'vendors/linericon/style.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'css/font-awesome.min.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'vendors/owl-carousel/owl.carousel.min.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'vendors/lightbox/simpleLightbox.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'vendors/nice-select/css/nice-select.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'vendors/animate-css/animate.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'vendors/popup/magnific-popup.css' ?>">
        <!--         main css -->
        <link rel="stylesheet" href="<?php echo $url . 'css/style.css' ?>">
        <link rel="stylesheet" href="<?php echo $url . 'css/responsive.css' ?>">
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu row m0">
                <div class="container">
                    <div class="float-left">
                        <ul class="list header_social">
                            <li><p>N</p></li>
                            <li><p>E</p></li>
                            <li><p>W</p></li>
                            <li><p>S</p></li>
                        </ul>
                    </div>
                    <div class="float-right">
                        <a class="dn_btn" href="tel:+2348146318705">+234-814-631-8705</a>
                        <a class="dn_btn" href="mailto:support@scholar.com">support@naijacodex.tk</a>
                    </div>
                </div>
            </div>
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.php"> <img src="<?php echo $url . 'img/logo.png' ?>" alt=""> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="<?php echo $url ?>">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo $url . 'about' ?>">About</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="courses.php">Courses</a>
                                        <li class="nav-item"><a class="nav-link" href="course-details.php">Course Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="<?php echo $url . 'news' ?>">View News</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo $url . 'news/create' ?>">Add News</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo $url . 'index.php/upload' ?>">Upload Image</a></li>
                                        <li class="nav-item"><a class="nav-link" href="signin.php">Log in</a></li>
                                    </ul>

                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <br><br><br><br>
        <!--================Header Menu Area =================-->
