<?php
function url($args = null)
{
    return 'http://localhost/memer/memer/';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Memar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page scrolled">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="<?= url() ?>" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="logo.png" class="img-fluid">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= url() ?>#hero" class="active">Home</a></li>
                    <!-- <li><a href="#about">About</a></li> -->
                    <li class="dropdown"><a href="javascript:void(0)"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#">Download File</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#architectural-design">Services</a></li> -->
                    <li class="dropdown"><a href="javascript:void(0)"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#architectural-design">Architectural Design</a></li>
                            <li><a href="#interior-design">Interior Design & Fit-Out</a></li>
                            <li><a href="#landscape-architecture">Landscape Architecture</a></li>
                            <li><a href="#general-construction">General Construction</a></li>
                            <li><a href="#structural-strengthening">Structural Strengthening</a></li>
                            <li><a href="#concrete-repair">Concrete Repair & Injection</a></li>
                            <li><a href="#waterproofing">Waterproofing Systems</a></li>
                            <li><a href="#protective-coatings">Protective Coatings</a></li>
                            <li><a href="#safety-first">Safety First</a></li>
                            <li><a href="#call-to-action">Industrial Flooring</a></li>

                        </ul>
                    </li>
                    <li><a href="#contact">Projects</a></li>
                    <li><a href="<?= url() ?>ethics.php">Code of Ethics</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>