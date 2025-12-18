<?php
function url($args = null)
{
    return 'http://localhost/lorem/EstateAgency/';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Primary Meta Tags -->
    <title>Memar | Crack Injection, Waterproofing, Fireproofing & Epoxy Flooring Services</title>
    <meta name="description" content="Professional crack injection, waterproofing, fireproofing, fire stopping, protective coating, concrete repair, fit-out, interior design, epoxy flooring and polyurethane flooring services for industrial, commercial and residential projects.">
    <meta name="keywords" content="crack injection, waterproofing services, fireproofing, fire stopping, protective coating, concrete repair, fit out works, interior design services, epoxy flooring, polyurethane flooring, industrial flooring, building repair services">
    <meta name="author" content="Your Company Name">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                            <li><a href="<?= url() ?>#about">About Us</a></li>
                            <li><a href="<?= url() ?>#">Download Profile</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="<?= url() ?>#architectural-design">Services</a></li> -->
                    <li class="dropdown"><a href="javascript:void(0)"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="<?= url() ?>#architectural-design">Architectural Design</a></li>
                            <li><a href="<?= url() ?>#interior-design">Interior Design & Fit-Out</a></li>
                            <li><a href="<?= url() ?>#landscape-architecture">Landscape Architecture</a></li>
                            <li><a href="<?= url() ?>#general-construction">General Construction</a></li>
                            <li><a href="<?= url() ?>#structural-strengthening">Structural Strengthening</a></li>
                            <li><a href="<?= url() ?>#concrete-repair">Concrete Repair & Injection</a></li>
                            <li><a href="<?= url() ?>#waterproofing">Waterproofing Systems</a></li>
                            <li><a href="<?= url() ?>#protective-coatings">Protective Coatings</a></li>
                            <li><a href="<?= url() ?>#safety-first">Passive fire proofing</a></li>
                            <li><a href="<?= url() ?>#call-to-action">Industrial Flooring</a></li>

                        </ul>
                    </li>
                    <li><a href="<?= url() ?>#">Projects</a></li>
                    <li><a href="<?= url() ?>ethics.php">Code of Ethics</a></li>
                    <li><a href="<?= url() ?>#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>