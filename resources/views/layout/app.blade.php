<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/favicon/logo1.png')}}" rel="icon">
    {{-- <link href="{{asset('assets/favicon/logo1.png')}}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: BizLand - v3.7.0
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{route('home')}}"></span><img src="{{asset('assets/favicon/logo1.png')}}" alt="logo"><span style="color:#c46100"> BioShop</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="<?php if($nav == "home"): ?>active<?php endif; ?>" href="{{route('home')}}">Accueil</a></li>
                <li><a class="<?php if($nav == "apropos"): ?>active<?php endif; ?>" href="{{route('apropos')}}">Qui sommes nous</a></li>
                <li><a class="<?php if($nav == "commande"): ?>active<?php endif; ?>" href="{{route('commande.create')}}">Commandez-ici</a></li>
                <li><a class="<?php if($nav == "contact"): ?>active<?php endif; ?>" href="{{route('contact.create')}}">Contactez-nous</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 footer-contact">
                    <h3><img src="{{asset('assets/favicon/logo1.png')}}" alt="logo" style="width: 50px; heigth: 70px" ><span style="color:#c46100"> BioShop</a></h3>
                    <p>
                        Abidjan, Williamsville, Cote d'Ivoire <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 footer-links">
                    <h4>Suivez-nous sur</h4>
                    {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> --}}
                    <div class="social-links mt-3">
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 footer-email">
                    <h4>Abonnez-vous</h4>
                    <p>Abonnez-vous pour recevoir nos meilleures offres !</p>
                    <form action="{{route('email.save')}}" method="post" class="form-group">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <input type="submit" value="S'abonner" class="btn btn-primary">
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Bioshop</span></strong>. Tout Droit Reservé
        </div>
    </div>
</footer><!-- End Footer -->

{{-- <div id="preloader"></div> --}}
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
