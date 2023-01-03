
<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico')}}" type="image/x-icon" />

    <!-- Map CSS -->
{{--
    <link rel="stylesheet" href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
--}}

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/libs.bundle.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.bundle.css')}}" />

    <!-- Title -->
    <title>Landkit</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-156446909-2");

    </script>
</head>
<body>

<!-- MODALS -->
<!-- Example -->
<div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <!-- Close -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Image -->
                <div class="text-center">
                    <img src="assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-3" style="width: 200px;">
                </div>

                <!-- Heading -->
                <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
                    Schedule a demo with us
                </h2>

                <!-- Text -->
                <p class="fs-lg text-center text-muted mb-6 mb-md-8">
                    We can help you solve company communication.
                </p>

                <!-- Form -->
                <form>
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- First name -->
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                                <label for="registrationFirstNameModal">First name</label>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Last name -->
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                                <label for="registrationLastNameModal">Last name</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Email -->
                            <div class="form-floating">
                                <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                                <label for="registrationEmailModal">Email</label>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Password -->
                            <div class="form-floating">
                                <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                                <label for="registrationPasswordModal">Password</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <!-- Submit -->
                            <button class="btn w-100 btn-primary mt-3 lift">
                                Request a demo
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Signup: Horizontal  -->
<div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card card-row">
                <div class="row gx-0">
                    <div class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(assets/img/photos/photo-8.jpg);">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">

                        <!-- Shape -->
                        <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                            <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body">

                            <!-- Close -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            <!-- Heading -->
                            <h2 class="mb-0 fw-bold text-center" id="modalSignupHorizontalTitle">
                                Sign Up
                            </h2>

                            <!-- Text -->
                            <p class="mb-6 text-center text-muted">
                                Simplify your workflow in minutes.
                            </p>

                            <!-- Form -->
                            <form class="mb-6">

                                <!-- Email -->
                                <div class="form-group">
                                    <label class="visually-hidden" for="modalSignupHorizontalEmail">
                                        Your email
                                    </label>
                                    <input type="email" class="form-control" id="modalSignupHorizontalEmail" placeholder="Your email">
                                </div>

                                <!-- Password -->
                                <div class="form-group mb-5">
                                    <label class="visually-hidden" for="modalSignupHorizontalPassword">
                                        Create a password
                                    </label>
                                    <input type="password" class="form-control" id="modalSignupHorizontalPassword" placeholder="Create a password">
                                </div>

                                <!-- Submit -->
                                <button class="btn w-100 btn-primary" type="submit">
                                    Sign up
                                </button>

                            </form>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-center text-muted">
                                Already have an account? <a href="signin-illustration.html">Log in</a>.
                            </p>

                        </div>
                    </div>

                </div> <!-- / .row -->
            </div>
        </div>
    </div>
</div>

<!-- Signup: Vertical  -->
<div class="modal fade" id="modalSignupVertical" tabindex="-1" role="dialog" aria-labelledby="modalSignupVerticalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card">

                <!-- Close -->
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Image -->
                <img src="assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x text-white">
                        <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>          </div>
                </div>

                <!-- Body -->
                <div class="card-body">

                    <!-- Heading -->
                    <h2 class="mb-0 fw-bold text-center" id="modalSignupVerticalTitle">
                        Sign Up
                    </h2>

                    <!-- Text -->
                    <p class="mb-6 text-center text-muted">
                        Simplify your workflow in minutes.
                    </p>

                    <!-- Form -->
                    <form class="mb-6">

                        <!-- Email -->
                        <div class="form-group">
                            <label class="visually-hidden" for="modalSignupVerticalEmail">
                                Your email
                            </label>
                            <input type="email" class="form-control" id="modalSignupVerticalEmail" placeholder="Your email">
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-5">
                            <label class="visually-hidden" for="modalSignupVerticalPassword">
                                Create a password
                            </label>
                            <input type="password" class="form-control" id="modalSignupVerticalPassword" placeholder="Create a password">
                        </div>

                        <!-- Submit -->
                        <button class="btn w-100 btn-primary" type="submit">
                            Sign up
                        </button>

                    </form>

                    <!-- Text -->
                    <p class="mb-0 fs-sm text-center text-muted">
                        Already have an account? <a href="signin-illustration.html">Log in</a>.
                    </p>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Signin: Horizontal  -->
<div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card card-row">
                <div class="row gx-0">
                    <div class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(assets/img/photos/photo-1.jpg);">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

                        <!-- Shape -->
                        <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                            <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body">

                            <!-- Close -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            <!-- Heading -->
                            <h2 class="mb-0 fw-bold text-center" id="modalSigninHorizontalTitle">
                                Sign In
                            </h2>

                            <!-- Text -->
                            <p class="mb-6 text-center text-muted">
                                Simplify your workflow in minutes.
                            </p>

                            <!-- Form -->
                            <form class="mb-6">

                                <!-- Email -->
                                <div class="form-group">
                                    <label class="visually-hidden" for="modalSigninHorizontalEmail">
                                        Your email
                                    </label>
                                    <input type="email" class="form-control" id="modalSigninHorizontalEmail" placeholder="Your email">
                                </div>

                                <!-- Password -->
                                <div class="form-group mb-5">
                                    <label class="visually-hidden" for="modalSigninHorizontalPassword">
                                        Enter your password
                                    </label>
                                    <input type="password" class="form-control" id="modalSigninHorizontalPassword" placeholder="Enter your password">
                                </div>

                                <!-- Submit -->
                                <button class="btn w-100 btn-primary" type="submit">
                                    Sign in
                                </button>

                            </form>

                            <!-- Text -->
                            <p class="mb-0 fs-sm text-center text-muted">
                                Don't have an account yet? <a href="signin-illustration.html">Sign up</a>.
                            </p>

                        </div>
                    </div>

                </div> <!-- / .row -->
            </div>
        </div>
    </div>
</div>

<!-- Signin: Vertical  -->
<div class="modal fade" id="modalSigninVertical" tabindex="-1" role="dialog" aria-labelledby="modalSigninVerticalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card">

                <!-- Close -->
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Image -->
                <img src="assets/img/photos/photo-21.jpg" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                    <div class="shape shape-bottom shape-fluid-x text-white">
                        <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>          </div>
                </div>

                <!-- Body -->
                <div class="card-body">

                    <!-- Heading -->
                    <h2 class="mb-0 fw-bold text-center" id="modalSigninVerticalTitle">
                        Sign In
                    </h2>

                    <!-- Text -->
                    <p class="mb-6 text-center text-muted">
                        Simplify your workflow in minutes.
                    </p>

                    <!-- Form -->
                    <form class="mb-6">

                        <!-- Email -->
                        <div class="form-group">
                            <label class="visually-hidden" for="modalSigninVerticalEmail">
                                Your email
                            </label>
                            <input type="email" class="form-control" id="modalSigninVerticalEmail" placeholder="Your email">
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-5">
                            <label class="visually-hidden" for="modalSigninVerticalPassword">
                                Enter your password
                            </label>
                            <input type="password" class="form-control" id="modalSigninVerticalPassword" placeholder="Enter your password">
                        </div>

                        <!-- Submit -->
                        <button class="btn w-100 btn-primary" type="submit">
                            Sign in
                        </button>

                    </form>

                    <!-- Text -->
                    <p class="mb-0 fs-sm text-center text-muted">
                        Don't have an account yet? <a href="signin-illustration.html">Sign up</a>.
                    </p>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Payment -->
<div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPaymentTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <!-- Close -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Heading -->
                <h2 class="fw-bold text-center mb-1" id="modalPaymentTitle">
                    Add Payment
                </h2>

                <!-- Text -->
                <p class="fs-lg text-center text-muted mb-6 mb-md-8">
                    Simplify your workflow in minutes.
                </p>

                <!-- Form -->
                <form>

                    <!-- Name -->
                    <div class="form-group">
                        <label class="form-label" for="modalPaymentName">Name on card</label>
                        <input class="form-control" id="modalPaymentName" type="text" placeholder="First Last">
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label class="form-label" for="modalPaymentNumbber">Card number</label>
                        <input class="form-control" id="modalPaymentNumbber" type="number" placeholder="4242 4242 4242 4242">
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label class="form-label" for="modalPaymentDate">Exp. Date</label>
                        <input class="form-control" id="modalPaymentDate" type="text" placeholder="03/2023">
                    </div>

                    <!-- Submit -->
                    <button class="btn w-100 btn-primary mt-3 lift">
                        Add Payment Method
                    </button>

                </form>

            </div>
        </div>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
            <img src="assets/img/brand.svg" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-x"></i>
            </button>

            <!-- Navigation -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarLandings" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                        Landings
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
                        <div class="row gx-0">
                            <div class="col-12 col-lg-6">
                                <div class="dropdown-img-start" style="background-image: url(assets/img/photos/photo-3.jpg);">

                                    <!-- Heading -->
                                    <h4 class="fw-bold text-white mb-0">
                                        Want to see an overview?
                                    </h4>

                                    <!-- Text -->
                                    <p class="fs-sm text-white">
                                        See all the pages at once.
                                    </p>

                                    <!-- Button -->
                                    <a href="overview.html" class="btn btn-sm btn-white shadow-dark fonFt-size-sm">
                                        View all pages
                                    </a>

                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="dropdown-body">
                                    <div class="row gx-0">
                                        <div class="col-6">

                                            <!-- Heading -->
                                            <h6 class="dropdown-header">
                                                Services
                                            </h6>

                                            <!-- List -->
                                            <a class="dropdown-item" href="coworking.html">
                                                Coworking
                                            </a>
                                            <a class="dropdown-item" href="rental.html">
                                                Rental
                                            </a>
                                            <a class="dropdown-item mb-5" href="job.html">
                                                Job Listing
                                            </a>

                                            <!-- Heading -->
                                            <h6 class="dropdown-header">
                                                Apps
                                            </h6>

                                            <!-- List -->
                                            <a class="dropdown-item" href="desktop-app.html">
                                                Desktop
                                            </a>
                                            <a class="dropdown-item" href="mobile-app.html">
                                                Mobile
                                            </a>

                                        </div>
                                        <div class="col-6">

                                            <!-- Heading -->
                                            <h6 class="dropdown-header">
                                                Web
                                            </h6>

                                            <!-- List -->
                                            <a class="dropdown-item" href="index.html">
                                                Basic
                                            </a>
                                            <a class="dropdown-item" href="startup.html">
                                                Startup
                                            </a>
                                            <a class="dropdown-item" href="enterprise.html">
                                                Enterprise
                                            </a>
                                            <a class="dropdown-item" href="service.html">
                                                Service
                                            </a>
                                            <a class="dropdown-item" href="cloud.html">
                                                Cloud Hosting
                                            </a>
                                            <a class="dropdown-item" href="agency.html">
                                                Agency
                                            </a>
                                            <a class="dropdown-item" href="framework.html">
                                                Framework
                                            </a>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarPages" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarPages">
                        <div class="row gx-0">
                            <div class="col-6">
                                <div class="row gx-0">
                                    <div class="col-12 col-lg-6">

                                        <!-- Heading -->
                                        <h6 class="dropdown-header">
                                            Career
                                        </h6>

                                        <!-- List -->
                                        <a class="dropdown-item" href="careers.html">
                                            Listing
                                        </a>
                                        <a class="dropdown-item mb-5" href="career-single.html">
                                            Opening
                                        </a>

                                        <!-- Heading -->
                                        <h6 class="dropdown-header">
                                            Company
                                        </h6>

                                        <!-- List -->
                                        <a class="dropdown-item" href="about.html">
                                            About
                                        </a>
                                        <a class="dropdown-item" href="pricing.html">
                                            Pricing
                                        </a>
                                        <a class="dropdown-item mb-5 mb-lg-0" href="terms-of-service.html">
                                            Terms
                                        </a>

                                    </div>
                                    <div class="col-12 col-lg-6">

                                        <!-- Heading -->
                                        <h6 class="dropdown-header">
                                            Help center
                                        </h6>

                                        <!-- List -->
                                        <a class="dropdown-item" href="help-center.html">
                                            Overview
                                        </a>
                                        <a class="dropdown-item mb-5" href="help-center-article.html">
                                            Article
                                        </a>

                                        <!-- Heading -->
                                        <h6 class="dropdown-header">
                                            Contact
                                        </h6>

                                        <!-- List -->
                                        <a class="dropdown-item" href="contact.html">
                                            Basic
                                        </a>
                                        <a class="dropdown-item" href="contact-alt.html">
                                            Cover
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row gx-0">
                                    <div class="col-12 col-lg-6">

                                        <!-- Heading -->
                                        <h6 class="dropdown-header">
                                            Blog
                                        </h6>

                                        <!-- List -->
                                        <a class="dropdown-item" href="blog.html">
                                            Rich View
                                        </a>
                                        <a class="dropdown-item" href="blog-post.html">
                                            Article
                                        </a>
                                        <a class="dropdown-item" href="blog-showcase.html">
                                            Showcase
                                        </a>
                                        <a class="dropdown-item mb-5 mb-lg-0" href="blog-search.html">
                                            Search
                                        </a>

                                    </div>
                                    <div class="col-12 col-lg-6">

                                        <!-- Heading -->
                                        <h6 class="dropdown-header">
                                            Portfolio
                                        </h6>

                                        <!-- List -->
                                        <a class="dropdown-item" href="portfolio-masonry.html">
                                            Masonry
                                        </a>
                                        <a class="dropdown-item" href="portfolio-grid-rows.html">
                                            Grid Rows
                                        </a>
                                        <a class="dropdown-item" href="portfolio-parallax.html">
                                            Parallax
                                        </a>
                                        <a class="dropdown-item" href="portfolio-case-study.html">
                                            Case Study
                                        </a>
                                        <a class="dropdown-item" href="portfolio-sidebar.html">
                                            Sidebar
                                        </a>
                                        <a class="dropdown-item" href="portfolio-sidebar-fluid.html">
                                            Sidebar: Fluid
                                        </a>
                                        <a class="dropdown-item" href="portfolio-grid.html">
                                            Basic Grid
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarAccount" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarAccount">
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Settings
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="account-general.html">
                                    General
                                </a>
                                <a class="dropdown-item" href="account-security.html">
                                    Security
                                </a>
                                <a class="dropdown-item" href="account-notifications.html">
                                    Notifications
                                </a>
                                <a class="dropdown-item" href="billing-plans-and-payment.html">
                                    Plans & Payment
                                </a>
                                <a class="dropdown-item" href="billing-users.html">
                                    Users
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Sign In
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="signin-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="signin-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="signin.html">
                                    Basic
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninHorizontal">
                                    Modal Horizontal
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninVertical">
                                    Modal Vertical
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Sign Up
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="signup-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="signup-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="signup.html">
                                    Basic
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupHorizontal">
                                    Modal Horizontal
                                </a>
                                <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupVertical">
                                    Modal Vertical
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Password Reset
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="password-reset-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="password-reset-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="password-reset.html">
                                    Basic
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item dropend">
                            <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                Error
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="error-cover.html">
                                    Side Cover
                                </a>
                                <a class="dropdown-item" href="error-illustration.html">
                                    Illustration
                                </a>
                                <a class="dropdown-item" href="error.html">
                                    Basic
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                        Documentation
                    </a>
                    <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item" href="docs/index.html">

                                <!-- Icon -->
                                <div class="icon icon-sm text-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M8 3v.5A1.5 1.5 0 009.5 5h5A1.5 1.5 0 0016 3.5V3h2a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h2z" fill="#335EEA" opacity=".3"/><path d="M11 2a1 1 0 012 0h1.5a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-5a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H11z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" x="7" y="10" width="5" height="2" rx="1"/><rect fill="#335EEA" opacity=".3" x="7" y="14" width="9" height="2" rx="1"/></g></svg>                </div>

                                <!-- Content -->
                                <div class="ms-4">

                                    <!-- Heading -->
                                    <h6 class="fw-bold text-uppercase text-primary mb-0">
                                        Documentation
                                    </h6>

                                    <!-- Text -->
                                    <p class="fs-sm text-gray-700 mb-0">
                                        Customizing and building
                                    </p>

                                </div>

                            </a>
                            <a class="list-group-item" href="docs/alerts.html">

                                <!-- Icon -->
                                <div class="icon icon-sm text-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><rect fill="#335EEA" x="4" y="4" width="7" height="7" rx="1.5"/><path d="M5.5 13h4a1.5 1.5 0 011.5 1.5v4A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-4A1.5 1.5 0 015.5 13zm9-9h4A1.5 1.5 0 0120 5.5v4a1.5 1.5 0 01-1.5 1.5h-4A1.5 1.5 0 0113 9.5v-4A1.5 1.5 0 0114.5 4zm0 9h4a1.5 1.5 0 011.5 1.5v4a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-4a1.5 1.5 0 011.5-1.5z" fill="#335EEA" opacity=".3"/></g></svg>                </div>

                                <!-- Content -->
                                <div class="ms-4">

                                    <!-- Heading -->
                                    <h6 class="fw-bold text-uppercase text-primary mb-0">
                                        Components
                                    </h6>

                                    <!-- Text -->
                                    <p class="fs-sm text-gray-700 mb-0">
                                        Full list of components
                                    </p>

                                </div>

                            </a>
                            <a class="list-group-item" href="docs/changelog.html">

                                <!-- Icon -->
                                <div class="icon icon-sm text-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.857 2h7.88a1.5 1.5 0 01.968.355l4.764 4.029A1.5 1.5 0 0120 7.529v12.554c0 1.79-.02 1.917-1.857 1.917H5.857C4.02 22 4 21.874 4 20.083V3.917C4 2.127 4.02 2 5.857 2z" fill="#335EEA" opacity=".3"/><rect fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"/></g></svg>                </div>

                                <!-- Content -->
                                <div class="ms-4">

                                    <!-- Heading -->
                                    <h6 class="fw-bold text-uppercase text-primary mb-0">
                                        Changelog
                                    </h6>

                                    <!-- Text -->
                                    <p class="fs-sm text-gray-700 mb-0">
                                        Keep track of changes
                                    </p>

                                </div>

                                <!-- Badge -->
                                <span class="badge rounded-pill bg-primary-soft ms-auto">
                      2.2.0
                    </span>

                            </a>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Button -->
            <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
                Buy now
            </a>

        </div>

    </div>
</nav>

<!-- WELCOME -->
<section class="pt-4 pt-md-11">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">

                <!-- Image -->
                <img src="assets/img/illustrations/illustration-2.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="..." data-aos="fade-up" data-aos-delay="100">

            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

                <!-- Heading -->
                <h1 class="display-3 text-center text-md-start">
                    Welcome to <span class="text-primary">Landkit</span>. <br>
                    Develop anything.
                </h1>

                <!-- Text -->
                <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                    Build a beautiful, modern website with flexible Bootstrap components built from scratch.
                </p>

                <!-- Buttons -->
                <div class="text-center text-md-start">
                    <a href="overview.html" class="btn btn-primary shadow lift me-1">
                        View all pages <i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
                    </a>
                    <a href="docs/index.html" class="btn btn-primary-soft lift">
                        Documentation
                    </a>
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- FEATURES -->
<section class="py-8 py-md-11 border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4" data-aos="fade-up">

                <!-- Icon -->
                <div class="icon text-primary mb-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M7 3h10a4 4 0 110 8H7a4 4 0 110-8zm0 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA"/><path d="M7 13h10a4 4 0 110 8H7a4 4 0 110-8zm10 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA" opacity=".3"/></g></svg>            </div>

                <!-- Heading -->
                <h3>
                    Built for developers
                </h3>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-0">
                    Landkit is built to make your life easier. Variables, build tooling, documentation, and reusable components.
                </p>

            </div>
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">

                <!-- Icon -->
                <div class="icon text-primary mb-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.5 4h4A1.5 1.5 0 0111 5.5v1A1.5 1.5 0 019.5 8h-4A1.5 1.5 0 014 6.5v-1A1.5 1.5 0 015.5 4zm9 12h4a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-1a1.5 1.5 0 011.5-1.5z" fill="#335EEA"/><path d="M5.5 10h4a1.5 1.5 0 011.5 1.5v7A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-7A1.5 1.5 0 015.5 10zm9-6h4A1.5 1.5 0 0120 5.5v7a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-7A1.5 1.5 0 0114.5 4z" fill="#335EEA" opacity=".3"/></g></svg>            </div>

                <!-- Heading -->
                <h3>
                    Designed to be modern
                </h3>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-0">
                    Designed with the latest design trends in mind. Landkit feels modern, minimal, and beautiful.
                </p>

            </div>
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

                <!-- Icon -->
                <div class="icon text-primary mb-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2" height="16" rx="1"/></g></svg>            </div>

                <!-- Heading -->
                <h3>
                    Documentation for everything
                </h3>

                <!-- Text -->
                <p class="text-muted mb-0">
                    We've written extensive documentation for components and tools, so you never have to reverse engineer anything.
                </p>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- BRANDS -->
<section class="py-6 py-md-8 border-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                <!-- Brand -->
                <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                    <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M1447.629 301.83c0 28.119-22.658 50.76-50.777 50.76-28.118 0-50.76-22.641-50.76-50.76s21.87-50.76 50.76-50.76c28.915.78 50.777 23.43 50.777 50.76zm-209.316 102.317v12.5s-24.202-31.256-75.75-31.256c-85.121 0-151.517 64.828-151.517 154.638 0 89.037 65.615 154.638 151.517 154.638 52.328 0 75.75-32.02 75.75-32.02v13.271c0 6.25 4.697 10.923 10.939 10.923h63.252V393.177h-63.252c-6.242.024-10.939 5.5-10.939 10.97zm0 188.21c-11.703 17.189-35.14 32.028-63.251 32.028-49.98 0-88.258-31.24-88.258-84.356 0-53.11 38.277-84.349 88.258-84.349 27.338 0 52.328 15.62 63.251 32.02v104.658zm121.058-199.156h74.97v293.664h-74.97V393.2zm1119.954-7.818c-51.548 0-75.766 31.255-75.766 31.255V251.85h-74.97v435.015h63.267c6.25 0 10.923-5.47 10.923-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623s-66.38-154.669-150.722-154.669zm-12.499 238.214c-28.906 0-51.548-14.824-63.267-32.02V486.92c11.719-15.62 36.709-32.02 63.267-32.02 49.98 0 88.25 31.24 88.25 84.349 0 53.109-38.261 84.348-88.25 84.348zm-177.28-110.891v174.939h-74.985V521.288c0-48.412-15.62-67.949-57.767-67.949-22.642 0-46.08 11.72-60.942 28.907v204.626h-74.955V393.21h59.335c6.25 0 10.938 5.469 10.938 10.938v12.5c21.87-22.658 50.76-31.256 79.652-31.256 32.808 0 60.147 9.386 82.016 28.126 26.543 21.87 36.709 49.98 36.709 99.189zm-450.65-127.323c-51.532 0-75.75 31.255-75.75 31.255V251.85h-74.97v435.015h63.251c6.25 0 10.939-5.47 10.939-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623.78-89.045-65.6-154.669-150.737-154.669zm-12.498 238.214c-28.891 0-51.533-14.824-63.252-32.02V486.92c11.719-15.62 36.709-32.02 63.252-32.02 49.996 0 88.257 31.24 88.257 84.349 0 53.109-38.261 84.348-88.257 84.348zm-203.05-238.214c22.641 0 34.36 3.917 34.36 3.917v69.5s-62.48-21.088-101.52 23.438v205.399H1481.2V393.2h63.267c6.25 0 10.923 5.469 10.923 10.938v12.5c14.075-16.409 44.535-31.256 67.957-31.256zM844.705 660.306c-3.901-9.37-7.81-19.52-11.711-28.119-6.258-14.051-12.507-27.338-17.96-39.83l-.781-.78c-53.897-117.156-111.68-235.858-172.606-352.999l-2.34-4.696a1536.65 1536.65 0 01-18.734-36.71c-7.817-14.067-15.62-28.89-28.119-42.958-24.99-31.24-60.918-48.427-99.18-48.427-39.057 0-74.198 17.188-99.96 46.859-11.72 14.052-20.317 28.891-28.12 42.958a1695.173 1695.173 0 01-18.732 36.71l-2.349 4.696c-60.138 117.141-118.709 235.85-172.598 353l-.788 1.552c-5.462 12.514-11.719 25.786-17.968 39.83-3.901 8.597-7.803 17.968-11.704 28.118-10.158 28.892-13.287 56.23-9.37 84.357 8.59 58.578 47.632 107.763 101.529 129.647 20.309 8.598 41.398 12.5 63.26 12.5 6.249 0 14.051-.78 20.308-1.569 25.779-3.12 52.33-11.703 78.107-26.543 32.02-17.968 62.48-43.73 96.84-81.22 34.36 37.49 65.6 63.252 96.84 81.22 25.786 14.84 52.329 23.422 78.1 26.543 6.249.796 14.066 1.568 20.316 1.568 21.87 0 43.73-3.9 63.252-12.499 54.677-21.884 92.938-71.85 101.536-129.647 6.203-27.331 3.082-54.654-7.068-83.56zm-352.219 40.61c-42.178-53.109-69.517-103.09-78.88-145.252-3.9-17.968-4.688-33.588-2.34-47.647 1.553-12.5 6.25-23.438 12.499-32.808 14.84-21.074 39.83-34.36 68.729-34.36 28.907 0 54.677 12.498 68.736 34.36 6.25 9.37 10.931 20.316 12.507 32.808 2.333 14.067 1.553 30.46-2.348 47.647-9.402 41.383-36.74 91.37-78.903 145.252zm311.6 36.71c-5.46 40.61-32.8 75.765-71.06 91.385-18.742 7.802-39.058 10.15-59.352 7.802-19.52-2.348-39.057-8.598-59.35-20.3-28.119-15.636-56.23-39.83-89.038-75.767 51.54-63.252 82.78-121.058 94.5-172.59 5.469-24.218 6.257-46.08 3.9-66.397-3.113-19.52-10.15-37.489-21.081-53.109-24.226-35.156-64.843-55.45-110.127-55.45-45.283 0-85.901 21.09-110.111 55.45-10.93 15.62-17.968 33.588-21.09 53.11-3.12 20.316-2.348 42.958 3.902 66.395 11.71 51.533 43.73 110.112 94.491 173.371-32.02 35.929-60.919 60.147-89.037 75.766-20.31 11.72-39.822 17.969-59.343 20.302a124.96 124.96 0 01-59.359-7.803c-38.261-15.62-65.6-50.776-71.061-91.386-2.341-19.52-.788-39.042 7.03-60.91 2.332-7.819 6.249-15.62 10.15-24.991 5.47-12.499 11.703-25.786 17.96-39.057l.788-1.553c53.882-116.376 111.672-235.085 171.81-350.666l2.341-4.697c6.258-11.703 12.507-24.202 18.749-35.92 6.25-12.5 13.271-24.219 21.87-34.377 16.4-18.725 38.26-28.891 62.478-28.891 24.218 0 46.08 10.166 62.48 28.891 8.598 10.182 15.62 21.9 21.87 34.376 6.256 11.719 12.506 24.218 18.74 35.921l2.348 4.697a10341.109 10341.109 0 01171.038 351.446v.78c6.257 12.515 11.719 26.559 17.968 39.073 3.901 9.355 7.81 17.157 10.15 24.975 6.235 20.285 8.575 39.822 5.447 60.123z" fill="currentColor" fill-rule="nonzero"/></svg>            </div>

            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                <!-- Brand -->
                <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                    <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M326.558 759C247.442 759 170 702.045 170 573.476c0-128.987 77.442-185.105 156.558-185.105 38.93 0 69.489 10.051 91.256 24.29l-23.86 52.349c-14.652-10.47-36.42-17.17-58.187-17.17-47.72 0-91.255 37.69-91.255 124.799 0 87.108 44.79 125.636 91.255 125.636 21.768 0 43.535-6.7 58.186-17.17l23.861 53.605C395.209 749.787 365.488 759 326.558 759zm272.512 0c-100.884 0-156.558-79.989-156.558-185.524s55.255-185.105 156.558-185.105c100.883 0 156.558 79.151 156.558 185.105C755.628 679.011 699.953 759 599.07 759zm0-313.255c-56.093 0-83.721 50.255-83.721 126.894 0 76.638 27.628 127.312 83.72 127.312 56.094 0 83.722-50.674 83.722-127.312 0-76.639-27.628-126.894-83.721-126.894zm253.674-114.748c-23.86 0-43.116-18.427-43.116-41.042 0-22.614 19.256-41.041 43.116-41.041s43.116 18.427 43.116 41.041c0 22.615-19.674 41.042-43.116 41.042zm-36.418 64.493h72.837v355.972h-72.837V395.49zm358.325 355.972V514.008c0-41.46-25.116-67.425-74.511-67.425-26.373 0-50.652 4.606-65.303 10.47V751.88h-72V413.498c35.582-14.657 81.21-25.127 136.884-25.127 99.628 0 147.767 43.554 147.767 118.936v244.574h-72.837v-.42zm264.14 7.538c-46.047 0-91.675-11.307-119.721-25.127V233h72v171.704c17.163-7.957 44.79-14.658 69.488-14.658 91.675 0 154.047 66.169 154.047 175.054 0 134.432-69.489 193.9-175.814 193.9zM1448 446.583c-19.674 0-43.116 4.606-56.93 11.726v233.685c10.465 4.606 30.977 9.213 51.488 9.213 57.349 0 99.628-39.785 99.628-130.662.419-77.895-36.419-123.962-94.186-123.962zM1810.512 759c-102.14 0-154.047-41.46-154.047-111.817 0-99.253 105.488-116.842 213.07-122.705v-22.615c0-44.81-29.721-60.724-75.349-60.724-33.488 0-74.512 10.47-98.372 21.777l-18.419-49.418c28.465-12.563 76.605-25.127 124.326-25.127 84.977 0 136.884 33.084 136.884 121.03v224.472c-25.535 13.82-77.86 25.127-128.093 25.127zm59.441-186.361c-72.837 3.769-145.255 10.05-145.255 73.288 0 37.69 28.883 60.724 83.72 60.724 23.024 0 50.233-3.769 61.535-9.213v-124.8zM2101.023 759c-41.442 0-84.976-11.307-110.93-25.127l24.28-55.28c18.418 11.307 57.348 23.033 84.557 23.033 38.93 0 64.884-19.265 64.884-48.999 0-32.246-27.21-44.81-63.21-58.211-47.72-18.008-100.883-39.785-100.883-106.373 0-58.63 45.628-99.672 124.744-99.672 43.116 0 78.698 10.47 103.814 25.127l-22.605 50.255c-15.907-10.05-47.72-20.94-73.255-20.94-37.675 0-58.605 19.684-58.605 45.649 0 32.247 26.372 43.554 61.535 56.955 49.395 18.427 104.232 38.948 104.232 108.467C2239.163 717.12 2190.186 759 2101.023 759zm489.35-187.199l-236.513 33.084c7.117 64.075 48.977 96.322 108.838 96.322 35.581 0 74.093-8.795 98.372-21.777l20.93 54.024c-27.628 14.657-75.349 25.127-124.326 25.127-112.186 0-174.976-72.032-174.976-185.524 0-108.885 60.697-185.105 160.325-185.105 92.512 0 147.35 60.725 147.35 156.628.836 8.794.836 18.008 0 27.221zm-147.768-130.662c-55.256 0-91.675 42.297-92.93 116.423l172.465-23.87c-.838-61.982-32.233-92.553-79.535-92.553z" fill="currentColor" fill-rule="nonzero"/></svg>            </div>

            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                <!-- Brand -->
                <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                    <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M951.211 442.866c25.294 0 45.797-20.48 45.797-45.739 0-25.263-20.503-45.738-45.797-45.738-25.294 0-45.797 20.475-45.797 45.738 0 25.26 20.503 45.739 45.797 45.739zm1511.432 156.271c-6.967-4.891-12.345-5.702-16.808 3.797-76.919 166.334-206.54 83.33-193.664 90.636 28.751-13.132 104.37-73.682 92.94-157.289-6.94-51.095-50.864-73.76-97.486-65.644-81.381 14.166-111.32 101.806-96.078 179.397 2.667 13.325 7.432 24.315 12.193 35.08-91.965 74.669-128.486-66.842-132.63-83.753-.164-.905 71.01-60.137 90.805-201.281 20.748-147.928-26.516-174.864-74.847-174.023-89.436 1.556-113.603 188.124-81.135 343.615-2.72.707-15.375 7.706-35.71 8.49-14.632-45.97-77.156-86.266-93.519-70.738-40.954 38.842 9.932 114.782 45.737 120.738-21.51 132.267-156.021 99.51-130.982-66.2 43.803-81.215 77.117-201.975 71.173-274.877-2.106-25.81-21.219-60.39-64.443-58.675-83.139 3.284-92.177 189.904-82.43 322.356-.484-3.263-5.111 16.092-39.18 25.715-8.06-44.66-80.083-89.49-97.038-67.937-31.738 40.338 23.266 112.262 49.32 117.278-21.51 132.263-156.017 99.505-130.977-66.204 43.802-81.21 77.112-201.971 71.168-274.873-2.106-25.814-21.215-60.395-64.443-58.684-83.139 3.288-92.177 189.908-82.43 322.36-.489-3.314-5.224 16.679-40.683 26.142-1.187-57.942-73.474-84.511-90.839-66.023-30.948 32.956 7.088 100.574 42.275 117.282-21.508 132.263-156.016 99.505-130.977-66.204 43.803-81.21 77.117-201.971 71.17-274.873-2.103-25.814-21.216-60.395-64.445-58.684-83.134 3.288-89.824 199.29-80.078 331.738-27.383 117.14-119.214 263.426-107.284-29.616 1.179-20.557 2.465-28.361-7.8-36.058-7.691-5.982-25.181-3.103-34.742-2.866-11.62.465-14.534 7.253-17.102 17.514-5.982 26.496-7.057 52.181-7.912 87.227-.56 16.394-1.877 24.043-8.201 46.397-6.315 22.35-42.344 63.201-62.07 56.37-27.366-9.395-18.388-86.528-13.26-139.524 4.273-41.88-9.41-60.688-44.467-67.527-20.525-4.271-32.995-3.616-54.37-10.344-20.213-6.36-24.785-44.535-67.897-31.813-23.58 6.964-8.421 56.848-14.089 93.82-27.862 181.871-85.835 186.866-112.731 98.518 121.131-296.205 35.04-412.978-15.353-412.978-52.488 0-112.486 36.097-87.08 267.059-12.353-3.599-16.152-5.538-29.675-5.538-76.482 0-128.59 61.731-128.59 137.882 0 76.151 52.112 137.887 128.595 137.887 45.15 0 76.849-20.501 100.857-52.216 15.664 22.397 34.738 52.56 69.619 51.203 103.969-4.043 134.205-216.977 137.775-228.854 11.115 1.71 21.63 4.947 31.894 6.658 17.102 2.564 18.345 9.322 17.956 26.496-4.532 144.82 22.234 195.528 82.948 195.528 33.828 0 63.978-33.185 84.749-56.913 15.513 31.968 40.233 55.934 73.396 56.908 80.358 1.996 111.126-125.884 108.32-109.055-2.201 13.205 26.071 108.335 108.8 108.68 102.475.431 121.523-112.085 123.794-130.93.284-3.75.41-3.362 0 0l-.078 1.142c32.533-6.043 49.32-23.458 49.32-23.458s26.122 154.996 122.887 153.25c100.486-1.818 119.435-103.525 121.921-123.358.328-4.706.522-4.155 0 0l-.039.582c38.645-14.037 48.81-28.125 48.81-28.125s20.762 151.914 122.888 153.242c91.007 1.19 124.736-91.86 124.934-130.806 15.35.164 43.743-9.093 43.078-9.62 0 0 33.335 132.824 126.427 139.646 43.708 3.202 76.495-24.557 95.186-37.218 43.923 35.515 190.185 80.879 282.538-75.453 13.036-22.436-14.99-48.94-19.911-52.401zM400.883 712.64c-44.623 0-73.236-41.196-73.236-85.615 0-44.415 26.265-85.611 70.888-85.611 20.08 0 31.25 2.206 46.889 15.786 2.836 11.158 10.873 36.895 14.784 48.582 5.24 15.64 11.473 28.953 17.757 43.441-8.978 37.162-38.411 63.417-77.082 63.417zm108.739-154.134c-1.856-2.952-1.468-1.138-3.544-3.926-8.18-22.216-23.943-71.803-25.769-128.126-2.063-63.713 8.572-138.395 39.927-138.395 21.245 0 43.824 151.355-10.619 270.447h.005zm628.3-66.386c-5.033-37.808-5.297-206.358 35.23-201.716 22.376 9.05-14.188 168.097-35.23 201.716zm295.928 0c-5.033-37.808-5.296-206.358 35.23-201.716 22.377 9.05-14.188 168.097-35.23 201.716zm293.58 2.349c-5.037-37.813-5.296-206.362 35.226-201.72 22.376 9.05-14.188 168.1-35.226 201.72zm324.11-213.93c37.052-3.835 35.524 157.715-38.848 259.707-9.59-36.865-24.297-247.05 38.848-259.711v.004zm155.736 347.623c-11.9-60.02 18.85-99.44 50.55-103.763 11.08-1.767 27.136 5.4 30.34 18.799 5.265 25.25-.765 62.705-71.714 110.227.104.405-6.522-11.894-9.172-25.263h-.004z" fill="currentColor" fill-rule="nonzero"/></svg>            </div>

            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                <!-- Brand -->
                <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                    <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M273.497 198.251c-22.863 0-52.502 24.245-69.987 40.383-38.441 34.122-73.259 96.865-73.259 147.225 0 71.56 60.859 98.571 76.252 98.571 5.075 0 9.401-2.617 9.401-9.504 0-5.398-3.423-9.89-6.829-14.505-14.094-21.546-18.621-42.11-18.621-69.845 0-57.825 26.67-110.828 48.791-135.082 4.08-4.39 13.296-13.872 16.054-13.872 2.738 0 3.416 2.23 3.416 9.122l-2.57 378.481c0 59.167-17.072 82.67-17.072 96.602 0 6.121 2.65 7.71 7.71 7.71 23.959 0 47.835-29.202 54.6-39.852 20.976-36.232 26.12-64.515 26.12-146.097V229.55c0-8.609-2.414-12.33-10.592-17.638-11.96-7.595-25.664-13.66-43.414-13.66zm685.043 1.056c-11.268 0-16.086 5.891-16.619 24.12l-2.5 75.475-66.008-2.287c-4.004-.103-5.814 1.163-7.565 4.682-5.606 10.51-8.556 18.746-8.556 32.46 0 11.166 5.062 12.357 9.577 12.357l68.678 1.972-.21 144.197c0 30.583-19.3 70.258-53.543 103.256 0 0 2.945-9.963 2.777-20.415 0-29.588-19.041-56.4-44.427-75.373l-61.96-46.612c12.989-15.025 34.993-44.825 34.993-69.988 0-19.51-12.267-27.705-35.135-27.705-32.275 0-69.705 29.56-69.705 73.401 0 15.981 7.11 30.365 17.918 41.366-14.922 28.314-36.036 65.566-51.714 92.095-11.842 20.313-31.874 51.434-43.726 51.434-8.739 0-12.778-13.749-12.778-66.571 0-43.887 3.118-91.602 4.682-137.403 0-10.498-1.722-20.183-15.35-29.677-12.538-8.033-28.02-19.252-43.97-19.252-35.455 0-59.609 32.625-76.178 64.527-17.147 33.063-26.419 60.926-39.5 101.352l1.444-139.127c.446-9.92-2.06-13.772-9.997-17.147-10.298-4.367-25.456-9.402-38.901-9.402-11.237 0-12.603 4.845-12.603 16.651l-1.512 166.94-.172 64.387c0 58.05 7.27 67.73 41.716 67.73 19.072 0 25.18-2.24 25.559-18.093.523-10.485 5.538-35.888 12.322-61.364 19.842-75.195 43.353-134.67 83.891-180 4.227-4.4 7.495-2.825 6.83 3.413 0 0-6.41 101.765-6.41 143.389 0 74.03 11.392 112.658 48.227 112.658 36.15 0 71.656-46.45 91.038-77.806l62.175-103.994c40.288 34.33 68.4 60.946 68.4 93.326 0 20.125-12.697 39.815-32.039 39.815-24.171 0-39.614-25.49-55.94-25.49-13.552 0-30.944 26.16-30.944 41.016 0 14.024 30.603 33.863 85.513 33.863 81.059 0 124.542-55.628 150.638-117.23 4.995 73.114 34.127 115.822 79.562 115.822 29.803 0 64.247-37.653 79.915-83.647 0 0 1.547 11.94 13.446 36.402 16.38 31.944 41.28 46.611 72.208 46.611 38.468 0 71.371-23.32 91.459-62.452 3.045 29.652 27.943 62.307 67.98 62.307 25.133 0 48.046-19.257 63.086-50.976 0 0 19.482 52.388 75.83 52.388 31.65 0 69.127-29.32 78.084-50.623l.986 30.98-83.606 77.1c-24.277 23.566-50.1 57.425-50.1 94.913 0 47.677 45.015 75.092 84.63 75.092 41.178 0 68.5-26.088 83.468-47.948 18.836-28.285 26.792-81.596 26.792-133.708l-1.867-78.361c56.349-61.94 100.45-147.553 120.083-208.129l42.772-1.126c8.286-.558 7.873 2.705 6.727 7.535-7.517 31.767-14.082 67.743-14.082 103.571 0 59.192 13.634 84.95 33.231 106.001 17.04 17.638 33.984 23.587 51.82 23.587 34.88 0 56.776-28.804 63.72-46.962 16.38 31.944 40.509 46.821 71.43 46.821 38.47 0 71.374-23.32 91.464-62.452 3.045 29.652 27.938 62.307 67.978 62.307 29.912 0 47.262-17.26 60.906-49.78.275 10.46.678 21.612.986 32.068.36 5.41 4.685 8.833 8.556 10.245 12.715 4.812 23.876 7.22 33.901 7.22 26.147 0 31.825-5.37 31.825-22.463 0-28.19.826-72.733 8.836-108.496 8.504-35.606 21.337-75.914 39.044-103.96 1.594-2.897 5.5-2.136 5.67 1.375 2.543 60.007 6.557 161.589 22.32 187.885 7.779 12.543 19.808 21.685 37.809 21.685 8.44 0 18.788-3.6 21.436-5.844 2.683-2.092 4.034-4.417 3.871-8.729 0-76.711 23.924-150.978 47.88-200.91.659-1.482 2.526-1.597 2.463.352l-1.336 55.273c0 90.78 6.544 148.133 51.89 175.706a59.42 59.42 0 0029.184 7.565c23.2 0 44.239-12.958 54.637-33.796 8.47-16.194 16.406-47.363 16.406-65.018 0-6.834.08-17.958-11.123-17.958-6.144 0-9.835 4.53-11.304 11.371-3.571 14.83-6.502 27.548-12.042 42.21-5.296 13.997-13.198 22.147-22.568 22.147-11.006 0-16.591-8.66-19.785-14.014-14.044-21.421-15.17-70.63-15.17-111.704l3.381-105.718c0-8.747-3.651-19.215-17.147-26.932-9.06-5.215-31.972-15.033-46.011-15.033-13.018 0-19.32 7.373-24.012 18.196-8.811 19.44-38.255 95.688-46.15 157.68-.284 1.634-2.32 1.98-2.463-.105-4.104-43.839-6.21-96.66-6.164-132.295 0-10.773-2.635-26.173-25.488-36.153-11.106-4.608-20.293-7.428-31.512-7.428-13.919 0-16.912 6.812-21.897 15.838-15.768 29.135-26.671 67.128-43.015 115.05l.248-109.66c0-5.127-3.143-11.848-12.147-13.658-22.325-5.13-32.668-7.46-41.47-7.46-6.408 0-9.93 5.108-9.93 10.63l-1.198 186.973c-4.32 22.888-21.82 77.52-46.647 77.52-20.378 0-29.887-20.646-29.887-106.947l3.698-140.258c0-8.859-5.815-12.58-14.291-16.331-12.12-4.815-21.762-6.727-34.08-6.727-15.46 0-20.765 7.4-17.637 25.175-16.995-22.993-33.984-35.7-64-35.7-60.26 0-105.682 72.485-105.682 177.82-.591 29.537 6.546 58.894 6.546 58.894-5.453 24.515-18.27 44.497-35.978 44.497-22.34 0-36.577-31.584-36.577-86.321 0-54.9 20.91-116.82 20.91-133.602 0-19.512-12.784-31.856-35.415-31.856-11.336 0-53.39 9.54-74.95 12.67 0 0 2.433-10.268 2.253-18.341 0-19.24-9.027-31.296-31.437-31.296-27.385 0-47.492 19.554-47.492 52.915 0 14.967 8.62 28.816 20.032 36.256-14.812 61.782-38.896 107.728-74.387 159.057l2.99-207.848c0-6.757-1.799-10.954-15.034-16.091-6.997-3.023-18.401-6.514-32.776-6.514-20.833 0-19.454 14.877-18.34 26.016-9.533-16.902-30.4-36.965-62.596-36.965-87.732 0-114.667 133.784-101.459 228.794 0 11.584-11.311 52.703-36.86 52.703-20.377 0-29.887-20.646-29.887-106.947l3.734-140.258c0-8.861-5.856-12.582-14.332-16.331-12.12-4.815-21.726-6.727-34.044-6.727-15.463 0-20.768 7.4-17.64 25.173-16.994-22.993-34.019-35.701-64.036-35.701-60.26 0-106.284 66.291-106.284 171.622 0 40.208-34.62 101.564-58.897 101.564-13.486 0-27.845-24.757-27.845-88.01.067-43.116 5.948-189.893 5.948-189.893l84.738-1.374c4.044-.038 6.386-4.457 7.885-7.18 3.891-7.895 5.773-13.153 5.773-22.6 0-8.523-1.706-11.637-12.637-12.252l-84.457-5.07 3.593-78.679c.253-4.967-2.745-8.206-8.168-10.63-16.349-6.394-36.399-12.578-49.097-12.58zm256.462 206.157c22.593 0 45.518 20.605 45.518 93.711 0 92.047-33.533 134.872-59.32 134.872-24.173 0-42.524-34.121-42.524-101.143 0-67.746 17.92-127.44 56.326-127.44zm813.642 0c22.593 0 45.518 20.605 45.518 93.711 0 92.047-33.533 134.872-59.32 134.872-24.173 0-42.527-34.121-42.527-101.143.003-67.746 17.923-127.44 56.329-127.44zm-516.059.423c29.484 0 42.528 30.39 42.528 89.309 0 88.831-26.407 139.41-58.476 139.41-20.473 0-44.015-33.617-42.773-99.735 0-42.275 13.783-128.984 58.721-128.984zm49.917 297.162v34.99c0 116.106-30.938 135.924-55.798 135.924-9.42 0-32.492-7.115-32.492-35.839 0-40.152 41.98-85.83 55.025-99.945l33.265-35.13z" fill="currentColor" fill-rule="nonzero"/></svg>            </div>

            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                <!-- Brand -->
                <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                    <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M2140.629 749.008c29.915 2.896 59.815 6.007 89.644 9.225l65.859-162.412 62.6 177.393a7894.176 7894.176 0 0196.232 12.643l-109.75-311.073L2455 204.021h-92.981l-.967 1.33-59.307 146.273-52.068-147.581h-91.807l94.779 268.625-112.013 276.34h-.007zm-69.432-6.364V204.02h-91.77v531.064c30.609 2.36 61.233 4.892 91.77 7.552v.007zm-689.374-30.12c24.774 0 49.52.186 74.222.386V515.03h110.244v-84.267h-110.237V288.388h126.97v-84.367h-219.099v508.575c5.95 0 11.929-.093 17.9-.072zm-284.928 5.149a8147.87 8147.87 0 0191.82-2.746V288.402h85.779v-84.36h-263.377v84.36h85.792v429.27h-.014zm-701.862 56.793V453.568l108.662 307.94a7954.136 7954.136 0 01100.442-10.605V204.03h-88.055v332.396L398.828 204.03H307V786h.551c29.092-4.019 58.284-7.837 87.482-11.534zM922.625 288.38v-84.352h-219.12v537.757a7890.227 7890.227 0 01218.941-15.81v-84.432a7642.138 7642.138 0 00-126.805 8.445V515.066h110.244v-84.317H795.64V288.38h126.984zm842.27 349.13V204h-92.171v513.98c73.32 2.69 146.352 6.436 219.142 11.156v-84.481a8007.367 8007.367 0 00-126.97-7.151v.007z" fill="currentColor" fill-rule="nonzero"/></svg>            </div>

            </div>
            <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">

                <!-- Brand -->
                <div class="img-fluid text-gray-600 mb-2 mb-md-0">
                    <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M705.019 399.95c27.127 0 53.153-22.584 57.68-50.446 5.35-27.119-13.037-49.703-40.144-49.703-27.115 0-53.145 22.584-57.74 49.703-5.29 27.862 12.342 50.446 40.204 50.446zm1840.855 80.607h60.682c8.316 0 13.186-3.377 15.059-11.137a2716.172 2716.172 0 018.961-35.996c1.796-6.984-2.271-12.278-10.015-12.278h-59.879c4.314-17.161 21.107-72.876 21.107-109.2 0-72.54-61.598-134.244-149-134.244-98.708 0-162.925 66.243-162.925 159.455 0 27.188 10.144 58.879 22.717 78.537-5.411-.309-10.83-.462-16.25-.46-75.002 0-122.244 40.685-122.244 99.887 0 55.562 43.8 77.153 85.038 91.522 36.63 12.766 70.362 18.706 70.362 47.322 0 19.295-18.56 30.618-54.884 30.618-43.098 0-66.783-20.296-72.803-27.995 4.083-3.208 10.156-10.846 10.156-23.573 0-17.802-12.505-32.332-35.73-32.332-19.65 0-36.263 16.027-40.435 37.11-31.561 25.82-66.008 42.553-114.864 42.553-48.105 0-73.074-25.021-73.074-78.263 11.278 3.434 40.645 7.558 60.053 7.558 81.455 0 136.968-37.01 136.968-111.124 0-39.854-34.987-81.709-104.204-81.709h-.157c-91.038 0-142.032 57.668-164.297 121.098a1300.764 1300.764 0 00-18.747-4.374c4.98-14.07 8.554-30.375 8.554-48.452 0-31.328-19.4-68.272-71.314-68.272-36.162 0-70.463 23.685-94.237 59.185 5.915-23.157 9.837-38.578 10.091-39.611 1.55-6.057-.972-12.803-10.418-12.803h-53.282c-7.594 0-12.953 2.683-15.112 11.33-1.448 5.766-19.755 77.597-37.577 147.54-11.226 43.61-69.298 97.897-142.287 97.897-48.113 0-73.061-26.667-73.061-79.93 12.589 5.012 40.64 9.22 60.04 9.22 84.768 0 136.968-37.008 136.968-111.123 0-39.854-34.983-81.709-104.207-81.709h-.15c-102.513 0-165.31 79.623-175.95 169.902-4.426 37.53-36.101 89.064-70.439 89.064-16.729 0-26.058-10.507-26.058-28.346 0-15.405 10.846-53.076 22.733-100.286 3.983-15.793 10.027-39.886 16.73-66.581h55.73c8.297 0 13.163-3.377 15.047-11.137 2.668-11.173 7.562-30.666 8.95-35.996 1.796-6.984-2.247-12.278-10.015-12.278h-54.803s25.23-100.674 25.832-103.26c2.429-10.237-6.137-16.144-15.1-14.26 0 0-42.359 8.292-50.215 9.93-7.896 1.598-14.025 5.936-16.878 17.319l-22.435 90.27h-44.005c-8.296 0-13.175 3.386-15.035 11.13a3732.041 3732.041 0 01-8.95 36.003c-1.82 6.985 2.244 12.279 10.003 12.279h43.155c-.307 1.235-15.587 59.363-27.947 111.418-5.818 25.033-25.303 83.61-57.212 83.61-19.061 0-27.115-9.616-27.115-30.239 0-32.477 31.97-113.779 31.97-150.67 0-49.28-26.438-77.832-80.6-77.832-34.14 0-69.54 22.044-84.541 41.391 0 0 4.551-15.837 6.109-21.926 1.662-6.432-1.788-12.75-10.233-12.75H837.25c-11.27 0-14.385 6.024-16.04 12.65-.661 2.658-19.743 77.588-38.062 149.52-12.528 49.255-42.972 90.412-75.523 90.412-16.737 0-24.19-10.503-24.19-28.341 0-15.414 9.959-53.448 21.842-100.653 14.457-57.471 27.212-104.797 28.576-110.325 1.78-7.086-1.388-13.26-10.52-13.26H670.06c-9.652 0-13.098 5.065-15.132 12.102 0 0-14.994 56.76-30.871 119.948-11.532 45.858-24.267 92.567-24.267 114.513 0 39.164 17.585 68.684 65.928 68.684 37.312 0 66.84-18.92 89.387-43.03-3.312 13.05-5.427 21.31-5.64 22.153-1.946 7.46.41 14.054 9.2 14.054h54.516c9.49 0 13.138-3.817 15.12-12.093 1.908-7.897 42.625-168.05 42.625-168.05 10.761-43.02 37.38-71.508 74.829-71.508 17.758 0 33.127 11.758 31.348 34.608-1.977 25.138-32.292 115.446-32.292 155.081 0 30 11.124 68.813 67.598 68.813 38.494 0 66.832-18.456 87.438-42.275 7.546 25.28 27.535 42.275 64.201 42.275 60.937 0 97.667-36.141 119.247-72.444 17.907 42.178 59.847 72.424 121.348 72.424 62.684 0 111.193-26.425 145.57-62.349l-10.72 42.053c-1.95 7.574 1.347 13.53 10.24 13.53h53.957c7.388 0 12.645-3.757 14.562-11.517.948-3.809 8.744-33.938 19.755-76.75 21.059-81.922 54.904-166.915 105.762-166.915 17.935 0 25.29 10.027 25.29 25.824 0 7.449-2.162 13.884-4.03 17.334-24.65-4.898-44.482 7.271-44.482 33.592 0 17.148 18.045 32.736 42.4 32.736 18.61 0 33.995-4.564 46.265-12.824a1729.855 1729.855 0 0136.15 7.86 237.795 237.795 0 00-2.829 35.904c0 65.754 46.951 121.518 131.11 121.518 65.947 0 111.204-24.125 150.27-55.054 18.78 30.727 66.195 55.558 128.402 55.558 85.26 0 133.615-44.332 133.615-102.932 0-53.04-43.541-72.562-88.443-88.815-36.5-13.186-66.944-20.356-66.944-46.152 0-21.144 16.644-30.815 45.171-30.815 18.509 0 32.405 3.986 39.826 6.068 7.36 18.42 22.588 38.817 48.585 38.817 21.999 0 31.877-17.399 31.877-33.422 0-45.612-75.98-50.393-75.98-148.214 0-60.827 34.42-111.006 105.702-111.006 49.53 0 81.874 31.408 81.874 82.1 0 41.794-25.348 116.196-25.348 116.196h-43.086c-8.28 0-13.166 3.385-15.038 11.128a3072.974 3072.974 0 01-8.966 36.004c-1.812 6.985 2.251 12.279 10.015 12.279h42.069s-43.49 160.391-43.49 189.56c0 39.164 22.072 68.676 70.435 68.676 68.406 0 111.152-44.454 129.738-109.095 1.444-4.999-1.388-9.07-6.452-9.07h-26.099c-5.209 0-8.231 2.97-9.546 8.062-5.896 22.947-20.506 47.088-49.276 47.088-16.729 0-26.054-10.507-26.054-28.342 0-15.41 10.2-51.486 22.75-100.285 5.98-23.238 16.624-66.59 16.624-66.59zm-539.375-2.74c24.19 0 35.682 16.092 35.682 35.27 0 32.437-25.158 52.217-64.508 52.217-14.082 0-33.769-3.337-45.393-7.21 4.886-29.831 26.477-80.277 74.22-80.277zm-569.035 0c26.477 0 35.67 16.092 35.67 35.27 0 32.437-25.147 52.217-64.492 52.217-14.086 0-33.773-3.337-45.394-7.21 4.858-29.831 24.004-80.277 74.216-80.277zM390.64 177C218.03 177 131 300.753 131 403.952c0 62.486 23.657 118.077 74.397 138.788 8.32 3.406 15.773.117 18.186-9.095 1.679-6.375 5.649-22.454 7.42-29.156 2.438-9.112 1.49-12.307-5.225-20.248-14.63-17.258-23.98-39.6-23.98-71.246 0-91.812 68.692-174.005 178.872-174.005 97.566 0 151.163 59.613 151.163 139.227 0 104.753-46.354 193.164-115.18 193.164-38.005 0-66.456-31.433-57.337-69.983 10.919-46.023 32.07-95.694 32.07-128.914 0-29.738-15.962-54.542-48.996-54.542-38.853 0-70.064 40.193-70.064 94.036 0 34.294 11.588 57.487 11.588 57.487s-39.76 168.465-46.729 197.969c-13.88 58.757-2.09 130.786-1.093 138.061.589 4.31 6.129 5.335 8.638 2.082 3.584-4.676 49.853-61.804 65.59-118.89 4.45-16.165 25.553-99.859 25.553-99.859 12.621 24.077 49.513 45.285 88.746 45.285 116.785 0 196.024-106.472 196.024-248.988C620.643 277.363 529.367 177 390.64 177z" fill="currentColor" fill-rule="nonzero"/></svg>            </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- ABOUT -->
<section class="pt-8 pt-md-11 bg-gradient-light-white">
    <div class="container">
        <div class="row align-items-center justify-content-between mb-8 mb-md-11">
            <div class="col-12 col-md-6 order-md-2" data-aos="fade-left">

                <!-- Heading -->
                <h2>
                    The most useful resource <br>
                    <span class="text-success">ever created for <span data-typed='{"strings": ["developers.", "founders.", "designers."]}'></span></span>
                </h2>

                <!-- Text -->
                <p class="fs-lg text-muted mb-6">
                    Using Landkit to build your site means never worrying about designing another page or cross browser compatibility. Our ever-growing library of components and pre-designed layouts will make your life easier.
                </p>

                <!-- List -->
                <div class="row">
                    <div class="col-12 col-lg-6">

                        <!-- Item -->
                        <div class="d-flex">

                            <!-- Check -->
                            <div class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>

                            <!-- Text -->
                            <p class="text-success">
                                Lifetime updates
                            </p>

                        </div>

                        <!-- Item -->
                        <div class="d-flex">

                            <!-- Check -->
                            <div class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>

                            <p class="text-success mb-lg-0">
                                Tons of assets
                            </p>

                        </div>

                    </div>
                    <div class="col-12 col-lg-6 mb-6 mb-md-0">

                        <!-- Item -->
                        <div class="d-flex">

                            <!-- Check -->
                            <span class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                    <i class="fe fe-check"></i>
                  </span>

                            <!-- Text -->
                            <p class="text-success">
                                Tech support
                            </p>

                        </div>

                        <!-- Item -->
                        <div class="d-flex">

                            <!-- Check -->
                            <div class="badge badge-rounded-circle bg-success-soft me-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>

                            <!-- Text -->
                            <p class="text-success mb-0">
                                Integration ready
                            </p>

                        </div>

                    </div>
                </div> <!-- / .row -->

            </div>
            <div class="col-12 col-md-6 col-lg-5 order-md-1" data-aos="fade-right">

                <!-- Card -->
                <div class="card shadow-light-lg lift lift-lg">

                    <!-- Image -->
                    <img src="assets/img/photos/photo-2.jpg" alt="..." class="card-img-top">

                    <!-- Shape -->
                    <div class="position-relative">
                        <div class="shape shape-bottom shape-fluid-x text-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>                </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body">

                        <!-- Form -->
                        <form>
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-flush" id="cardName" placeholder="Name">
                                <label for="cardName">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control form-control-flush" id="cardEmail" placeholder="Email">
                                <label for="cardEmail">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control form-control-flush" id="cardPassword" placeholder="Password">
                                <label for="cardPassword">Password</label>
                            </div>
                            <div class="mt-6">
                                <button class="btn w-100 btn-success lift" type="submit">
                                    Download a sample
                                </button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row align-items-center">
            <div class="col-12 col-md-7 col-lg-6" data-aos="fade-right">

                <!-- Heading -->
                <h2>
                    We have lots of experience <br>
                    <span class="text-primary">building Bootstrap themes</span>.
                </h2>

                <!-- Text -->
                <p class="fs-lg text-muted mb-6">
                    We've built well over a dozen Bootstrap themes and sold tens of thousands of copies.
                </p>

                <!-- List -->
                <div class="d-flex">

                    <!-- Icon -->
                    <div class="icon text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M12 8H8a4 4 0 00-4 4v1a3 3 0 003 3v2a5 5 0 01-5-5v-1a6 6 0 016-6h4V4.728a.5.5 0 01.8-.4l2.856 2.133a.5.5 0 01-.001.802l-2.857 2.121A.5.5 0 0112 8.983V8z" fill="#335EEA"/><path d="M12.058 16H16a4 4 0 004-4v-1a3 3 0 00-3-3V6a5 5 0 015 5v1a6 6 0 01-6 6h-3.942v.983a.5.5 0 01-.798.401l-2.857-2.12a.5.5 0 010-.803l2.856-2.134a.5.5 0 01.8.401V16z" fill="#335EEA" opacity=".3"/></g></svg>              </div>

                    <div class="ms-5">

                        <!-- Heading -->
                        <h4 class="mb-1">
                            Bootstrap users since the beginning
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-6">
                            We've been developing with Bootstrap since it was publicly released in 2011.
                        </p>

                    </div>

                </div>
                <div class="d-flex">

                    <!-- Icon -->
                    <div class="icon text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2" height="16" rx="1"/></g></svg>              </div>

                    <div class="ms-5">

                        <!-- Heading -->
                        <h4 class="mb-1">
                            Deep understanding of Bootstrap
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-6 mb-md-0">
                            We've watched Bootstrap grow up over the years and understand it better than almost anyone.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-12 col-md-5 col-lg-6">

                <div class="w-md-150 w-lg-130 position-relative" data-aos="fade-left">

                    <!-- Shape -->
                    <div class="shape shape-fluid-y shape-blur-4 text-gray-200">
                        <svg viewBox="0 0 803 662" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M207.979 612.772l1.346-.686a27.64 27.64 0 01-1.764-.134l.418.82zm229.248-123.424l-.897.456c.99-.035.302.316.897-.456zm-172.982 89.124c.519-.921.058-.593.036-1.004-.016.336-.024.669-.036 1.004zm72.053-36.713c.02-.339.035-.675.055-1.014-.53.082-1.055.163-1.566.282.51.257 1.001.476 1.511.732zm-2.25 1.147l-.608-1.193c-.248.268-.469.568-.695.871.434.107.865.216 1.303.322zm-107.79 53.419l-.904.461c.994-.037.309.312.904-.461zm55.788-27.44c1.092-.744.458.283 1.161-1.06.225-.303.451-.605.695-.871-.831.236-1.651.466-2.463.739l.607 1.192zm-53.742 25.882c.161-.41.31-.862.478-1.276l-.896.457.418.819zm-13.482 5.837c-.015.336-.016.712-.032 1.049.523-.97.033-.58.032-1.049zm105.623-54.334c1.371.85 1.495.974 2.131 1.964.618-.643 1.24-1.289 1.851-1.928-.594-.073-1.181-.102-1.764-.134.312-1.66-.773-.497-2.218.098zm-46.215 25.096l.209.41c1.781-.954.539-.275 2.045-1.558a28.897 28.897 0 01-.289 1.648c2.072-1.478 1.282-1.263 1.672-3.385-1.029.196-2.066.396-3.114.554.168 1.885.444.854-.523 2.331zm-54.277 28.172c-.189-.748-.401-1.532-.597-2.276l.147 2.505.45-.229zm36.99-20.912c.549-.937.052-.543.033-1.049.003.374-.017.712-.033 1.049zm217.314-111.243l.442-.226c-.142.448-.31.863-.478 1.277.019-.339.035-.675.036-1.051zm-.105 3.15c2.267-1.765 2.4-1.504 1.243-4.246-.809.271-1.632.503-2.441.774.125 2.424.935 1.448 1.198 3.472zm-7.619 2.85c.02-.338.017-.712.036-1.051.804.107 1.616.21 2.427.312-.831.236-1.658.47-2.463.739zm-2.913.968c-.282-.185-.586-.405-.868-.59l.904-.461c-.019.339-.016.713-.036 1.051zm.775-2.929c-.616 1.769-4.132 3.044-5.488 4.815.494.592.984 1.187 1.475 1.782 2.179-1.674 1.766-1.416 4.054-2.066a29.59 29.59 0 01-1.504-.735c1.407-.201 2.813-.401 4.208-.643-.868-.214-1.755-.466-2.616-.684 1.616-.167 3.247-.294 4.87-.465.392-1.419.178-.277-.164-1.417.168-.414.318-.866.486-1.28 1.129 1.02 1.029 1.118 2.375 1.323l-1.234-2.421c1.53.629.306-.062 1.286 1.41l1.382-1.737c-5.082.103-5.656 1.662-9.13 2.118zm-63.096 33.135c-.425 1.014-.379.193-.852-.551l-1.8.917c.023 1.49.265.475-.297 1.652.989.857-.241.686 1.53.769-.015.337-.035.675-.032 1.049.486-1.28.965-2.556 1.451-3.836zm-28.775 13.676c-1.383 1.362-2.75 2.762-4.132 4.123l-.626-1.229c-.113 1.277-.241 2.515-.342 3.787.678-.205.608-.498.643.141 1.662-1.832 1.13-.622.534-2.289 1.597-.251 1.494-.949 3.331-.149 3.657-1.347 3.951-1.027 3.215-3.703 1.547.902.811 1.417 2.186.951 0 0 .583.032.486-1.28.804.107 1.615.209 2.408.275-.121-1.018-.957-.498.044-1.008-.688-2.84-4.905-.551-7.747.381zm-6.594 4.861c-.362-.332-.719-.665-1.062-.96l.608 1.192.454-.232zm-34.386 16.02l1.234 2.421-1.941-1.592c-.507.117-1.036.2-1.547.319.243 1.847-.088 1.077 1 3.057l-.45.229-1.707-2.227c-1.713.638-1.853.85-4.244 1.693.085 1.693-.163.599-1.611 1.29 1.39.512 2.769.982 4.159 1.494.659-1.18.726-1.637.763-2.97l.447-.227c.33 1.614.614.672-.27 1.686.357.334.719.666 1.057.962 1.329-1.005.9-1.021 2.463-.738.696-1.246 1.69-1.565 2.576-3.847-.133-.636-.249-1.233-.382-1.87-.51.12-1.036.2-1.547.32zm-13.839 9.584c-.946-.643-.628-1.04-1.921-1.554a162.294 162.294 0 00-.358 3.748c2.319.883.017-.15 2.652-.366-.795-.44-1.587-.881-2.382-1.32 1.04.174 2.057.313 3.089.491.934-1.79-.446-1.087 1.592-1.327-.113-1.867-.764-.691.068-2.1-.361-.332-.718-.666-1.061-.961-1.627 1.956-.937 1.838-1.679 3.389zm-20.261 10.324l-.626-1.229 1.321.359-.695.87zm15.825-10.128c-.47 1.366-.048-.022-1.591 1.327-1.124.948-1.019.566-.511 2.325-2.134-.086-.647-.092-2.255 1.149a125.45 125.45 0 00-.147-2.506c-.652.192-1.331.35-1.99.545a28.78 28.78 0 00-.289 1.649c-1.584-.46-2.143.575-3.46 2.231.019-.009.045.025.06.017a8.354 8.354 0 01-.133.068c-.463.564-.999 1.213-1.699 1.898.676-1.846-.522-.766 1.699-1.898.029-.015.044-.069.073-.085-2.296-.847-3.782-.231-3.295 1.21-1.974-.167-.457.75-1.958-.503-4.63 2.969-3.599 2.068-6.184 5.684l-.121-2.472-2.25 1.147a66.853 66.853 0 00-1.647 2.34s-7.858 3.3-9.426 3.771c-.15.452-.318.866-.487 1.28.659.18 1.322.359 1.981.54.361.332.718.665 1.061.96.172-1.308 0-.845-.374-1.827 1.124-.526 2.515-.812 2.496-1.788 1.501.455.712.294 1.932 1.549 3.747-3.129 1.785-2.41 6.06-2.571-.547-.706-1.117-1.448-1.687-2.19 4.194 1.382 4.542-1.282 6.638-.332.391-1.56.251-.363-.575-2.242 2.933.524 9.686-3.95 10.279-3.219.503-1.054.272-1.875.775-2.929.027 2.286 6.912-1.692 9.13-2.118-.116-.598-.249-1.234-.366-1.832-.586-.405-1.153-.773-1.739-1.178zm-48.378 24.181c-.015.336-.035.675-.044 1.007.247.016.475-.007.702-.029.071-.082.126-.204.203-.291-.443-.713.413-.304-.861-.687zm185.187-90.791c0-.376.016-.713.036-1.051l.442-.226c-.157.409-.329.825-.478 1.277zM427.8 493.119l-.209-.41.937-1.51-.728 1.92zm-6.992 4.079c-.06-.486-.116-.974-.176-1.459l1.522.772-1.346.687zm-1.351.687c-.01-.37.01-.708.029-1.047l.45-.229c-.168.414-.337.829-.479 1.276zm-8.53 3.314l-.417-.819c.792.534.499-.114.417.819zm44.207-24.588c.752 1.071.905 1.603.345 2.921.271-1.593-.349-.574-1.764-.134.526-.456 1.064-.871 1.591-1.327-.282-.185-.567-.368-.871-.588-2.747 1.681-1.142 1.051-2.521 2.833.016-.337.017-.713.025-1.046-1.874-.405-.979 1.766-2.218.098l-.72 1.916c-1.726 1.302-.559 1.082-2.426-.312-2.613 1.19-1.729 1.021-4.245 1.693-.261.978-.522 1.955-.775 2.929 1.263-.409.048-.494 1.559-.278-2.957 1.507-1.397-.462-4.263 1.656.321-.492.619-1.02.932-1.508.016-.337.036-.675.033-1.049-.507.118-1.029.196-1.536.314-1.668 2.116-4.627 3.296-8.559 4.361.939 1.117.961 1.528-.113 3.108.101-.897.213-1.798.303-2.735-1.908 1.019-2.154.158-2.287 2.197l-.607-1.192c-4.389 5.051-9.687 5.357-15.153 9.222.096-.565.188-1.128.289-1.649a196.854 196.854 0 00-3.444 3.256c-.231-.023-1.864-.129-1.141 1.098l-3.276-.865a9.837 9.837 0 00-.687.867c1.5.221.289.134 1.536-.314-.394.717-.787 1.434-1.174 2.147-.056-.488-.116-.973-.172-1.461-2.216 2.162.169 1.509-2.564 3.887.357.334.718.666 1.057.963 1.591-1.374 4.958-3.512 5.211-3.125 1.435-1.34.687-1.475.523-2.33l1.8-.918c-.299 1.373-.093.939-1.174 2.147 1.734.618 1.24.025 3.754-.411-1.897-1.379-.111-.788-.33-2.882l.897-.457 1.025 2.012c1.731-1.211 1.773-1.091 1.438-2.751 2.293-.887 8.859-.103 9.913-5.051l.446-.227c-.036.675-.045 1.383-.08 2.058 1.94-.753.475-.805 2.009-.507-.217-1.344-.184-.61-1.27-1.37 2.934-.651 2.997-1.199 5.774-.925.169-.414.33-.825.498-1.239 1.119-2.448.468-.849 3.608-1.839a28.831 28.831 0 00-1.775-.127c2.854-1.36 6.911-2.63 9.375-2.759.109-.9.221-1.802.322-2.698 4.412.52 9.861-5.494 12.742-3.959.775-1.568.829-.938.112-3.107.586.405 1.153.773 1.739 1.178.215-1.657-.706-1.423-1.208-3.466-.84.569-1.668 1.178-2.503 1.745zm-178.131 91.278l.447-.228c-.354-.336-.693-.632-1.054-.964-.016.336-.036.675-.052 1.011.225.074.453.145.659.181zM486.947 458.9c-2.343 1.756-1.937 1.55-4.505 2.295.707 1.47.645.328-.08 2.058-.06-.485-.098-.936-.158-1.421-2.212 1.69-2.339 2.13-4.504 2.295-.486.904-.956 1.848-1.434 2.748l.835 1.64c1.531-.546 2.291-.699 3.392-2.245.92-1.172.256-.177-.627-1.229 2.15.265 1.292-.095 2.391 1.363 2.403-3.008 3.064-4.893 4.654-6.454 0-.375.016-.712.036-1.05zM261.001 576.558l1.801-.917c-1.09 1.447-.016.852-1.801.917zm-2.225.102l.454-.232c.358.334.719.666 1.077 1-1.291-.28-.331.169-1.531-.768zm13.723-6.476c-.938.431-.098.003-.487 1.28l.418.82a126.846 126.846 0 01-1.941-1.592l-2.25 1.146c.51.256 1.02.513 1.523.773-2.348.633-1.143-.028-2.697 1.374.101-.896.213-1.798.322-2.698-.557.847-1.156 1.668-1.635 2.475.046.071.117.175.2.273-.13.02-.253.036-.403.018-.431.736-.742 1.458-.77 2.129-1.714-.769-1.254-1.144-2.636-.722-1.198-.328-1.993.171-3.765.417-.227 2.931.578 1.724-.808 3.978-1.909-.998-.602-1.429-1.94-1.592l-1.303-.322c-.688.867-1.402 1.7-2.089 2.566-.419-.443-.852-.926-1.27-1.37-.282 1.129-.439 1.115-1.193 2.109 1.611.634 1.238.214 1.523.773 1.249.63 7.873-1.9 12.983-4.551l.011-.006-.011.006c3.455-1.808 6.227-3.642 6.14-4.677 1.615.678.815.617 1.984.538.891-1.111.896.012.72-1.916 1.095-.793.832-.095 1.383-1.737-1.599.017-.592-.167-2.009.508zm-24.316 12.389c-4.02-.11-4.838 3.544-7.366 2.252-.393.341-.771.721-1.138 1.096l1.234 2.421c.351-.038.728-.042 1.105-.047l-1.044-2.049c1.53.629.306-.062 1.286 1.41.816-1.636.908.053.723-1.917 1.026.697 1.386-.049.627 1.229l.209.41c1.782-1.753 1.153-.541.522-2.331 2.218-.098.901-.365 1.728 1.184 2.022-.842 1.992-1.249 3.557-.827 1.639-2.806-.931-1.027 2.089-2.566-1.447-.623-2.901-1.243-4.348-1.867l.816 1.602zm-52.641 25.837c.511-.119 1.029-.196 1.54-.315l.505-1.243c-.526.08-1.056.162-1.566.282l-.479 1.276zm30.17-15.372c.226-1.148.027-.812-.173-1.461.057.487.117.973.173 1.461zm137.216-72.496c.136.634.249 1.233.385 1.868.214-1.188.772-1.05-.385-1.868zm-147.78 77.362c.374-.378.752-.758 1.145-1.1-1.214-.929-.228-.493-1.53-.768.285.183.586.405.871.588l-1.775-.128c.437.481.851.927 1.289 1.408zM504.54 448.903c-2.534.728-2.343.771-1.617 2.372-.336.5-8.912 3.134-9.185 3.132-.331 1.154-5.623 6.197-7.358 7.831.282.185.586.406.868.591-.245.265-.47.567-.695.87 3.347-2.644 3.409-2.864 5.469-4.852-.168.414-.318.866-.479 1.276 1.732-1.586 1.535-1.016 1.23-3.16 3.933-1.3 4.681-1.634 7.113-1.606.537-1.494.715-.694.333-2.704l.893-.455c.06.486.108.93.164 1.418 1.624-.124 3.242-1.933 5.003-3.534.937.836.694-.542 1.382-1.737-1.33-.026-2.652-.01-3.982-.036.301.222.587.405.861.594zm-78.809 40.155c.549-.937.033-.58.033-1.049.003.374-.017.712-.033 1.049zm-149.274 75.543l-.209-.41-1.346.686c1.438.487.039.215 1.555-.276zm233.736-119.095a18.365 18.365 0 01-.871-.588l.417.82c-2.077.824-1.779.249-1.383 1.736l-.903.461c2.793.36 3.688-1.129 4.54-3.346l2.845 1.132-.418-.82c.226-.302.47-.568.688-.867-2.437-1.011-3.083-.634-4.915 1.472zM312.036 546.473l-1.315-.363c.354.336.712.67 1.073 1.002.073-.225.169-.414.242-.639zm-4.505 2.295c.169-.414.337-.829.486-1.28l-1.052.536a2.78 2.78 0 01-.076.32l.642.424zm208.36-107.666l-.992 2.523c.943-1.56.768.312 1.285 1.41 1.743-2.484 1.834-1.873 1.053-4.619l-1.346.686zm-25.223 12.852c.041.448.101.934.157 1.421 1.205-1.552.679-.018.739-1.878l-.896.457zm-31.525 16.062c-.015.336-.035.675-.051 1.011.678-.158 1.357-.315 2.009-.507l-.607-1.192-1.351.688zm-16.056 9.683c.698-.497 1.366-1.025 2.045-1.559l-1.302-.321-.707.829c-.001.376-.017.712-.036 1.051zm-124.45 61.909l.816 1.601c.37-.376.764-.717 1.141-1.097-.662-.179-1.321-.359-1.957-.504zm-18.018 9.18c1.397.508 1.415.405 3.311-.185l-1.112.05c.363-1.64-1.45-.059-2.199.135zm197.948-101.376l2.199-.135-.189-.372c-.679.158-1.35.312-2.01.507zm-18.31 10.831c.095-.189.168-.414.245-.64l-1.303-.322c-.095.189-.168.414-.245.641l.19.372 1.113-.051zm-7.363 2.25c-.019.338-.035.675-.055 1.014.755-.009 1.49-.055 2.226-.102-1.511-.638-.759-.881-2.171-.912zm-149.57 77.196l1.357-.692-1.756-.091.399.783zm-8.131 5.175c-.055-1.286-.423-.207.479-1.277-.434-.107-.868-.214-1.295-.325-.244.265-.469.568-.695.87 1.184.898.232.492 1.511.732zm-27.228 13.357l.443-.226c-.362-.332-.693-.632-1.05-.966l.607 1.192zm206.793-107.384c-.244.265-.473.569-.699.872l1.306.32c.386-.337.764-.717 1.157-1.059-.602-.068-1.188-.098-1.764-.133zM276.336 562.129c.993-.037.301.315.896-.457l-.896.457zm-13.06 6.654c-.188.753-.346 1.537-.534 2.29 1.301-1.649.745-1.224.534-2.29zm-67.581 35.467c-1.609 1.477-1.334.914-1.438 2.75l1.836-1.968c.089-.561.204-1.089.285-1.647-.518.076-1.044.157-1.555.276.282.185.567.368.872.589zm65.99-34.14l1.346-.686c-.453-.145-.88-.256-1.314-.363-.016.337-.036.675-.032 1.049zm-68.871 34.059l-.695.87c.415.446.852.927 1.266 1.373.288-1.32.498-1.239-.571-2.243zm33.569-17.621c-.019.339-.016.713-.036 1.051l.904-.46c-.282-.185-.586-.406-.868-.591zm-9.912 5.051l-1.801.917c.679-.158 1.338-.353 2.009-.507l-.208-.41zm129.737-67.137l-.904.461c.989-.035.328.349.904-.461zm-83.803 43.732c.552-.938.036-.581.036-1.05-.001.375-.017.712-.036 1.05zm-7.929 5.589c1.672-1.462.989-1.02 3.399-2.248-2.063-.638-1.747.139-2.635-.722l-.238.121-.65.472c.036.779.072 1.558.124 2.377zm264.928-132.454c.015-.336.035-.675.032-1.048l.454-.232c-.15.452-.318.866-.486 1.28zm1.866-1.983l.038.075c.274.189.522.344.8.531-1.091-.43-.697-.209-.8-.531-.027-.034-.045-.024-.072-.058l.034-.017a1.661 1.661 0 00-.242-.392c-1.103.42-2.235.81-3.337 1.23.952 1.345.346.762.121 2.472 2.676-.19 2.716-1.336 6.06-2.571-.218-2-.964-.917.314-2.741.313.873-.467.52.417.82-.379 1.554 1.808.017 3.114-.555.415-1.384.353-.226-.626-1.229l6.305-3.212c-.709-.296-1.447-.624-2.167-.914 2.272-.782 2.21-.61 4.472-1.246l.278-1.69c-1.189-.098-2.358-.16-3.539-.262-.193 3.899-8.535 7.821-11.17 10.29zm.09-3.096l-.209-.41-1.775-.127 1.53.768.454-.231zM263.579 566.048c.219.78.408 1.528.601 2.274.5-.113 1.029-.196 1.555-.276l-2.156-1.998zm273.629-139.891c.444 3.106-1.253.31.085 3.523l1.358-.691c.214-.297.443-.602.684-.865-.282-.185-.583-.407-.868-.59-.198-1.307-.123-.829-1.259-1.377zm-156.274 79.626l-.904.461c.974-.074.309.312.904-.461zm-102.38 56.248c1.32.219 1.372-.23 3.106-.598a278.443 278.443 0 00-.55-3.286 94.154 94.154 0 00-3.304.182c-.71 1.347-.068.317-1.164 1.063.972 1.006 3.27.164 1.912 2.639zm-21.759 8.506c1.291.28.335-.171 1.53.768 1.161-.544.506-.304 2.009-.507-1.235-1.295-1.867-1.864-2.847-1.928-.167.132-.318.303-.489.437-.071.412-.132.818-.203 1.23zm139.69-73.194l.608 1.192c-.119-1.207.875-1.243-.608-1.192zm68.398-33.865l.454-.231c-.342-.295-.7-.629-1.061-.961l.607 1.192zm-242.02 122.846c.523-.97.033-.58.033-1.049-.016.337-.036.675-.033 1.049zm21.648-12.062l-.447.227c-.888 2.33.092 1.221.539 3.292.622-.645 1.214-1.322 1.836-1.968-.728-1.881-.138-1.9-1.687-2.19-.036.675-.052 1.387-.08 2.058-.038-.45-.105-.932-.161-1.419zm295.125-154.457c.51.257 1.02.513 1.512.732-.982-.86.256-.647-1.512-.732zm29.061-15.323c.869.214 1.756.466 2.617.685-4.828.676-5.764 3.077-9.191 4.213-.367 1.36.551 1.221-.329 2.702 2.612.64 7.663-6.486 11.018-5.098.536-2.479-.35-1.605 1.869-3.017-2.78-1.023-2.394-.422-5.984.515zm-2.459.737c-.064-.061-.117-.128-.158-.154a.17.17 0 00-.131.019c.094.046.181.096.289.135zm30.082-18.894c.993-.037.328.349.904-.46l-.904.46zm6.421-6.322c.064.484.105.932.161 1.42a19.772 19.772 0 001.559-.278c-.69-1.667-.372-.28-.366-1.832l-1.354.69zm29.455-20.122l-.896.456c-.016.337-.036.675-.033 1.049 1.074-1.204.54-.274.929-1.505zm.278-1.69l-.278 1.69c.53-.082 1.037-.2 1.567-.282-.924-1.501.132-.678-1.289-1.408zm45.54-30.853c.226-.303.47-.568.696-.87.377-.005.735-.047 1.112-.051l-1.984-.538c.06.486.116.973.176 1.459zm80.916-86.135c.619-1.019 1.56-1.076.364-1.64-.022.058-.059.077-.1.098-.09.514-.175 1.027-.264 1.542zM116.404 565.536l-.904.461c.993-.037.309.311.904-.461zm-2.305 2.16l.505-1.243-.904.461.399.782zm-.696.871l-.398-.782-.896.456c.434.107.868.215 1.294.326zm-13.726-11.354c1.001-.04.309.312.904-.46l-.904.46zm687.778-365.784c.386-1.182.963-.538-.157-1.422.06.486.116.973.157 1.422zM89.23 546.723l-.627-1.229-1.35.688c.06.485.116.973.176 1.458.226-.302.451-.604.696-.87.358-.041.735-.046 1.105-.047zm-4.862-6.204c-.526.081-1.048.159-1.555.277 1.224.408.133.307 1.764.133l-.209-.41zm-2.042 1.557l.45-.23c-.357-.334-.719-.666-1.076-1l.626 1.23zm1.207-3.196c-.093.563-.185 1.127-.27 1.687.633-1.074 1.642-1.072.27-1.687zm-1.347.686c-.019.339-.016.713-.036 1.051l.904-.46c-.282-.185-.586-.406-.868-.591zm680.089-349.15l.102.089c.037-.066.022-.058-.102-.089zM80.567 535.277c-.452 1.309.072.526-1.39 1.74l.209.41.904-.461c.434.108.887.252 1.321.36.013-.335.01-.709.029-1.048l.278-1.689-1.351.688zM35.203 426.206c.003.374-.017.712-.033 1.049.282.185.586.405.868.59.218-.298.462-.564.687-.866-.044-.4-.096-.796-.148-1.192l-.563.006-.811.413zm-.21-.41l-.903.461c.993-.037.328.349.904-.461zm-1.928-1.551l-1.8.917c.285.184.586.406.871.589.31-.486.612-1.016.929-1.506zm-1.076-1c-.001.376-.017.713-.037 1.051l.904-.46c-.282-.185-.567-.369-.868-.591zm735.675-228.348c-2.364-.954-3.221-2.535-5.287-4.392-.026.06-.077.18-.086.513l-.417-.82c.187.139.307.172.401.218a19.024 19.024 0 00-2.33-1.769c2.984-1.004 4.048 1.222 6.188-.103.294 2.103.745.653-.538 2.292l2.251-1.147c.855 1.301 1.687 2.566 2.523 3.83-2.011.274-1.046-.03-2.705 1.378zm-9.458-7.429c.526-.08 1.037-.199 1.563-.279-1.289.938-.099.707-1.563.279zm-8.166 24.057c-.225.303-.459.562-.684.865l-.871-.589.245-.641c.377-.004.743-.003 1.101-.045l.209.41zm-3.147 1.604c.02-.339.036-.676.033-1.049l.446-.228c-.15.452-.31.862-.479 1.277zm-3.81 1.424l.045-1.007.453-.232c-.168.415-.336.829-.498 1.239zm-16.008-3.574c.02-.339.036-.675.037-1.051.019.554.55.142-.037 1.051zm16.067 44.885c.205-1.465.155-.267-.161-1.42l.45-.229c.123 1.298.678.171-.289 1.649zm-85.779-152.765c-7.552-1.782-13.137-11.84-20.215-9.595.245-.641.49-1.282.731-1.921-2.715.492-1.772.246-4.435.195-1.138-1.156-.045-.915-1.025-2.011 2.541-.31 24.972 6.702 27.71 9.859 0 0-.912 2.247-2.766 3.473zm.655.183c1.272.243.312-.206 1.511.731-.51-.256-1.001-.475-1.511-.731zm-14.582-6.365l-.626-1.23.443-.225c.067.481.123.969.183 1.454zm-12.166-6.049l-.627-1.23c.514.255 1.02.513 1.534.768l-.907.462zm87.758 177.799c.244-.266.47-.568.695-.871l1.347-.686c-.557 1.316-.408 1.334-2.042 1.557zM628.063 87.904c-.922 1.408-.069.692-1.8.917l1.8-.917zM669.7 331.058l-.453.231c-.113-.599-.249-1.234-.363-1.833.206.036.434.107.659.181.041.448.097.935.157 1.421zm-1.8.917l-.417-.819c.788.536.499-.114.417.819zm.173 1.461c.019-.339.016-.713.036-1.051.019.553.539.101-.036 1.051zm-1.555.276l-.836-1.639c.434.483.852.927 1.286 1.41l-.45.229zm-1.592 1.327c-.778-.073-.248-.624-1.559.279.085-.56.177-1.124.27-1.687.678-.158 1.357-.316 2.009-.507l-.72 1.915zm-.245.641c.511-.119 1.037-.2 1.559-.278-1.285.936-.091.703-1.559.278zm-7.498 5.322c-1.413-.594-.625-.151-1.27-1.371.438.106.872.213 1.325.358-.019.338-.035.674-.055 1.013zm-1.74 5.485l-1.801.918c-.265-.898-.522-1.752-.791-2.647-1.088.742-.847.572-1.833 1.966-.082-1.459-.132-1.059-1.072-1.002-.154-1.892.109-.853 1.591-1.327.252-1.63.189-.613-.571-2.243 2.047.412 2.092.905 3.243 1.914-.736.046-1.471.093-2.218.098 1.146.777 2.299 1.55 3.452 2.323zm-2.741 2.429l-.417-.82c.792.535.503-.115.417.82zm-3.206-2.965c-1.274.462-2.897 2.04-2.133 3.621-2.028-.844-.956-2.188-1.388-3.845 1.12-.054.937-.101 1.548-.319a89.274 89.274 0 01-.853-.551c.359-.042.728-.042 1.106-.047.225-.302.45-.605.695-.87l1.025 2.011zm.023 5.619c-1.427-.493-.992-.714-1.948-1.588l2.021-.513c-.021.714-.056 1.389-.073 2.101zm-1.138 1.096c-1.434-.067-2.641.361-4.263 1.656.764-2.031.688-2.181 1.862-3.013l-.418-.819 1.984.537.835 1.639zm-6.364-1.356c-1.402-.552-.359-.051-1.08-.998-.47.568-.913 1.169-1.383 1.737L638.51 350l1.35-.688c.963.401 1.908.765 2.845 1.132-1.058.398-.439-.152-.688.866zm1.406 3.882c-3.641 4.202-10.587 4.785-11.646 10.533l-2.156-1.998.802 2.688c-2.089-1.094-.564-1.402-2.427-.312-1.167-2.503.578-1.139-2.13-1.965 1.933-.75.628-.414 2.642-.36l-.816-1.602c.964.025 1.924.052 2.88.081-.355-1.931-.855-.503.728-1.92-1.526-.254-.296-.13-1.563.28a13.52 13.52 0 01-.864-.592c1.048-.159 2.085-.358 3.114-.554-.411-.964-.357-1.273-.339-2.643-.153-.016-.348-.057-.527-.06-.576.341.22.358-1.026.101a12.2 12.2 0 011.026-.101c.119-.061.287-.099.536-.179.001.093-.006.144-.009.239 1.971.216 2.793 1.674 3.22 2.723.929-1.505 1.869-3.016 2.798-4.522.377-.005.754-.009 1.113-.051l-.937 1.51c.659.18 1.322.358 1.981.539-1.023-.324-.164-.386.687-.866l-1.044-2.049c.663.178 1.322.359 1.984.537l-1.025-2.011.443-.226c2.04.509 1.328.308 2.555 2.78zm-19.417 5.295a354.68 354.68 0 002.199-.135l.209.41c-.905.836-1.817 1.63-2.74 2.429.112-.902.22-1.802.332-2.704zm2.452-.733l.904-.46c.285.183.567.368.852.551l-.94 1.511c-.492-1.767.446-.321-.816-1.602zm3.399-2.248c-1.288.938-.099.707-1.562.28.507-.117 1.036-.2 1.562-.28zm3.461-4.344l.446-.227c-.149.451-.31.862-.479 1.276.016-.337.036-.675.033-1.049zm2.664-.325c-.462.564-.913 1.169-1.383 1.737-.015-1.4-.018-.836-.385-1.869.606.067 1.189.099 1.768.132zm1.808-.921c.427.111.88.255 1.314.363-.169.414-.337.828-.479 1.276l-.454.231c-.132-1.575-.04-.824-.381-1.87zm3.871-3.521l.45-.229c-.15.451-.318.866-.479 1.276.019-.338.028-.671.029-1.047zm2.434.308c1.209 1.261-.552 1.079.835 1.64l.19.372c-.66.195-1.338.353-1.998.549.318-.866.655-1.695.973-2.561zm-.096-3.517c.494.593.984 1.188 1.478 1.78-.285-.183-.567-.368-.852-.551-.244.266-.47.568-.714.833.036-.675.052-1.387.088-2.062zm-17.89 23.897l-.608-1.192c.434.107.869.214 1.322.359-.245.265-.47.567-.714.833zm-6.792-1.091c-.795-.815-1.571-1.593-2.366-2.408.739.327 1.454.62 2.193.947.056.488.116.973.173 1.461zm-3.661-2.734c.218-.298.443-.601.688-.866l.454-.232c-.536 1.165.354.899-1.142 1.098zm.085 3.523c.169-.79.357-1.543.522-2.331l.443-.225c-.151 2.094.41.776-.965 2.556zm-2.005.506c.016-.337.012-.711.032-1.049l.454-.231c-.172.416-.322.867-.486 1.28zm-2.431-.311c.02-.338.036-.674.036-1.05.043.588.55.142-.036 1.05zm-1.137 1.097c.518-.077 1.029-.197 1.555-.277-1.289.938-.099.707-1.555.277zm-2.255 1.148c-.056-.487-.116-.973-.172-1.46l1.8-.918c-.546.795-1.089 1.587-1.628 2.378zm.594 2.278c-.06-.485-.116-.973-.176-1.458.881.818.338.25.176 1.458zm-.871-.588c-.225-.073-.434-.107-.659-.18l-.446.227c-.043-.166-.047-.258-.075-.385a7.2 7.2 0 01-.793-.205c.926-.003.745-.286.793.205.176.051.352.103.521.158l.45-.23.209.41zm-2.54 2.795l-1.8.918a94.558 94.558 0 00-.165-1.418c.286.183.567.368.872.588l.904-.46.189.372zm-.277 1.69c-.434-.107-.868-.214-1.314-.363l1.8-.917c-.149.452-.318.866-.486 1.28zm-4.263 1.656l1.35-.688c-1.06 1.057.126.781-1.35.688zm-2.009.508c.092-.564.204-1.09.296-1.653.351-.038.728-.042 1.105-.047.041.449.098.936.158 1.422-.504.115-1.03.196-1.559.278zm-1.174 2.146c-.718-1.37.543-.229-.382-1.87l1.314.363c-.321.492-.611 1.015-.932 1.507zm-1.739-1.178l-.608-1.192.454-.231c.056.487.116.973.154 1.423zm-.512 2.325l-1.025-2.011c.64.143 1.295.325 1.954.506-.317.49-.612 1.015-.929 1.505zm-.185 5.209c-.847.572-1.668 1.178-2.495 1.788l-.418-.82-.896.457c.736-1.36-.421-.771 1.141-1.098-.06-.485-.116-.973-.176-1.458 1.813.202.712-1.114 2.672-.329-.148.732-.693.305.172 1.46zm-5.798-4.694l.19.372c-1.509.488-.047.634-1.536.314l1.346-.686zm1.061.961c.586.405 1.153.773 1.739 1.178.282.185.567.368.842.557-.275-.189-.56-.372-.842-.557-1.316-.127-1.107.752-1.739-1.178zm-3.27 4.716c-.805.27-1.632.503-2.444.776-.301-.222-.586-.405-.861-.594 1.478-.236-.042-1.104 1.347-.686.407-1.38.007-.989-.148-2.505l1.358-.692c-.041 1.335.016 2.385.748 3.701zm-4.904 1.513l.695-.87.45-.229c-.543 1.168.359.896-1.145 1.099zm-1.072-1.002l.446-.227c-.161.41-.31.862-.479 1.276.016-.336.017-.712.033-1.049zm.385 1.869c-.245.265-.47.568-.714.833a30.882 30.882 0 01-.846-.555c.066-.221.143-.448.238-.637.358-.042.736-.047 1.113-.051l.209.41zm-3.656 2.848c-.189-.748-.382-1.495-.571-2.243.728-.043 1.463-.089 2.217-.098-.546.795-1.111 1.552-1.646 2.341zm-2.174-.91c.02-.339.02-.714.036-1.051l.45-.229c-.164.412-.314.864-.486 1.28zm-4.409 5.812l-1.591 1.327c-.06-.485-.116-.973-.176-1.459.529-.082 1.036-.199 1.559-.278l.208.41zm-3.359 1.196c-.056-.488-.116-.973-.172-1.461l.442-.225a136.71 136.71 0 01-.27 1.686zm-.695.87c-.535.789-1.081 1.583-1.624 2.376-.394-1.536-.737-1.032-2.149-2.002 1.46-.463 1.865-1.185 3.564-.784-.526.081-1.029.196-1.555.276 1.177.527.184 1.033 1.764.134zm-5.433 3.801l-.627-1.229c1.291.28.331-.169 1.531.768l-.904.461zm-.743 1.88c.019-.339.035-.675.047-1.01l.45-.229c-.168.414-.329.825-.497 1.239zm-1.475-1.783l-.418-.819c.774.497.492-.11.418.819zm-.535 2.29c-.225.303-.45.606-.694.871.055-1.014.087-2.063.116-3.11.189.749.389 1.491.578 2.239zm.053 4.572l.454-.231c.358.334.719.666 1.076 1l-2.25 1.147-.209-.41c1.081-1.208.559-.237.929-1.506zm-3.243-1.914c.719.666 1.438 1.332 2.138 1.961l.209.41c-1.054.912-2.119 1.783-3.183 2.654.27-1.686.566-3.339.836-5.025zm-3.296 5.762a18.365 18.365 0 01-.871-.588c.47-.568.932-1.132 1.402-1.7l1.302.322.209.41c-1.692.909-.834.284-2.042 1.556zm-4.93-4.104c.728-.042 1.463-.089 2.218-.098.041.448.097.936.157 1.422-1.901-.393-.451.511-2.375-1.324zm2.314 3.42l-.418-.82c.763.503.492-.11.418.82zm1.713 1.145l-.479 1.276c-.229-.071-.434-.108-.663-.179.02-.338.036-.675.036-1.05l.897-.457.209.41zm-1.085-6.58l.45-.229.626 1.229c-.453-.145-.887-.252-1.321-.359.076-.227.168-.414.245-.641zm2.379 1.322c1.438.487-.093.047.176 1.458-1.719-.954-.529-.246-1.234-2.421 1.383.515.329.02 1.058.963zm.984-2.519c.728-.043 1.463-.089 2.217-.098l-.903.46c.285.183.567.368.852.551l-2.408-.274c.073-.225.15-.452.242-.639zm-5.011 10.202c-1.164-1.191-.153.03-.579-2.24 1.616.256.559.279 1.72 1.142-1.148.772-.18-.096-1.141 1.098zm1.712 1.145l-.398-.783c.773.498.484-.153.398.783zm-8.555 4.359c.337-.829.655-1.695.984-2.519.951-1.517 2.148-.861 3.146-2.589l-.618-.248c.228.071.453.144.663.179-.007.05-.022.057-.045.069l2.226.884c-3.179.775-4.373 1.946-6.356 4.224zm3.363-1.198c.02-.338.036-.675.055-1.013l.443-.226-.498 1.239zm-1.805-4.664l.443-.226.607 1.193c-1.427-.447-.192.192-1.05-.967zm1.138-1.096c.586.03 1.169.061 1.768.132-1.141.768-.181-.096-1.161 1.06l-.607-1.192zm.515-2.327c.244-.265.469-.568.695-.87l.45-.23c.781 1.432.367.564 1.94 1.592-.876.119-1.783.206-2.667.328l-.418-.82zm-7.691 4.951c-.057-.487-.117-.973-.173-1.461l.454-.231c.119 1.301.693.211-.281 1.692zm-.113 3.108l-.454.231c-.206-.036-.43-.109-.659-.181.02-.338.036-.674.052-1.011l.907-.463c.057.488.098.936.154 1.424zm-2.789-2.145l.442-.226c.362.332.719.666 1.077 1-.241.263-.47.568-.684.865l-.835-1.639zm.739-1.879l-.948 1.469c-.361-.332-.704-.627-1.061-.961 1.485-.147.869-.115 2.009-.508zm-9.158 8.749c.639-2.156.494-.299-1.012-3.098.229.071.454.145.663.179 1.623.205-.288.85 2.182.953a59.41 59.41 0 00-1.833 1.966zm-.952 1.471c.305.22.586.404.872.588-1.569.94-.289.71-1.775-.128l.903-.46zm-4.388-.815c.812.103 1.623.206 2.427.312-1.992.311-.93.474-2.427-.312zm.093 3.519c.434.108.887.252 1.314.363-.58 1.234-.606.356-1.314-.363zm-3.572.788l.051-1.012c.286.183.567.368.853.551l-.904.461zm-2.247 1.145c-.849-.553-1.72-1.142-2.588-1.732 2.654-1.118 1.464-.089 2.704-1.378-.036 1.051-.068 2.1-.116 3.11zm.446-.228c.016-.336.036-.675.052-1.011l.454-.232-.506 1.243zm-2.106 3.654c-1.036-.176-2.05-.316-3.086-.492-.097-.936-.213-1.909-.337-2.878.756 1.116.953.5.389 1.866 2.788 1.16 2.272-.266 4.384.816l-1.35.688zm-4.26 1.655c1.517-.022 1.105-.517 2.877.082-.96-.027-1.924-.052-2.877-.082zm-.087 2.062l-2.255 1.148c.261-.977.522-1.955.776-2.929.434.108.887.252 1.321.359.06.486.117.974.158 1.422zm-5.172-3.465l.45-.229a20.74 20.74 0 00-.479 1.276c.001-.376.017-.712.029-1.047zm-2.456.735c.58.033 1.181.102 1.768.131-1.616.167-.539.275-1.768-.131zm2.677 5.253c-.113-.6-.257-1.23-.37-1.83.434.108.868.215 1.321.359-.321.492-.638.982-.951 1.471zm1.378-7.319l.442-.225c-.161.41-.31.862-.479 1.276.02-.339.017-.712.037-1.051zm-3.376 7.867c.001-.376.017-.712.036-1.051l.904-.46c-.401 1.236.16.294-.94 1.511zm-1.555.277l-1.35.688-.418-.82c.378-.38.764-.718 1.141-1.098l.904-.461-.277 1.691zm-2.314-3.42c.434.107.868.214 1.321.359l-1.346.686c-.011-.37.009-.709.025-1.045zm-1.411 8.367l-.417-.819c-.108 1.885-.491-.688-.816-1.602l1.357-.692a138.64 138.64 0 00-.124 3.113zm-2.756-3.194l-.817-1.602c.419.444.852.927 1.27 1.371l-.453.231zm-1.801.917l-.626-1.229c.53-.082 1.048-.158 1.559-.278a29.394 29.394 0 01-.933 1.507zm-.871-.588c-1.434-.442-.189.19-1.058-.962l.451-.23.607 1.192zm-3.878 3.525c-.679.158-1.331.349-2.009.507l-.627-1.229 1.351-.688c.727 1.271-.351.507 1.076 1l.209.41zm-1.496 4.844c-.529.082-1.036.2-1.566.282.394-.717.787-1.434 1.174-2.147l1.113-.05c-.242.639-.487 1.28-.721 1.915zm-3.487-1.273c-.454-.144-.888-.251-1.322-.359.077-.226.168-.414.245-.641l1.8-.917c-.245.641-.478 1.276-.723 1.917zm.12 2.472c-1.922-.287-1.748-.939-2.13-1.964.656.182 1.314.363 1.958.504.056.487.116.973.172 1.46zm1.95-5.075c-1.347.217-2.189.505-3.323.144l3.323-.144zm.626 1.229l-.417-.819c.773.497.503-.116.417.819zm-7.41 3.259c-.393.342-.771.722-1.137 1.097.154-1.674.324-1.01.061-2.096l.45-.23.626 1.229zm-3.721 4.946c-1.107-.186-1.795-.774-2.825-1.094-.871-.495-1.344.544-3.114.555.711.67 1.411 1.298 2.13 1.964a18.365 18.365 0 01-.871-.588l-1.347.686-.121-2.472c-.53.082-1.037.2-1.567.282 3.849-1.21 4.557-1.43 8.073-3.081-.431 2.472-1.296 1.833-.358 3.748zm-7.41 3.26c.016-.337.036-.675.033-1.049l.896-.457-.929 1.506zm-1.321-.359l.418.82-1.106.046c-.225.303-.451.606-.695.871l-.993-3.061 1.351-.688 1.025 2.012zm-4.244 1.693l-.897.457c.085-.56.178-1.123.27-1.686 1.683-.247.862-.111 2.009-.508-.604 1.481.787 1.148-1.382 1.737zm-4.413 5.814c-1.455.648-.066.551-1.555.277 1.277-.041.669-1.749.756-2.966.998.524-.031.25.799 2.689zm-4.922 1.476l-.117-2.474c-1.292.94-.552-.329-1.168 1.064l-.443.226c.023-1.795.48-1.699 1.226-3.159 1.476.562.93.981 1.234 2.422.462-.564.932-1.132 1.401-1.7-.714 1.209-1.418 2.413-2.133 3.621zm-.892.455l-.627-1.229.443-.226c.056.488.124.97.184 1.455zm2.842-5.53l.904-.461c-.39 1.231.163.293-.929 1.506 0-.376.016-.713.025-1.045zm-8.463 7.878c.019-.339.035-.675.036-1.051l.45-.229c-.149.451-.318.866-.486 1.28zm-7.443 4.308c-.228-.071-.434-.107-.662-.178-.057-.488-.117-.973-.173-1.461a42.302 42.302 0 002.218-.098c-1.61.961-.575.012-1.383 1.737zm-4.681.837c-.056-.488-.097-.936-.153-1.423.602 1.007.623.01.153 1.423zm-2.371-1.326c.008-.333.009-.708.025-1.045l.454-.231c-.169.414-.318.866-.479 1.276zm-3.878 3.525l-.627-1.23.897-.456c-.093.563-.178 1.122-.27 1.686zm-2.463.739c-.453-.145-.887-.252-1.322-.36.824-1.639.909.054.732-1.921.426.487.844.931 1.277 1.414-.244.265-.462.564-.687.867zm-3.781.377c.583.032 1.189.098 1.772.13-1.613.164-.54.275-1.772-.13zm-1.229 3.16l-.607-1.192c.434.107.868.215 1.321.359l-.714.833zm-4.497 2.292c.253-.974.514-1.952.775-2.929.586.405 1.146.777 1.732 1.182-.84.569-1.668 1.178-2.507 1.747zm1.462 2.868l-.627-1.229.447-.227c.056.487.112.975.18 1.456zm-2.877-.082l1.8-.918c-.797 1.58-.095 1.175-1.8.918zm-1.897-2.6c.479.037.965.071 1.443.109-1.125-.037-.074.601-1.443-.109zm-3.845 2.475l-.627-1.229 1.804-.919c-.24 1.67.26.712-1.177 2.148zm-1.921 4.029c.261-.978.522-1.955.776-2.929.659-.195 1.338-.353 1.997-.549-.92 1.173-1.852 2.305-2.773 3.478zm1.267 1.372c-1.379-.517-.337-.016-1.058-.962l.45-.23.608 1.192zm-3.452-2.323c-.037-.451-.098-.936-.154-1.424l.45-.229a33.782 33.782 0 01-.296 1.653zm.14 2.509c-1.692.909-.823.279-2.034 1.553-.229-.072-.453-.145-.663-.179l-.626-1.229c1.38-1.079.692-.353 2.463-.739-.419-.444-.852-.927-1.27-1.371l1.295.326.835 1.639zm-4.288 2.701c-2.213-.186-2.473-.852-4.111-2.504 1.543-.457 1.941-.66 2.938-2.013l.454-.231c1.012 2.675.33 3.351.719 4.748zm-2.946 2.017c-.06-.485-.116-.973-.176-1.458l.454-.231c.019 1.491.261.476-.278 1.689zm-3.419-3.372l.896-.457c.434.107.869.214 1.322.359l-.506 1.243c-.8-1-.194-.464-1.712-1.145zm-.12 3.111c.241-.639.486-1.28.727-1.919.438.481.852.927 1.289 1.408-1.492.15-.888.077-2.016.511zm.51 4.339l-.209-.41c.321-.492.638-.982.933-1.508l.45-.229c1.157.818-.04 1.099-1.174 2.147zm-2.973-3.6l-.897.457c-.567-.368-1.152-.774-1.719-1.142 1.282-.794 1.579-.57 1.836-1.968.583.032 1.17.061 1.771.13-1.339 1.527-.984.689-.991 2.523zm.392 1.864l.443-.225c.361.332.7.628 1.061.961-1.264-.248-.316.207-1.504-.736zm-1.192 2.11l1.346-.686c-.681 1.285.129.638-1.346.686zm-2.138-1.961l1.346-.686.627 1.229a566.83 566.83 0 01-1.402 1.7c-.333-2.318.381-.898-.571-2.243zm-3.002-2.553c.377-.005.728-.042 1.105-.047l1.776.128c.02 1.491.261.476-.297 1.652-.912-1.881-.634-.85-2.584-1.733zm.957 4.111c-1.483-.464-1.101-.237-1.476-1.782 1.518.634.506.587 1.476 1.782zm8.985-10.209l.443-.225.626 1.229-1.347.686.278-1.69zm4.468-1.244c.774.497.496-.112.418.819l-.418-.819zm-6.064 14.82c.437.481.852.927 1.289 1.408-1.529-.628-.309.064-1.289-1.408zm-3.633 2.884l-.626-1.229c.453.144.887.251 1.314.362-.218.299-.463.564-.688.867zm-8.293-2.907c-.539.415-1.065.871-1.592 1.327.145-1.95.282-3.897.426-5.848l2.251-1.146c-.362 1.873-.735 3.752-1.085 5.667zm1.961.502c-.415-.445-.852-.926-1.266-1.372.281.185.567.368.867.59.017-.712.052-1.387.061-2.096l1.929 1.551c-.969 1.151-.584.674-1.591 1.327zm-5.859-2.598c-.007-.372.009-.708.028-1.047l1.322.359-1.35.688zm.538 3.292c-.526.08-1.037.2-1.555.276.253-.974.514-1.951.775-2.929 1.266.434.431.578.78 2.653zm-.113 3.107l-.816-1.602.897-.456-.081 2.058zm-2.025-5.068l.904-.461-1.192 2.11c.092-.564.184-1.127.288-1.649zm-1.704 4.434c-.304-.22-.586-.405-.871-.588 1.08-.785.435.247 1.149-1.101l.896-.457c.358.334.719.666 1.077 1l-2.251 1.146zm2.163.916c-.056-.487-.116-.973-.154-1.423l.451-.229c.019 1.491.261.476-.297 1.652zm-3.906-2.092c-.509-2.04.768-1.189 1.23-3.16l.453-.232c-.463 1.738.766.408-.743 1.881l.418.819-1.358.692zm3.307-5.768l.454-.231c-.168.414-.318.866-.486 1.28.016-.336.016-.712.032-1.049zm-8.707 8.52l-.209-.41c.396-.343.775-.723 1.141-1.098l1.567-.282c-.75 1.508-.352.414-2.499 1.79zm.036-1.051a89.274 89.274 0 00-.853-.551c1.077.108.473.275.853.551zm-2.441.774l-.626-1.229.45-.23c.06.486.116.973.176 1.459zm-.662-.178c-.754.009-1.482.051-2.218.097.073-.225.168-.414.241-.639l1.351-.688.626 1.23zm.51 4.338l-.418-.819c.774.497.496-.112.418.819zm-3.748-.671c.394-.717.78-1.43 1.193-2.109l.904-.461c-.715.833-1.402 1.7-2.097 2.57zm1.948 1.589c-.301-.223-.587-.406-.868-.591 1.073.111.469.278.868.591zm-4.408-.852c.202-1.839.651-2.208 1.471-3.799l.896-.457c-.155 2.05-.586 2.316-1.671 3.386.3.222.586.405.86.594a21.9 21.9 0 01-1.556.276zm-.965 2.556l.278-1.689c1.605-.161.539-.275 1.764.133-1.692.909-.834.284-2.042 1.556zm.817 1.602c-.06-.485-.098-.936-.158-1.421l.454-.231c.02 1.491.262.476-.296 1.652zm1.947 1.589c-.777-.074-.248-.625-1.566.282l.277-1.69c.229.071.435.107.663.178 1.259-.407.048-.494 1.555-.276-.317.49-.638.982-.929 1.506zm-3.905-2.093l-.835-1.639c-1.477.237.035 1.108-1.354.69-.971 1.902-.673.39.147 2.506-.397.343-.771.721-1.168 1.064-1.226-2.003.278-1.221-1.921-1.555-.752-.086-1.019-.372-1.145 1.1l-.446.227c-.755-2.759.18-2.532.393-4.799l1.347-.686c-.027 1.749-.07.176 1.234 2.421.919-1.36 1.308-.807 1.229-3.16 1.677.037 1.461.1 2.668-.327.285.183.567.368.852.551-.556 1.363-.597 1.008-.314 2.741a9.822 9.822 0 00-.687.866zm-7 4.083c-.453-.144-.887-.252-1.314-.363l1.8-.917c-.168.414-.337.829-.486 1.28zm-.567 3.339c-.434-.107-.887-.252-1.321-.359 1.387-.754.844-.055 1.39-1.741 1.148 1.057.574.693-.069 2.1zm-4.677.835c.486-.905.949-1.845 1.435-2.749l.896-.457c-.779 1.054-1.551 2.151-2.331 3.206zm-2.105-3.01l1.358-.692c-.47.568-.92 1.173-1.39 1.741.016-.337.016-.713.032-1.049zm-2.858-.046c1.643-.555 1.231-.251 2.042-1.556l.904-.461c-.337.829-.655 1.695-.984 2.519l-1.962-.502zm-5.664 3.356c.413-1.055.815-2.105 1.229-3.161.132.637.249 1.235.381 1.871 1.516-1.476 3.05-2.915 4.573-4.395l.209.41-.904.461c1.689.922-4.84 4.202-5.488 4.814zm2.426.312l-.418-.82c.793.535.5-.114.418.82zm-1.225 3.158c.201-1.463.158-.268-.158-1.421l.454-.232c.119 1.301.674.173-.296 1.653zm-2.227-5.482c.18.941.764.221-.277 1.69l.277-1.69zm-1.016 3.568c.016-.337.036-.675.051-1.011l.897-.457-.948 1.468zm10.271-8.799l1.346-.686c-.241.639-.486 1.28-.72 1.915-.286-.183-.586-.405-.871-.588.076-.227.168-.414.245-.641zm3.93 1.047c1.626-.359 2.087-.547 3.331-.148-1.576.99-3.174 1.946-4.75 2.936l-.209-.41c1.589-1.232.73-.747 1.628-2.378zm-.816-1.602l1.354-.689.418.819c-1.802.777-.376.614-2.017.511.077-.226.168-.414.245-.641zm4.746-2.934c-1.289.938-.099.707-1.563.28.526-.08 1.037-.2 1.563-.28zm8.141-5.18c1.507-.299-.707 1.674-1.174 2.146.387-.713.78-1.43 1.174-2.146zm-16.038 21.967l-.627-1.229.45-.23c.06.486.117.973.177 1.459zm-13.176-2.484a40.195 40.195 0 00-1.965-.5c1.135-.954 1.057-.069 1.178-2.149.643.518 1.282 1.036 1.928 1.551-1.458.65-.829.001-1.141 1.098zm-5.112 1.103l-.208-.409c.45-.605.912-1.169 1.382-1.737.286.183.567.368.872.588a51.469 51.469 0 00-2.046 1.558zm-4.504 2.296l-.627-1.23 1.322.359c-.244.266-.47.568-.695.871zm-5.855 2.983c.318-.866.647-1.691.965-2.557.112.882.218 1.016-.965 2.557zm-10.62 5.88l-.816-1.602.904-.461c-.035.676-.052 1.388-.088 2.063zm-1.173 2.146l-1.556.277c.009-.333.028-.671.025-1.045 1.849.043 2.627-.4 3.817-1.429.189 2.109-.798 1.017-2.286 2.197zm-3.067-.455l-.743 1.88c-.074-2.261.477-1.556 1.02-3.57.18.941.753.227-.277 1.69zm-2.672.329c.418.444.852.927 1.27 1.371-1.52-.492-.702.076-1.27-1.371zm.546 3.288l-.417-.819c.785.538.492-.11.417.819zm-3.693-1.684c.016-.337.009-.709.025-1.046.031.548.539.101-.025 1.046zm-3.845 2.475l-.627-1.229 1.801-.918c.587 1.015.191.513 1.281 1.412-.823.232-1.651.466-2.455.735zm1.712 1.145c.02-.338.036-.675.037-1.05l.896-.457a26.533 26.533 0 01-.933 1.507zm-2.729 2.423l-.907.463c.019-.339.02-.714.036-1.051.285.183.586.405.871.588zm-1.984-.537c-1.29-.141-.209.059-2.045 1.558.092-1.548.01-1.929.811-3.98l1.234 2.422zm-.27 1.686l-.418-.82c.793.535.493-.11.418.82zm-8.201.612c-.526.081-1.037.2-1.555.277.015-.337.009-.709.025-1.045l.903-.461.627 1.229zm-4.654 6.454l-.417-.82c.773.498.503-.115.417.82zm-19.453 6.346c.001-.376.017-.713.029-1.048l.45-.229c-.168.414-.329.825-.479 1.277zm-12.098 4.099c-.067 1.395-.411-.494-.607-1.192.494.593.988 1.186 1.478 1.781-.281-.185-.586-.406-.871-.589zm-1.869 3.017c-.442-.15-.876-.257-1.314-.363.172-.416.321-.867.479-1.276.252.2.643.141.208.41.362.332.719.666 1.081.998l-.454.231zm-.688.867c1.609-.163.52-.313 1.749.094l-1.749-.094zm-.948 1.468c.009-.333.028-.671.044-1.008.031.548.543.099-.044 1.008zm-3.407-3.332l2.173.91c-1.477-.232-.857.156-2.173-.91zm2.295 3.383a89.274 89.274 0 00-.853-.551c1.077.108.473.275.853.551zm-.721 1.915c.016-.336.025-.669.025-1.045l.451-.229c-.15.451-.318.866-.476 1.274zm-2.836-1.088a19.1 19.1 0 01.036-1.051c.282.185.567.368.868.59l-.904.461zm-11.188 15.882l-.417-.819c.793.535.496-.112.417.819zm8.074-15.328l-.627-1.229c1.327.544.705-.171.627 1.229zm-13.305 7.295c.02-.338.016-.712.036-1.051.434.108.887.252 1.322.36l-1.358.691zm-1.383 1.737l.278-1.69.446-.227c-.237.637-.479 1.276-.724 1.917zm-.739 1.878a45.95 45.95 0 01-.157-1.421c.209.034.427.111.636.145-.142.448-.31.862-.479 1.276zm-6.245 7.781c-1.169-.014-2.191.131-1.08-.998-1.966-.641-1.003.699-2.617-.685 2.727-.92 1.852.793 4.472-1.246.282.185.568.368.849.553-1.17 1.722-1.544 1.162-1.624 2.376zm5.911 1.587c.117.597.249 1.233.366 1.831-1.51-.592-.309.064-1.27-1.371-1.123 1.089-1.573.849-2.938 2.014.326-1.199.664-2.403 1.017-3.568.937.367 1.881.73 2.825 1.094zm-11.5-5.872l-1.559.279c.168-.415.31-.862.479-1.277.529-.082 1.036-.2 1.566-.282-.168.414-.318.866-.486 1.28zm-.449 5.813c1.892-.213 1.668-.146 3.089.491-1.029-.18-2.05-.317-3.089-.491zm3.009 2.55c-2.166.024-.956.064-2.383-1.32 2.479-.137.131.918 2.193.947l.19.373zm-6.197-5.477l-.626-1.229 1.346-.687.626 1.23-1.346.686zm-.322 2.698c-.136-.635-.26-1.229-.392-1.865l.454-.231c-.021.714-.056 1.389-.062 2.096zm-1.208-3.467c.884.816.338.25.183 1.455-.06-.486-.127-.967-.183-1.455zm3.784-.38l1.709 1.147-.684.865-1.025-2.012zm4.241-1.691l-1.138 1.096-.607-1.192.896-.457c.282.185.567.368.849.553zm-9.408 3.808c-.244.265-.462.564-.688.866-1.322-1.813-.588-2.093-2.555-2.78l2.199-.135 1.044 2.049zm-11.339-4.452c.478.038.964.072 1.443.11-1.125-.037-.074.6-1.443-.11zM58.618 402.028l-.607-1.192.904-.461-.297 1.653zm-2.199.135l.4.782-.45.23-.122-2.473c.877.82.334.252.172 1.461zm-3.511 5.356l.068-2.1.45-.229c.144 1.1.294.695-.519 2.329zm-2.218.097c.225-.302.47-.568.695-.87l.896-.457-.27 1.687c-.453-.145-.887-.252-1.321-.36zm-.57 3.341l-.21-.41c.02-.338.04-.677.056-1.013l1.8-.918c-.37 1.268-.442 1.211-1.647 2.341zm.176 1.459c-1.495 1.793-2.236 1.655-1.262 4.209-.274-.189-.579-.409-.86-.594-.378.38-.775.723-1.15 1.101 1.205 1.029 1.195.8 2.384 1.32l-1.592 1.327c-1.43-1.195-.878-.444-1.234-2.421-.38.006-.735.046-1.116.053l.626 1.229c-1.188-.098-2.35-.163-3.54-.262l.627 1.23c.377-.005.736-.046 1.113-.051-.546.419-1.073.875-1.592 1.327-1.205-.747-.369-1.313-.755-3.698-1.274.415-.555.612-2.218.098 1.226-.483.972-.354 2.672-.329l.278-1.69c.651.185 1.314.363 1.973.543-.364-.19 2.42-3.626 2.611-4.896l2.2-.136.835 1.64zm67.318 149.923c0 .375-.016.712-.036 1.051l-.816-1.602 1.35-.688c.282.185.567.368.849.553l-1.347.686zM42.459 421.523c1.605-.16.52-.312 1.745.096-.583-.031-1.162-.064-1.745-.096zm71.009 139.362c.184-.75.346-1.537.53-2.287.944.363 1.888.726 2.825 1.094-1.892.166-1.808.405-3.355 1.193zm-2.705 1.378a18.365 18.365 0 01-.871-.588c.096-.19.168-.414.264-.604l1.354-.69c.427.111.861.219 1.295.326-.675.532-1.347 1.062-2.042 1.556zm-3.182-9.593c-.317.49-.638.982-.937 1.509-.003-.373.017-.712.033-1.049l.904-.46zM39.092 422.723l-.626-1.23c.228.072.434.107.662.179-.02.338-.035.675-.036 1.051.302-.53.62-1.02.94-1.512-.188.753-.353 1.541-.541 2.294l-.399-.782zm2.463-.739c.491.219 1.001.475 1.511.731-.225.303-.47.568-.695.871l-.816-1.602zm1.392-8.405l.45-.229c-.241.639-.486 1.28-.72 1.915.085-.559.177-1.122.27-1.686zm59.792 138.508c-1.783-1.578-.25.033-.59-2.28l1.321.359c-.245.641-.486 1.28-.731 1.921zm-.044 1.008c.727.333 1.447.623 2.182.953-1.432-.162-.986-.014-2.182-.953zm3.138 5.064l1.358-.691c-1.086 1.022.099.747-1.358.691zm-7.172-9.625c-.434-.107-.887-.252-1.314-.363.237-.261.462-.564.688-.866l.453-.232c.057.488.117.973.173 1.461zm1.828 4.699c-.901-.526-2.483-.283-4.018 1.016l.277-1.69c1.406-.201 2.82-.405 4.227-.605l-.486 1.279zm-4.677-11.412c.016-.337.017-.712.032-1.049l.454-.231c-.168.414-.318.866-.486 1.28zm-56.589-79.89c-.378.381-.771.722-1.142 1.098l-1.892-2.602 2.704-1.378c.117.973.214 1.909.33 2.882zm740.785-253.944c-.199-4.31 5.931-5.556 7.438-9.89-.221-.075-.412-7.862-.112-9.14-5.038-2.126-8.134-9.417-18.587-11.974-1.07.311-.446-.148-.688.867-4.764-2.078-11.961-8.359-11.319-11.079l-.607-1.192c-8.531-2.269-24.614-12.234-28.135-22.922-.26.601-.498 1.239-.739 1.878.24-2.703-4.161-6.889-6.581-7.345-1.489-.65-.574-.225-2.01.507.684-1.381.061-.312 1.142-1.098-3.722-2.89-10.026-8.264-12.573-6.873.035-.675.041-1.382.076-2.057-2.376-.056-.7-.628-2.459.737.153-4.066-4.711-2.855-4.444-5.384-2.338-.826-1.478-.749-3.122.558-.447-1.742.174-2.481-2.094-3.015-.197.147-.099-.278-2.463.739.387-.713.78-1.43 1.174-2.147-2.636-1.238-1.81.171-5.658-2.185 1.585-.714.898.153 1.599-1.331-3.987 1.563-9.604-7.447-14.622-5.313-.392-3.648.978-20.628-8.525-21.182 0 0-.008.004-.245.64-6.039-4.008-24.112-14.695-30.049-12.233.085-.56.177-1.123.27-1.686-2.526 1.24-2.807.726-3.938-1.044-1.03.995-1.141.253-2.488 1.784.141-3.31-20.79-5.408-24.287-.905l-.835-1.639c-2.222 1.32-2.226 1.745-3.809 1.425-1.181 1.681-.785.4.382 1.87-1.395-.134-2.786-.27-4.199-.441.023 1.396.015.837.389 1.866-8.209-2.152-23.88-7.4-34.46-.835 0 0-1.583-1.306-.853-.552-3.006 3.644-21.595 5.608-26.661 10.019-.301-.222-.587-.405-.868-.59l1.8-.918c-3.241.15-15.072 7.164-15.072 7.164-.752-.555-.649.096-.418-.82-1.531-.392-7.05 2.514-6.751 3.44-1.017-.138-2.057-.312-3.067-.455-.183.469-.354.932-.556 1.363.08.194.063.39-.194.52.069-.175.132-.347.194-.52-.161-.434-1.08-.904-1.244-.445-3.351 1.754-9.288 3.418-12.61 6.424-5.944 5.281-48.162 24.493-51.936 23.882-4.691 1.874-8.825 6.139-11.014 5.096-1.035 1.888-.594.537-.069 2.1-2.714-.213-11.318 3.561-10.982 4.047l.209.41a356.468 356.468 0 01-6.273 2.163l.209.41c.606.067 1.181.102 1.768.131-2.066.396-4.151.755-6.236 1.113-1.318 1.047-1.869 3.017-1.869 3.017-4.549 1.426-32.725 14.516-32.813 14.655-1.452 2.898-12.338 8.586-17.593 9.996-.306.109-17.155 7.943-18.083 11.279-2.612-1.485-11.286 6.219-13.956 7.111-10.718 3.536-29.67 20.842-45.81 25.875-6.162 1.919-18.045 13.229-21.896 12.705-10.236 6.247-20.494 12.459-30.737 18.711.53-.082 1.03-.196 1.556-.277-16.478 6.144-36 26.039-52.216 32.236-5.409 5.853-27.632 22.855-30.673 23.278-.019.338-.039.677-.055 1.013.453.145.887.252 1.314.363-.576-.035-1.162-.065-1.768-.131-1.832 1.168-1.661 1.972-2.798 4.522-.362-.941.217-.439-.871-.588-5.259-2.717-22.119 25.206-28.605 27.338 0 0-6.297 5.508-10.065 9.211-2.353 2.278-15.272 12.943-16.238 14.89-3.879 7.936-14.587 12.641-18.224 21.016a398.88 398.88 0 01-6.096 3.623c-3.058 6.485-2.157 9.31-10.69 14.643l2.194.948a200.244 200.244 0 00-4.653-.211c-1.094 1.778-.501 2.133-2.315 3.245-.44.975-.398.156-.868-.591-2.927 3.744-4.83 4.855-5.83 8.602-1.361-.573-.28-.749-2.183-.953-.417 2.418-1.288 2.722-3.636 2.886-1.696 4.102-3.385 8.2-5.08 12.301 2.255 1.291 2.328.175 4.6 1.222l-1.807.921c-.02.339-.029.672-.048 1.01.347.011.691.023 1.02-.003l.539-.275c.004.092.02.177.024.269 1.177.01 2.339-.018 3.515-.007l-.486 1.279-.626-1.229c-.378.004-.736.046-1.106.047-.263 2.011-.148.592 1.025 2.012-5.24 2.248-18.204 18.285-18.83 19.824.559.372 1.145.777 1.712 1.145-1.238 6.684-5.598 8.343-6.733 15.725l1.8-.917c-.702 1.343-.068.316-1.16 1.06 3.702 4.12 7.288 16.887 10.197 17.797-.673 1.282.136.635-1.346.686 1.64 9.629 16.467 37.22 19.571 39.533 8.193 6.055 17.343 11.857 23.093 15.262 3.45-3.307 11.743-1.855 11.472-5.329 3.154-.2 5.997 3.889 7.771 5.237-.583-.031-1.17-.061-1.772-.129l.418.819c-.161.411-.311.862-.479 1.277 1.834.05.839-.663 2.913-.969-.011-.37.009-.708.025-1.045.117.598.249 1.234.373 1.828.274 1.502-.96 2.647-2.288 4.216 1.608-.632 6.736-2.541 8.697-3.869l.399.783c-.459 1.454-.246.078.176 1.458-2.332.72-1.972.911-2.671.329l-1.347.686.209.41c-1.428 1.244-1.391 1.648-.812 3.98 2.165-2.933 5.761-2.653 8.523-3.31-2.139 3.389-6.628 2.063-7.739 5.961l-.897.457c1.835.05.328.349 1.801-.918a19.1 19.1 0 01-.036 1.051c2.055.126-.019-.882 2.462-.739-.217.815-.784.4.572 2.243l-.443.226c-1.021-.137-2.057-.313-3.07-.454l1.442 2.832c1.077-1.206.559-.238.933-1.508 1.145.308 6.466 2.336 8.257 3.958a56.18 56.18 0 01-2.041 1.556l.208.409c2.063-.769 2.047-.901 3.184-2.653l.835 1.638c-.414 1.056-.816 2.106-1.23 3.161l1.592-1.328c.469 2.952 3.176 1.526 4.323 2.913 1.037.316.166.15-.688.866l.836 1.639c.274.189.559.372.841.557 1.41-1.141.943-.246.959-1.474 1.279.709 1.269.292.154 1.423.136.635.249 1.234.385 1.869 3.041-3.052 1.581-3.011 3.303-5.766.434.108.861.219 1.295.326-.969 1.151-.585.673-1.592 1.327-.016.712-.052 1.387-.061 2.096 1.704-2.229 1.096-.699 3.568-.786.464-1.738.627-1.492.303-2.735 1.715.111.86.078 2.463-.739.577 4.821 9.664 9.247 13.605 8.881-.165.789-.353 1.541-.519 2.33 2.298.471 3.049 1.496 4.276 3.921.462-.564.932-1.132 1.401-1.7.891 2.925 5.807 2.579 9.344 3.874.321-.492.638-.982.951-1.471 1.006 1.975 3.043 1.172 5.831 3.646l1.351-.688c-.378.004-.736.046-1.106.047.085-.56.178-1.123.289-1.649 5.833 9.369 22.511 12.556 25.942 21.975 1.487-.429 2.989-.819 4.476-1.248.268.895.514 1.755.783 2.651.807-2.335-.073-1.652 1.672-3.386l-.835-1.639c-1.633-.107-.64.373-.27 1.686l-.904.46c-1.063-1.57-.226-.635-1.94-1.592.091-.187.168-.414.26-.602l2.246-1.144c.073-.225.15-.452.242-.639l1.442 2.831c.362.332.719.666 1.061.961l-.574-2.241.454-.231c.844.93 1.695 1.857 2.547 2.784-.168.414-.318.866-.479 1.276-.719 1.117-.019-.037-2.463.739.269.895.515 1.755.784 2.651l1.8-.918-1.112.051c.572-1.324 2.777-1.649 5.01-3.538.962 2.513 1.738 1.977.783 2.651.564.37 1.153.773 1.72 1.141l.443-.225c-.193-.747-.382-1.495-.571-2.243l1.113-.051c.015-.337.016-.712.032-1.049.514 2.6 2.589 5.156 1.286 6.993 1.68.318 1.681-.48 3.785-.379.165-.788.342-1.536.511-2.326 1.363.479.41-.115.626 1.23l.209.41c.771-.722 1.516-1.477 2.287-2.198-.284.896-3.691 3.617-3.332 6.812 2.605-2.453 2.61-1.893 5.646-3.392l.208.409c-.695.871-1.382 1.737-2.096 2.57-.001.376-.017.713-.037 1.051l.209.41 1.8-.918c.229.072.435.108.663.179-.701-1.238.358-.511-1.08-.998l.959-1.474c.55.142 1.136.078 3.304-.182-.565-1.026.073-1.163-1.958-.504l-1.043-2.049c1.862-1.935-.039-.075 3.157-1.609-1.192-1.457-.716-1.324-1.417-3.876 1.008-.514 1.077.108.695-.871 1.04.175 2.05.317 3.089.491-.193-.747-.382-1.495-.574-2.241l-3.608 1.838c.169-.79.353-1.541.522-2.331l-.904.461c-.951.156-2.171.778-2.287 2.198l-.446.227c-.159-2.078-.441-3.201 1.046-4.615.839.745-.246.594 1.511.731.607-2.045 3.067-5.41 4.203-6.224.522-1.486-.162-.199 1.611-1.29.484 2.193-.154 1.346 2.555 2.781-.003-.374.016-.713.032-1.049 1.133.08.436-.128-.18-1.457.434.483.852.927 1.285 1.41 1.136-2.268-.596-.822.757-2.966-2.294-.521-1.768 1.229-2.825-1.094-1.941.191-.542 1.308-2.218.097-.226.303-.47.568-.695.87.298-1.372.093-.939 1.181-2.15.102-.803 5.109-3.307 7.201-3.669.78 1.667-.174 1.496 1.948 1.588-1.379 2.58-3.595 2.113-3.721 4.946-.377.005-.735.046-1.112.051 2.673 1.172 3.397-1.075 4.745-2.935.766 1.347 1.043 1.393 2.603 1.771-.082-.943.415-.399-.417-.819l-.209-.41 2.251-1.147c-.132 1.663.462.375-.93 1.506 2.839 1.745 1.809.064 4.301 2.877-2.036.005-5.316 2.145-7.33 1.2-.635 1.356-1.266 2.71-1.92 4.029-2.285-.76-.422-1.333-2.617-.684.234-1.481.298-1.513 1.415-2.786-1.606.02-.936.571-2.199.135-1.407 3.251-2.256 2.275-2.816 4.485-.586-.405-1.154-.773-1.74-1.179-.37.377-.744.755-1.141 1.098l.835 1.639c.358-.041.736-.046 1.113-.05l-.418-.82c1.175.246 1.671.65 2.339 2.374l1.113-.05-.418-.82c1.967-.673.022-.058 1.592-1.327.019-.338.036-.675.036-1.051l1.044 2.049c1.006-1.216 1.214-.478 1.624-2.376 1.522.633.31-.064 1.282 1.412.016-.712.052-1.388.068-2.1 2.761-2.251 1.672-2.916 5.164-2.114-1.573.379-1.607.349-2.496 1.787.229.071.434.108.663.179 1.739-1.59 3.502-1.597 3.183-2.654 1.529.628.306-.063 1.285 1.409 1.692-3.208 2.631-2.091 4.566-4.391.136.635.249 1.234.385 1.869.983-2.191.046-2.182-.052-4.572-.771.721-1.542 1.443-2.306 2.16.056.488.116.973.173 1.461-1.464-1.742-.65-1.358-2.163-.916-.548-1.645-.708-1.563-2.105-3.01.285.183.567.368.852.551.936-1.556.78.354 1.278 1.414.9-1.35 2.253-1.758 2.564-3.887-.82-.24-.397.296-1.266-1.373 1.401.553.336.016 1.076 1a104.27 104.27 0 012.942-2.015c-1.493-.319-.058-.252-1.559.278.42-2.044.492-1.001 2.081-2.609-.016.712-.052 1.387-.072 2.101 1.62-1.904.986-.502.515-2.326.526-.081 1.037-.2 1.567-.283.43 1.517.136 1.151 1.467 1.787-.753-1.634.731-1.077-.816-1.602l-1.025-2.012c-.008.333-.028.671-.044 1.008l-1.116.053c-1.49-.79-.307-.548-1.745-.097.827-1.594 3.022-1.305 2.556-3.883.812.103 1.616.209 2.427.312-.434-.483-.852-.927-1.285-1.41l.45-.229c1.578 1.213 1.997 1.704 3.715 1.72.341 2.829-.56 1.787-1.47 3.799 1.113-.051 2.225-.102 3.312-.186-1.297-2.811.25-.878 1.47-3.799.491.595.985 1.188 1.494 1.82 1.185-1.777.298-.575 2.247-1.145-1.39-.512-2.769-.983-4.159-1.495l-.189-.372a34.077 34.077 0 011.591-1.327l.607 1.192c.512-.073 1.129-.387 1.817-.785-.004-.045-.016-.086-.016-.133l.666-.339a20.624 20.624 0 001.996-1.627c.025-.153.046-.305.093-.423a1.17 1.17 0 01.396-.014c1.579-1.508 3.026-3.137 3.72-4.148 1.568.843.464.046 1.025 2.012 1.753-1.738 1.849-.895 2.668-.327l1.801-.917c-1.184-2.166-.532-1.559-1.861-3.651 3.085.775 2.139.318 5.099-.017-.078-1.697-.176-.99.519-2.329.285.183.578.409.863.592l1.113-.051c-2.474 2.105-2.569 3.234-4.412 5.815.177-1.123.363-2.25.567-3.339-1.421.817-.463.987-1.801.917-.354 1.495-.185.658.784 2.651-1.805.357-.097.518-2.009.507.845 1.916.375 1.968 2.339 2.375-.138-1.291.71-2.192 1.92-4.029l.816 1.602c1.501-1.938-.216-.875 2.255-1.148.166-1.164.186-1.832.775-2.929 1.1.753-.004.893 1.314.362 1.985.256-.091-.141 2.495-1.787-2.26-.538-2.187-.293-2.913.968-.72-.806-.299-.551-.366-1.831-1.008.982-.704-.205-.948 1.468l-.454.231c.261-.977.522-1.955.776-2.929 1.82.528 1.092.241 1.929 1.551.951-1.47 1.888-2.979 2.82-4.487l.627 1.23c.434.107.868.214 1.295.325.26-.602.505-1.243.75-1.884-1.418.206-.267.652-1.775-.128l2.704-1.378c-.091 1.173-.041 2.274-.567 3.339 1.45.904.031.594 1.765.134 1.52.961.463-.002 1.025 2.011 2.295-2.436 3.413-2.818 3.515-5.357l-1.8.917c.802-1.488-.025-.269 1.592-1.327-.587-.03-1.17-.061-1.746-.096l-.208-.41c.952.031 1.916.056 2.857.046.972 2.32.602 2.274-.105 3.15l.817 1.602.454-.231c1.041-2.408 2.081-4.815 3.142-7.185.643.141 1.302.321 1.965.5-2.262.683-2.447.965-2.323 3.248l.209.41c2.024-.515.674-.719 2.444-.776-1.186-1.554.451-.934-1.713-1.145l-.209-.41c3.054-.571 1.868-.013 4.706-1.881.113.599.257 1.23.37 1.829 2.066-2.648 3.695-3.103 6.352-4.223-.307-3.269-.133-3.122 1.54-5.898.775.777 1.563 1.596 2.339 2.374-1.95.43-1.926 1.638-3.03 4.078l.209.409c.743-.05 1.15-.445 1.367-.931a2.38 2.38 0 01-.218-.17l.294-.15a2.782 2.782 0 00-.005-1.499c.735-.046 1.471-.093 2.218-.098.32-1.899-.213-2.238-1.201-3.47.812-.273 1.631-.503 2.443-.776.512 1.381-.477.947 1.077 1-.109.9-.221 1.802-.329 2.701l3.209-2.62-1.044-2.049a55.122 55.122 0 002.042-1.557c-.474 1.462.348.527-1.145 1.1.132.636.249 1.234.381 1.87 1.328.169 1.498-.434 3.766-.417.035-.675.052-1.387.08-2.058.757 1.21.438-.317 1.076 1 2.502-1.463 2.147-1.986 4.123-4.166 1.079 1.75 2.954.841 5.706 1.175.093-.563.185-1.126.27-1.686-.728.043-1.463.089-2.202.137l-.627-1.229c2.772.042 2.54.489 4.472-1.246.193.746.39 1.491.583 2.237a101.87 101.87 0 002.938-2.014l-.278 1.69c.695-.87 1.39-1.74 2.078-2.607-.15.452-.318.866-.479 1.277l.209.409c1.222-1.326.823-.701 1.174-2.146l.896-.457-1.105.047a36.256 36.256 0 01-1.511-.732c.51-.119 1.036-.199 1.566-.282l.897-.456c.173 1.084.346 2.169.546 3.288 1.23-1.659.963-.538.302-2.735 1.786-.441 3.264-.162 3.957 1.08 2.461-1.957 2.446-3.263 4.264-1.655a210.184 210.184 0 014.079-3.111c-.587-1.015-.191-.513-1.282-1.412 3.121.24 3.257-.064 6.691-1.344-.571-.742-1.137-1.486-1.688-2.19 2.09.671 1.581.555 1.896 2.599 1.903-.734 1.809-.78 3.103-.595-4.386 1.296-2.966 2.731-9.653 4.449-.428 1.063-.527 1.723-.775 2.929-1.755-1.311-.581.625-2.371-1.325-1.374 1.028-2.74 2.052-4.106 3.077-.733-.941.314-.442-1.062-.961-.834 1.692-1.953 2.732-3.391 2.245-.261.601-.506 1.242-.751 1.883 1.071.722-.298.997-1.624 2.376.185-1.126.37-2.253.574-3.342-1.506 1.237-1.97 2.459-2.964 1.98l-.454.231c.269.895.541 1.788.81 2.684 4.357-2.502 6.457-2.914 9.697-5.457a10.9 10.9 0 00-.695.87c1.96.832 2.33-.483 4.449-1.281.229-1.712.408-.302-.816-1.602.168-.415.318-.866.486-1.28.805 1.56.437.856 1.688 2.19 1.922-1.543 2.109-1.075 2.298-2.156 2.309-.802.529-.645-.594-2.279 2.041-.289 6.989 2.774 6.69-1.344 1.434.443.211-.155 1.057.963 2.068-.162.457-.796.743-1.88l.418.819a10.9 10.9 0 01.695-.87s2.287-1.259 5.112-1.103c.204-1.089.381-2.212.566-3.339l-.903.461c-.936-1.072-1.281-.333-1.142 1.098l-1.929-1.551c-.402 1.049-.816 2.104-1.218 3.154l-1.53-.769c1.586-.198 2.649-2.194 1.262-4.209 1.14-.722 2.27-1.485 3.391-2.244.7 1.004 1.403 2.007 2.102 3.011l.454-.231c-.373-1.734 1.136-1.282-1-3.056 1.148-.773.187.092 1.149-1.102.268.895.533 1.793.802 2.688.507-.117 1.026-.194 1.537-.313-.419-.444-.852-.928-1.27-1.371.831-.236 1.639-.507 2.463-.739-.993-.855-1.998-1.704-3.002-2.553.019-.338.02-.714.036-1.051 1.489-.195 1.852-.521 2.635-.216.007-.051.011-.099.037-.113.282.185.567.368.86.594-.387-.272-.661-.414-.897-.481-.727 1.919-.581 1.047.817 2.54-.02.338-.017.712-.036 1.051.98-.688 1.972-1.334 2.949-2.019 1.327-.77-.008.004.932-1.507.434.482.852.926 1.286 1.409.386-.713.78-1.43 1.174-2.147 1.814.343 2.433.168 3.776-.376-.144 1.951.411.871-1.646 2.341l1.984.538c1.049-1.427 1.733-1.775 1.415-2.786 1.074.204-.036-.31-1.094.088l-.626-1.229c3.02-2.055.83-.799 4.713-1.886.637-1.591-.554-1.125.757-2.966.67 1.16.053 1.475 1.976.541.298 2.101.749.651-.515 2.328-.165.788-5.237 4.029-6.662 6.96.358-.041.735-.046 1.112-.05-.244.265-.469.567-.714.833 6.505-4.347 7.893-2.708 13.562-7.895-.093.563-.197 1.085-.289 1.648 2.034-1.552 1.155-1.668 2.041-1.556 1.465-1.732 1.175-1.584.776-2.929l.478-1.276c-.801.267-1.631.503-2.459.737.241 1.097.266.568 1.285 1.409-2.408.993-3.763-.663-6.931 1.984l-.816-1.602c3.113-1.211 1.769-.198 3.392-2.245.043.26 17.627-9.873 19.613-10.509 1.364-.414.363-.889.486-1.281a100.51 100.51 0 002.939-2.013c.662.179 1.321.359 1.976.542.67-3.486.849-1.23 2.166-4.67.651.185 1.314.363 1.972.543-2.187 1.021-1.718-.062-1.642 2.339 1.531-1.812 3.085-3.59 4.617-5.402-.254.973-.515 1.951-.776 2.928 3.224-2.675 2.396-2.534 5.28-5.224l1.322.359c-.879.823-.644-.188-.956 1.473l.904-.461c.606.583 1.847-2.49 3.026-4.076 1.298.23 3.793-.243 3.986.034.735-.046 1.47-.092 2.198-.135.046-2.182-1.247-.959 1.435-2.748-1.455-.667.211-.671-1.523-.773l-.209-.41c1.515-.209 2.566-.087 3.957 1.081l.447-.227.903-.461c-2.374-2.168-3.139-2.06-5.914-1.585.772-1.097 1.226-.812 2.463-.739l.45-.229c.085-.559.177-1.123.27-1.686l-2.251 1.147c.978-1.531 2.725-1.201 4.296-2.705.282.184.586.405.868.59-.638.982-1.25 1.997-1.888 2.979 1.468 1.411 1.966.172 3.053 1.542 1.337.445.056-.028.607 1.192.812-1.727 1.325-2.035-.121-2.472-.116-.973-.229-1.948-.337-2.878l2.254-1.149.19.373c-.539.79-1.082 1.583-1.628 2.378.57.741 1.136 1.485 1.688 2.19l.45-.23-.572-2.242c3.403-.045 4.015-.591 5.401-2.752.719.666 1.419 1.295 2.138 1.961 1.234-1.661 2.483-3.283 3.717-4.944-.401-1.626-.399-.407-.517-1.52-.183-.048-.378-.136-.554-.187-1.005.934-.888-.345-2.417.434-.228-.072-.445-.149-.651-.185l-.209-.409c.367-.375.764-.718 1.138-1.096.605.442 1.318.876 2.139 1.256a5.75 5.75 0 01.496-.534c.022.317.038.543.058.721 1.446.483 3.191.579 5.23-.366-.035.675-.052 1.387-.08 2.059.671-.155 1.35-.312 2.009-.508-.775-.777-1.57-1.593-2.346-2.37 1.61-.445 2.515-.766 3.78-.378l1.351-.688c-1.012-.846.049-.447-1.322-.359l.487-1.28c1.496.739.704.251 1.044 2.049 1.971-.067.154-.736 2.199-.136-.618-2.407.221-2.599-.514-4.336 3.082.541 1.737 2.352 4.026-1.019.57.742 1.136 1.486 1.68 2.194.694-.495 1.373-1.028 2.06-1.519-1.69-.265-.218-.218-2.009.507l-.626-1.229c-.113-.599-.249-1.234-.363-1.833l1.801-.918c.281.185.567.368.848.553-.526.456-1.045.909-1.591 1.328-.016.336-.017.712-.033 1.049 2.188-.646 1.269-1.116 2.46-.737.376-1.459.188-.284-.173-1.461 2.199-.135 2.913.346 5.095-.015.082-1.309.285-.755 1.174-2.146l.417.819c1.166.109-.286 1.038 2.167.914-.764-1.535.176-4.454 2.19-5.715-.651-.184-1.295-.325-1.954-.506.375-.378.752-.759 1.138-1.096l1.567-.282c-.281 2.255.549 1.41-.542 2.294 1.06 1.29.809 1.136 1.948 1.588.605-1.856.262-2.151-.755-3.698l2.254-1.148c.776.778 1.552 1.555 2.346 2.37.511-.119 1.03-.195 1.556-.276-.096-1.687-.177-3.335-.269-4.978.229-.304.474-.569.699-.872.777 1.434.367.564 1.929 1.551-.679.534-1.355 1.066-2.046 1.559.937.367 1.882.73 2.845 1.131-.044-1.244.028-1.516 1.861-3.013.954 1.907-.331 1.483 2.833 1.091-.451-2.164-.049-1.899-.546-3.289 3.193.016 2.357-.45 5.34-.655l-.33-2.882c1.272.712.883.629 1.471 1.784 1.221-.951 2.42-1.937 3.633-2.884-.559-.371-1.145-.777-1.712-1.145 2.813-.307 1.113.888 3.966-.003-.51-.256-1.012-.517-1.504-.736.877-.118 1.765-.242 2.649-.364.02-.338.029-.671.048-1.01-1.102-.001-.107.102-.864-.592-1.692.909-.834.285-2.041 1.557-.437-.481-.852-.927-1.289-1.408.529-.082 1.036-.2 1.559-.279-.854-.222 2.323-.01 3.817-1.428.426.111.861.218 1.314.363-.321.492-.631.978-.952 1.47 1.869-.295 3.018-1.819 4.794-3.944-.015 1.462.632.569-.081 2.058l.209.41c.78-1.429 1.579-2.822 2.367-4.256-1.421-.636-1.253-.675-3.086-.492l-1.025-2.012c2.025.424 1.076.015 1.929 1.551 2.341-1.052 2.282-.975 3.865-2.438.074 2.637-.635 2.717-1.108 5.632 2.213-1.127 1.776-1.515 2.704-1.378 1.308-1.745.953-2.268 1.287-5.254-1.082.223-.605.965-1.087.084-1.579.055-.014.008-1.076-.999-.06-.486-.116-.973-.176-1.459 2.1-.789 2.068.354 4.054-2.066-.258 2.666-1.389 3.664-.254 7.309.093-.939.183-1.876.257-2.853l-.152-.298c.068.013.123-.016.198-.007.017-.196.019-.432.036-.628.453.144.887.252 1.325.357l-1.361.271a5.014 5.014 0 00-.046.305l.683 1.341c1.777-1.984 2.832-3.601 5.679-4.441-.709-1.235.35-.508-1.058-.963.521-3.503 2.154-2.082 2.879-6.581l1.357-.692c-.4 1.237.159.294-.94 1.511.72.29 1.455.62 2.174.91-.735.047-1.471.093-2.218.098-.067 3.225-.336 5.051-1.986 6.126-.308.627-.504.445-.658-.18-.924 1.175-1.853 2.305-2.766 3.474 1.121-1.322 1.268-.271 2.902-.963-.317.49-.627.977-.948 1.469l.835 1.639c1.144-.771.18.096 1.138-1.096 1.092-.275.614-.313.699-.872 1.706-1.057 2.46.248 2.52-2.833l.454-.231-.069 2.1 8.383-5.82c.638-.982 1.25-1.998 1.888-2.98a37.263 37.263 0 01-.296 1.653c2.82-1.343 5.41-3.461 7.051-5.095.085-.559.178-1.122.27-1.686-1.254.123-2.519.251-3.754.411-.075-1.416.234-.166-.627-1.229l.479-1.276c3.884-1.885 4.914-2.551 8.025-3.855-1.563-.658-1.28-.802-2.781-.319.001-.375.016-.712.036-1.05 1.545.245 1.694.169 2.876 1.35.685-.302 1.474-.61 2.409-.993-.415-.445-.852-.927-1.267-1.372l1.182-2.151c.753 2.103.059.392 1.233 2.422l3.473-4.303a28.888 28.888 0 01-.29 1.648c.225.074.454.145.659.181 1.182-1.259.991-.411 1.406-1.702.038.075.152-.124-.209-.409l1.8-.918c-2.245-1.014-2.222-1.354-3.66-2.733l1.347-.686c1.372 1.6.662.178 1.233 2.421a58.22 58.22 0 001.833-1.966c.636 1.928.383 2.527 2.105 3.01-.558-.701-.54-2.118-.096-3.518l.627 1.23c1.985-.636.672.455 1.595-1.329.189.748.378 1.496.578 2.239 1.983-2.324 2.662-3.421 1.95-5.076 2.2.006.552-.469 1.731 1.183 1.626-1.204-.123-.5 1.801-.917.044-2.322-.657-1.777 1.21-3.198-1.567-.656-.442-.526-1.749-.094.245-.641.486-1.28.724-1.918 1.679 1.632.902 2.497 3.181 4.01-2.306 3.474-10.306 8.067-13.143 8.715.361.332.718.666 1.069 1.004-1.831 1.777-3.858 1.403-5.819 1.932 1.526 1.147.238 1.615 2.375 1.324.863-.44.759.036.506-1.243 1.893-.542 3.157-.764 5.774-.925-.954-1.531-.007-.465-1.27-1.37 2.672-.752 1.898.018 5.35-1.741-.419-.443-.845-.93-1.263-1.374 1.773-.106 1.428.07 2.672-.329.291-.524.611-1.016.929-1.506-.282-.185-.586-.405-.868-.59 1.729.433.774.169 1.494 1.82 3-3.078 4.113-5.381 8.383-5.82l.27-1.686c1.203-1.27-.736-.939-1.922-1.555.77-1.377.212-.624 1.592-1.327-1.475-1.266-.448-.945-1.98-.539a69.085 69.085 0 001.643-2.339c1.063 1.241 1.072.532 1.478 1.78 3.41-2.347.943-2.967 4.537-3.344-.385-1.915-.046-1.994-1.205-3.468.245-.265.47-.568.714-.833 1.148 1.057.499 1.153 1.929 1.551 1.507.686 2.235-.81 3.565-.784 1.02-1.787.754-1.37.306-2.737 2.033.09.083.99 2.877.083l.453-.232-1.024-2.011a84.152 84.152 0 012.286-2.198c-.518 1.531-.62 1.349-.541 2.294-.347.036-.725.041-1.106.047.362.332.723.664 1.081.998l1.346-.686c1.083-.974.656-.616 2.013-.509-.707 1.205-1.422 2.413-2.126 3.617-1.962-1.065-6.891 3.652-9.077 6.69-1.254-.769.467-.849-1.073-1.002-1.63-.109-2.769 2.114-5.441 3.804-.085.56-.178 1.123-.27 1.686 2.586.137 1.344.348 3.147-1.603a48.978 48.978 0 00-.289 1.649c6.61-3.791 13.442-12.856 19.484-12.978l.776-2.929c.225-.303.451-.605.695-.87-1.754 1.128-.715.27-1.856 1.931l-.816-1.603c-1.383 1.737-1.305 1.182-.991 2.524-1.689-1.017-.887-.581-.784-2.651-1.482.145-.888.077-2.006.505 1.141-2.129 4.902-.808 5.643-3.391.452-.84.572-.761-.399-.782.902-1.21 2.476-.511 4.714-1.885l1.99-.545c-.23 2.51.61 1.613-1.833 1.966-.406 1.052-.816 2.105-1.21 3.198.036-1.051.068-2.1.105-3.151-.876.774-.382.335-1.383 1.737-.338 1.204-.671 2.407-1.02 3.57l.896-.457.418.82c.829-1.784.54-.604.087-2.063 4.12.435 6.309-2.229 10.304-4.265.204-1.089.389-2.215.567-3.338.105 1.025.172.569 1.112-.051-.168.414-.336.829-.486 1.28 2.818-.309 7.048-3.263 6.165-5.722 2.56-.272 1.638.292 3.359-1.195-.092.563-.177 1.122-.27 1.686.97-.682 1.969-1.332 2.938-2.014-.804-1.56-.436-.856-1.684-2.192 4.018.675 4.006-2.134 6.244-2.899-.138.023-.291-.04-.381-.088.347-.036.724-.04 1.101-.044-.276 0-.503.068-.72.132 2.246.076 8.404-6.487 8.721-7.822-.225.302-.45.604-.695.87.853-2.171 2.548-2.706 2.403-5.307 2.215-.002.183.892 2.218-.098.526-.08 1.037-.199 1.563-.28a126.266 126.266 0 01-1.948-1.588c.988-.222.456.425.904-.461 1.444.203.979.018 2.185.951 2.216-3.569 2.831-4.679 8.174-6.229-.567-.368-1.153-.773-1.72-1.141 1.254-.123 2.519-.252 3.773-.374-.993-.855-1.997-1.704-2.998-2.555 1.319-.015 2.653.009 3.971-.006-.056-.487-.124-.969-.18-1.456l-1.141 1.097-1.058-.962c1.647-.511 1.228-1.002 2.737-2.427-.225.302-.47.568-.695.87 2.259.867 3.853.289 4.472-1.246-.245.265-.47.568-.707.829 1.463-3.795 25.955-24.205 27.434-25.193-.719-.666-1.411-1.299-2.13-1.965 2.579-1.173 4.479-3.971 6.662-6.961 2.53-.819 1.347-3.454 1.741-5.485 2.121-.048.709-1.018 2.427.312 1.148-1.664.754-1.792 1.66-3.427-.418-.444-.852-.926-1.27-1.37l1.302.321c1.652-.372.033.781 2.881.081l-.418-.819c.497-.065 1.422-4.244 1.078-5.664 14.047-2.418 24.539-26.628 36.831-34.439l.006-.144c.041.026.079.054.094.046A31.57 31.57 0 01761 238.6c-.229-1.573-.462-3.143-.692-4.715l2.25-1.147c-.53.035 19.403-17.582 19.403-17.582.647-1.69 1.302-3.384 1.949-5.075l-1.443-2.831c-1.515 1.1-3.014 2.239-4.536 3.344.791-2.328-.058-2.036 1.016-3.568.732.94-.314.441 1.061.961zM85.569 543.99c.011-.053.037-.066.067-.081-.585.204-.711.268-.067.081z" fill="currentColor"/></svg>              </div>

                    <!-- Image -->
                    <div class="img-skewed img-skewed-start">

                        <!-- Image -->
                        <img src="assets/img/screenshots/desktop/dashkit.jpg" class="screenshot img-fluid img-skewed-item" alt="...">

                    </div>

                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- TESTIMONIALS -->
<section class="pt-10 pt-md-12">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">

                <!-- Heading -->
                <h2>
                    Our customers are our biggest fans.
                </h2>

                <!-- Text -->
                <p class="fs-lg text-muted mb-7 mb-md-9">
                    We don't like to brag, but we don't mind letting our customers do it for us. Here are a few nice things folks have said about our themes over the years.
                </p>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12">

                <!-- Card -->
                <div class="card card-row shadow-light-lg mb-6">
                    <div class="row gx-0">
                        <div class="col-12 col-md-6">

                            <!-- Slider -->
                            <div class="card-img-slider" data-flickity='{"fade": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "asNavFor": "#blogSlider", "draggable": false}'>
                                <a class="card-img-start position-absolute d-block w-100 bg-cover" style="background-image: url(assets/img/photos/photo-1.jpg);" href="#!">

                                    <!-- Image (placeholder) -->
                                    <img src="assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

                                </a>
                                <a class="card-img-start position-absolute d-block w-100 bg-cover" style="background-image: url(assets/img/photos/photo-26.jpg);" href="#!">

                                    <!-- Image (placeholder) -->
                                    <img src="assets/img/photos/photo-26.jpg" alt="..." class="img-fluid d-md-none invisible">

                                </a>
                            </div>

                            <!-- Shape -->
                            <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>                  </div>

                        </div>
                        <div class="col-12 col-md-6 position-md-static">

                            <!-- Slider -->
                            <div class="position-md-static" data-flickity='{"wrapAround": true, "pageDots": false, "adaptiveHeight": true}' id="blogSlider">
                                <div class="w-100">

                                    <!-- Body -->
                                    <div class="card-body">
                                        <blockquote class="blockquote text-center mb-0">

                                            <!-- Brand -->
                                            <div class="row justify-content-center mb-5 mb-md-7">
                                                <div class="col-6 col-sm-4 col-md-7 col-lg-5">

                                                    <!-- Logo -->
                                                    <div class="img-fluid" style="color: #FF5A5F;">
                                                        <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M1447.629 301.83c0 28.119-22.658 50.76-50.777 50.76-28.118 0-50.76-22.641-50.76-50.76s21.87-50.76 50.76-50.76c28.915.78 50.777 23.43 50.777 50.76zm-209.316 102.317v12.5s-24.202-31.256-75.75-31.256c-85.121 0-151.517 64.828-151.517 154.638 0 89.037 65.615 154.638 151.517 154.638 52.328 0 75.75-32.02 75.75-32.02v13.271c0 6.25 4.697 10.923 10.939 10.923h63.252V393.177h-63.252c-6.242.024-10.939 5.5-10.939 10.97zm0 188.21c-11.703 17.189-35.14 32.028-63.251 32.028-49.98 0-88.258-31.24-88.258-84.356 0-53.11 38.277-84.349 88.258-84.349 27.338 0 52.328 15.62 63.251 32.02v104.658zm121.058-199.156h74.97v293.664h-74.97V393.2zm1119.954-7.818c-51.548 0-75.766 31.255-75.766 31.255V251.85h-74.97v435.015h63.267c6.25 0 10.923-5.47 10.923-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623s-66.38-154.669-150.722-154.669zm-12.499 238.214c-28.906 0-51.548-14.824-63.267-32.02V486.92c11.719-15.62 36.709-32.02 63.267-32.02 49.98 0 88.25 31.24 88.25 84.349 0 53.109-38.261 84.348-88.25 84.348zm-177.28-110.891v174.939h-74.985V521.288c0-48.412-15.62-67.949-57.767-67.949-22.642 0-46.08 11.72-60.942 28.907v204.626h-74.955V393.21h59.335c6.25 0 10.938 5.469 10.938 10.938v12.5c21.87-22.658 50.76-31.256 79.652-31.256 32.808 0 60.147 9.386 82.016 28.126 26.543 21.87 36.709 49.98 36.709 99.189zm-450.65-127.323c-51.532 0-75.75 31.255-75.75 31.255V251.85h-74.97v435.015h63.251c6.25 0 10.939-5.47 10.939-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623.78-89.045-65.6-154.669-150.737-154.669zm-12.498 238.214c-28.891 0-51.533-14.824-63.252-32.02V486.92c11.719-15.62 36.709-32.02 63.252-32.02 49.996 0 88.257 31.24 88.257 84.349 0 53.109-38.261 84.348-88.257 84.348zm-203.05-238.214c22.641 0 34.36 3.917 34.36 3.917v69.5s-62.48-21.088-101.52 23.438v205.399H1481.2V393.2h63.267c6.25 0 10.923 5.469 10.923 10.938v12.5c14.075-16.409 44.535-31.256 67.957-31.256zM844.705 660.306c-3.901-9.37-7.81-19.52-11.711-28.119-6.258-14.051-12.507-27.338-17.96-39.83l-.781-.78c-53.897-117.156-111.68-235.858-172.606-352.999l-2.34-4.696a1536.65 1536.65 0 01-18.734-36.71c-7.817-14.067-15.62-28.89-28.119-42.958-24.99-31.24-60.918-48.427-99.18-48.427-39.057 0-74.198 17.188-99.96 46.859-11.72 14.052-20.317 28.891-28.12 42.958a1695.173 1695.173 0 01-18.732 36.71l-2.349 4.696c-60.138 117.141-118.709 235.85-172.598 353l-.788 1.552c-5.462 12.514-11.719 25.786-17.968 39.83-3.901 8.597-7.803 17.968-11.704 28.118-10.158 28.892-13.287 56.23-9.37 84.357 8.59 58.578 47.632 107.763 101.529 129.647 20.309 8.598 41.398 12.5 63.26 12.5 6.249 0 14.051-.78 20.308-1.569 25.779-3.12 52.33-11.703 78.107-26.543 32.02-17.968 62.48-43.73 96.84-81.22 34.36 37.49 65.6 63.252 96.84 81.22 25.786 14.84 52.329 23.422 78.1 26.543 6.249.796 14.066 1.568 20.316 1.568 21.87 0 43.73-3.9 63.252-12.499 54.677-21.884 92.938-71.85 101.536-129.647 6.203-27.331 3.082-54.654-7.068-83.56zm-352.219 40.61c-42.178-53.109-69.517-103.09-78.88-145.252-3.9-17.968-4.688-33.588-2.34-47.647 1.553-12.5 6.25-23.438 12.499-32.808 14.84-21.074 39.83-34.36 68.729-34.36 28.907 0 54.677 12.498 68.736 34.36 6.25 9.37 10.931 20.316 12.507 32.808 2.333 14.067 1.553 30.46-2.348 47.647-9.402 41.383-36.74 91.37-78.903 145.252zm311.6 36.71c-5.46 40.61-32.8 75.765-71.06 91.385-18.742 7.802-39.058 10.15-59.352 7.802-19.52-2.348-39.057-8.598-59.35-20.3-28.119-15.636-56.23-39.83-89.038-75.767 51.54-63.252 82.78-121.058 94.5-172.59 5.469-24.218 6.257-46.08 3.9-66.397-3.113-19.52-10.15-37.489-21.081-53.109-24.226-35.156-64.843-55.45-110.127-55.45-45.283 0-85.901 21.09-110.111 55.45-10.93 15.62-17.968 33.588-21.09 53.11-3.12 20.316-2.348 42.958 3.902 66.395 11.71 51.533 43.73 110.112 94.491 173.371-32.02 35.929-60.919 60.147-89.037 75.766-20.31 11.72-39.822 17.969-59.343 20.302a124.96 124.96 0 01-59.359-7.803c-38.261-15.62-65.6-50.776-71.061-91.386-2.341-19.52-.788-39.042 7.03-60.91 2.332-7.819 6.249-15.62 10.15-24.991 5.47-12.499 11.703-25.786 17.96-39.057l.788-1.553c53.882-116.376 111.672-235.085 171.81-350.666l2.341-4.697c6.258-11.703 12.507-24.202 18.749-35.92 6.25-12.5 13.271-24.219 21.87-34.377 16.4-18.725 38.26-28.891 62.478-28.891 24.218 0 46.08 10.166 62.48 28.891 8.598 10.182 15.62 21.9 21.87 34.376 6.256 11.719 12.506 24.218 18.74 35.921l2.348 4.697a10341.109 10341.109 0 01171.038 351.446v.78c6.257 12.515 11.719 26.559 17.968 39.073 3.901 9.355 7.81 17.157 10.15 24.975 6.235 20.285 8.575 39.822 5.447 60.123z" fill="currentColor" fill-rule="nonzero"/></svg>                              </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Text -->
                                            <p class="mb-5 mb-md-7">
                                                “Landkit is hands down the most useful front end Bootstrap theme I've ever used. I can't wait to use it again for my next project.”
                                            </p>

                                            <!-- Footer -->
                                            <footer class="blockquote-footer">
                                                <span class="h6 text-uppercase">Dave Gamache</span>
                                            </footer>

                                        </blockquote>
                                    </div>

                                </div>
                                <div class="w-100">

                                    <!-- Body -->
                                    <div class="card-body">
                                        <blockquote class="blockquote text-center mb-0">

                                            <!-- Brand -->
                                            <div class="row justify-content-center mb-5 mb-md-7">
                                                <div class="col-6 col-sm-4 col-md-7 col-lg-5">

                                                    <!-- Logo -->
                                                    <div class="img-fluid" style="color: #3F5D87;">
                                                        <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M273.497 198.251c-22.863 0-52.502 24.245-69.987 40.383-38.441 34.122-73.259 96.865-73.259 147.225 0 71.56 60.859 98.571 76.252 98.571 5.075 0 9.401-2.617 9.401-9.504 0-5.398-3.423-9.89-6.829-14.505-14.094-21.546-18.621-42.11-18.621-69.845 0-57.825 26.67-110.828 48.791-135.082 4.08-4.39 13.296-13.872 16.054-13.872 2.738 0 3.416 2.23 3.416 9.122l-2.57 378.481c0 59.167-17.072 82.67-17.072 96.602 0 6.121 2.65 7.71 7.71 7.71 23.959 0 47.835-29.202 54.6-39.852 20.976-36.232 26.12-64.515 26.12-146.097V229.55c0-8.609-2.414-12.33-10.592-17.638-11.96-7.595-25.664-13.66-43.414-13.66zm685.043 1.056c-11.268 0-16.086 5.891-16.619 24.12l-2.5 75.475-66.008-2.287c-4.004-.103-5.814 1.163-7.565 4.682-5.606 10.51-8.556 18.746-8.556 32.46 0 11.166 5.062 12.357 9.577 12.357l68.678 1.972-.21 144.197c0 30.583-19.3 70.258-53.543 103.256 0 0 2.945-9.963 2.777-20.415 0-29.588-19.041-56.4-44.427-75.373l-61.96-46.612c12.989-15.025 34.993-44.825 34.993-69.988 0-19.51-12.267-27.705-35.135-27.705-32.275 0-69.705 29.56-69.705 73.401 0 15.981 7.11 30.365 17.918 41.366-14.922 28.314-36.036 65.566-51.714 92.095-11.842 20.313-31.874 51.434-43.726 51.434-8.739 0-12.778-13.749-12.778-66.571 0-43.887 3.118-91.602 4.682-137.403 0-10.498-1.722-20.183-15.35-29.677-12.538-8.033-28.02-19.252-43.97-19.252-35.455 0-59.609 32.625-76.178 64.527-17.147 33.063-26.419 60.926-39.5 101.352l1.444-139.127c.446-9.92-2.06-13.772-9.997-17.147-10.298-4.367-25.456-9.402-38.901-9.402-11.237 0-12.603 4.845-12.603 16.651l-1.512 166.94-.172 64.387c0 58.05 7.27 67.73 41.716 67.73 19.072 0 25.18-2.24 25.559-18.093.523-10.485 5.538-35.888 12.322-61.364 19.842-75.195 43.353-134.67 83.891-180 4.227-4.4 7.495-2.825 6.83 3.413 0 0-6.41 101.765-6.41 143.389 0 74.03 11.392 112.658 48.227 112.658 36.15 0 71.656-46.45 91.038-77.806l62.175-103.994c40.288 34.33 68.4 60.946 68.4 93.326 0 20.125-12.697 39.815-32.039 39.815-24.171 0-39.614-25.49-55.94-25.49-13.552 0-30.944 26.16-30.944 41.016 0 14.024 30.603 33.863 85.513 33.863 81.059 0 124.542-55.628 150.638-117.23 4.995 73.114 34.127 115.822 79.562 115.822 29.803 0 64.247-37.653 79.915-83.647 0 0 1.547 11.94 13.446 36.402 16.38 31.944 41.28 46.611 72.208 46.611 38.468 0 71.371-23.32 91.459-62.452 3.045 29.652 27.943 62.307 67.98 62.307 25.133 0 48.046-19.257 63.086-50.976 0 0 19.482 52.388 75.83 52.388 31.65 0 69.127-29.32 78.084-50.623l.986 30.98-83.606 77.1c-24.277 23.566-50.1 57.425-50.1 94.913 0 47.677 45.015 75.092 84.63 75.092 41.178 0 68.5-26.088 83.468-47.948 18.836-28.285 26.792-81.596 26.792-133.708l-1.867-78.361c56.349-61.94 100.45-147.553 120.083-208.129l42.772-1.126c8.286-.558 7.873 2.705 6.727 7.535-7.517 31.767-14.082 67.743-14.082 103.571 0 59.192 13.634 84.95 33.231 106.001 17.04 17.638 33.984 23.587 51.82 23.587 34.88 0 56.776-28.804 63.72-46.962 16.38 31.944 40.509 46.821 71.43 46.821 38.47 0 71.374-23.32 91.464-62.452 3.045 29.652 27.938 62.307 67.978 62.307 29.912 0 47.262-17.26 60.906-49.78.275 10.46.678 21.612.986 32.068.36 5.41 4.685 8.833 8.556 10.245 12.715 4.812 23.876 7.22 33.901 7.22 26.147 0 31.825-5.37 31.825-22.463 0-28.19.826-72.733 8.836-108.496 8.504-35.606 21.337-75.914 39.044-103.96 1.594-2.897 5.5-2.136 5.67 1.375 2.543 60.007 6.557 161.589 22.32 187.885 7.779 12.543 19.808 21.685 37.809 21.685 8.44 0 18.788-3.6 21.436-5.844 2.683-2.092 4.034-4.417 3.871-8.729 0-76.711 23.924-150.978 47.88-200.91.659-1.482 2.526-1.597 2.463.352l-1.336 55.273c0 90.78 6.544 148.133 51.89 175.706a59.42 59.42 0 0029.184 7.565c23.2 0 44.239-12.958 54.637-33.796 8.47-16.194 16.406-47.363 16.406-65.018 0-6.834.08-17.958-11.123-17.958-6.144 0-9.835 4.53-11.304 11.371-3.571 14.83-6.502 27.548-12.042 42.21-5.296 13.997-13.198 22.147-22.568 22.147-11.006 0-16.591-8.66-19.785-14.014-14.044-21.421-15.17-70.63-15.17-111.704l3.381-105.718c0-8.747-3.651-19.215-17.147-26.932-9.06-5.215-31.972-15.033-46.011-15.033-13.018 0-19.32 7.373-24.012 18.196-8.811 19.44-38.255 95.688-46.15 157.68-.284 1.634-2.32 1.98-2.463-.105-4.104-43.839-6.21-96.66-6.164-132.295 0-10.773-2.635-26.173-25.488-36.153-11.106-4.608-20.293-7.428-31.512-7.428-13.919 0-16.912 6.812-21.897 15.838-15.768 29.135-26.671 67.128-43.015 115.05l.248-109.66c0-5.127-3.143-11.848-12.147-13.658-22.325-5.13-32.668-7.46-41.47-7.46-6.408 0-9.93 5.108-9.93 10.63l-1.198 186.973c-4.32 22.888-21.82 77.52-46.647 77.52-20.378 0-29.887-20.646-29.887-106.947l3.698-140.258c0-8.859-5.815-12.58-14.291-16.331-12.12-4.815-21.762-6.727-34.08-6.727-15.46 0-20.765 7.4-17.637 25.175-16.995-22.993-33.984-35.7-64-35.7-60.26 0-105.682 72.485-105.682 177.82-.591 29.537 6.546 58.894 6.546 58.894-5.453 24.515-18.27 44.497-35.978 44.497-22.34 0-36.577-31.584-36.577-86.321 0-54.9 20.91-116.82 20.91-133.602 0-19.512-12.784-31.856-35.415-31.856-11.336 0-53.39 9.54-74.95 12.67 0 0 2.433-10.268 2.253-18.341 0-19.24-9.027-31.296-31.437-31.296-27.385 0-47.492 19.554-47.492 52.915 0 14.967 8.62 28.816 20.032 36.256-14.812 61.782-38.896 107.728-74.387 159.057l2.99-207.848c0-6.757-1.799-10.954-15.034-16.091-6.997-3.023-18.401-6.514-32.776-6.514-20.833 0-19.454 14.877-18.34 26.016-9.533-16.902-30.4-36.965-62.596-36.965-87.732 0-114.667 133.784-101.459 228.794 0 11.584-11.311 52.703-36.86 52.703-20.377 0-29.887-20.646-29.887-106.947l3.734-140.258c0-8.861-5.856-12.582-14.332-16.331-12.12-4.815-21.726-6.727-34.044-6.727-15.463 0-20.768 7.4-17.64 25.173-16.994-22.993-34.019-35.701-64.036-35.701-60.26 0-106.284 66.291-106.284 171.622 0 40.208-34.62 101.564-58.897 101.564-13.486 0-27.845-24.757-27.845-88.01.067-43.116 5.948-189.893 5.948-189.893l84.738-1.374c4.044-.038 6.386-4.457 7.885-7.18 3.891-7.895 5.773-13.153 5.773-22.6 0-8.523-1.706-11.637-12.637-12.252l-84.457-5.07 3.593-78.679c.253-4.967-2.745-8.206-8.168-10.63-16.349-6.394-36.399-12.578-49.097-12.58zm256.462 206.157c22.593 0 45.518 20.605 45.518 93.711 0 92.047-33.533 134.872-59.32 134.872-24.173 0-42.524-34.121-42.524-101.143 0-67.746 17.92-127.44 56.326-127.44zm813.642 0c22.593 0 45.518 20.605 45.518 93.711 0 92.047-33.533 134.872-59.32 134.872-24.173 0-42.527-34.121-42.527-101.143.003-67.746 17.923-127.44 56.329-127.44zm-516.059.423c29.484 0 42.528 30.39 42.528 89.309 0 88.831-26.407 139.41-58.476 139.41-20.473 0-44.015-33.617-42.773-99.735 0-42.275 13.783-128.984 58.721-128.984zm49.917 297.162v34.99c0 116.106-30.938 135.924-55.798 135.924-9.42 0-32.492-7.115-32.492-35.839 0-40.152 41.98-85.83 55.025-99.945l33.265-35.13z" fill="currentColor" fill-rule="nonzero"/></svg>                              </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Text -->
                                            <p class="mb-5 mb-md-7">
                                                “I've never used a theme as versatile and flexible as Landkit. It's my go to for building landing sites on almost any project.”
                                            </p>

                                            <!-- Footer -->
                                            <footer class="blockquote-footer">
                                                <span class="h6 text-uppercase">Russ D'Sa</span>
                                            </footer>

                                        </blockquote>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div> <!-- / .row -->
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- SHAPE -->
<div class="position-relative mt-n8">
    <div class="shape shape-bottom shape-fluid-x text-gray-200">
        <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>      </div>
</div>

<!-- STATS -->
<section class="pt-12 pt-md-13 bg-gray-200">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">

                <!-- Image -->
                <img src="assets/img/illustrations/illustration-8.png" alt="..." class="img-fluid mb-6 mb-md-0">

            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1">

                <!-- Heading -->
                <h2>
                    Stay focused on your business. <br>
                    <span class="text-primary">Let us handle the design</span>.
                </h2>

                <!-- Text -->
                <p class="fs-lg text-gray-700 mb-6">
                    You have a business to run. Stop worring about cross-browser bugs, designing new pages, keeping your components up to date. Let us do that for you.
                </p>

                <!-- Stats -->
                <div class="d-flex">
                    <div class="pe-5">
                        <h3 class="mb-0">
                            <span data-countup='{"startVal": 0}' data-to="100" data-aos data-aos-id="countup:in"></span>%
                        </h3>
                        <p class="text-gray-700 mb-0">
                            Satisfaction
                        </p>
                    </div>
                    <div class="border-start border-gray-300"></div>
                    <div class="px-5">
                        <h3 class="mb-0">
                            <span data-countup='{"startVal": 0}' data-to="24" data-aos data-aos-id="countup:in"></span>/
                            <span data-countup='{"startVal": 0}' data-to="7" data-aos data-aos-id="countup:in"></span>
                        </h3>
                        <p class="text-gray-700 mb-0">
                            Support
                        </p>
                    </div>
                    <div class="border-start border-gray-300"></div>
                    <div class="ps-5">
                        <h3 class="mb-0">
                            <span data-countup='{"startVal": 0}' data-to="100" data-aos data-aos-id="countup:in"></span>k+
                        </h3>
                        <p class="text-gray-700 mb-0">
                            Sales
                        </p>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- PRICING -->
<section class="pt-9 pt-md-12 bg-gray-200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">

                <!-- Heading -->
                <h1>
                    Fair, simple pricing for all.
                </h1>

                <!-- Text -->
                <p class="lead text-gray-700">
                    All types of businesses need access to development resources, so we give you the option to decide how much you need to use.
                </p>

                <!-- Form -->
                <form class="d-flex align-items-center justify-content-center mb-7 mb-md-9">

                    <!-- Label -->
                    <span class="text-muted">
                Annual
              </span>

                    <!-- Switch -->
                    <div class="form-check form-switch mx-3">
                        <input class="form-check-input" type="checkbox" id="billingSwitch" data-toggle="price" data-target=".price">
                    </div>

                    <!-- Label -->
                    <span class="text-muted">
                Monthly
              </span>

                </form>

            </div>
        </div> <!-- / .row -->
        <div class="row align-items-center gx-0">
            <div class="col-12 col-md-6">

                <!-- Card -->
                <div class="card rounded-lg shadow-lg mb-6 mb-md-0" style="z-index: 1;" data-aos="fade-up">

                    <!-- Body -->
                    <div class="card-body py-6 py-md-8">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-9">

                                <!-- Badge -->
                                <div class="text-center mb-5">
                      <span class="badge rounded-pill bg-primary-soft">
                        <span class="h6 fw-bold text-uppercase">Standard</span>
                      </span>
                                </div>

                                <!-- Price -->
                                <div class="d-flex justify-content-center">
                                    <span class="h2 mb-0 mt-2">$</span>
                                    <span class="price display-2 mb-0" data-annual="29" data-monthly="49">29</span>
                                    <span class="h2 align-self-end mb-1">/mo</span>
                                </div>

                                <!-- Text -->
                                <p class="text-center text-muted mb-6 mb-md-8">
                                    per seat
                                </p>

                                <!-- Features -->
                                <div class="d-flex">

                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                                        <i class="fe fe-check"></i>
                                    </div>

                                    <!-- Text -->
                                    <p>
                                        Rich, responsive landing pages
                                    </p>

                                </div>
                                <div class="d-flex">

                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                                        <i class="fe fe-check"></i>
                                    </div>

                                    <!-- Text -->
                                    <p>
                                        100+ styled components
                                    </p>

                                </div>
                                <div class="d-flex">

                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                                        <i class="fe fe-check"></i>
                                    </div>

                                    <!-- Text -->
                                    <p>
                                        Flexible, simple license
                                    </p>

                                </div>
                                <div class="d-flex">

                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                                        <i class="fe fe-check"></i>
                                    </div>

                                    <!-- Text -->
                                    <p>
                                        Speedy build tooling
                                    </p>

                                </div>
                                <div class="d-flex">

                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle bg-success-soft mt-1 me-4">
                                        <i class="fe fe-check"></i>
                                    </div>

                                    <!-- Text -->
                                    <p class="mb-0">
                                        6 months free support included
                                    </p>

                                </div>

                            </div>
                        </div> <!-- / .row -->
                    </div>

                    <!-- Button -->
                    <a href="#!" class="card-btn btn w-100 btn-lg btn-primary">
                        Get it now
                    </a>

                </div>

            </div>
            <div class="col-12 col-md-6 ms-md-n3">

                <!-- Card -->
                <div class="card rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">

                    <!-- Body -->
                    <div class="card-body py-6 py-md-8">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">

                                <!-- Badge -->
                                <p class="text-center mb-8 mb-md-11">
                      <span class="badge rounded-pill bg-primary-soft">
                        <span class="h6 fw-bold text-uppercase">Enterprise</span>
                      </span>
                                </p>

                                <!-- Text -->
                                <p class="lead text-center text-muted mb-0 mb-md-10">
                                    We offer variable pricing with discounts for larger organizations. Get in touch with us and we’ll figure out something that works for everyone.
                                </p>

                            </div>
                        </div> <!-- / .row -->
                    </div>

                    <!-- Button -->
                    <a href="#!" class="card-btn btn w-100 btn-lg btn-light bg-gray-300 text-gray-700">
                        Contact us
                    </a>

                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- SHAPE -->
<div class="position-relative mt-n15">
    <div class="shape shape-bottom shape-fluid-x text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
</div>

<!-- FAQ -->
<section class="pt-15 bg-dark">
    <div class="container pt-8 pt-md-11">
        <div class="row">
            <div class="col-12 col-md-6">

                <!-- Item -->
                <div class="d-flex">

                    <!-- Badge -->
                    <div class="badge badge-lg badge-rounded-circle bg-success">
                        <span>?</span>
                    </div>

                    <div class="ms-5">

                        <!-- Heading -->
                        <h4 class="text-white">
                            Can I use Landkit for my clients?
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-6 mb-md-8">
                            Absolutely. The Bootstrap Themes license allows you to build a website for personal use or for a client.
                        </p>

                    </div>

                </div>

                <!-- Item -->
                <div class="d-flex">

                    <!-- Badge -->
                    <div class="badge badge-lg badge-rounded-circle bg-success">
                        <span>?</span>
                    </div>

                    <div class="ms-5">

                        <!-- Heading -->
                        <h4 class="text-white">
                            Do I get free updates?
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-6 mb-md-0">
                            Yes. We update all of our themes with each Bootstrap update, plus are constantly adding new components, pages, and features to our themes.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-12 col-md-6">

                <!-- Item -->
                <div class="d-flex">

                    <!-- Badge -->
                    <div class="badge badge-lg badge-rounded-circle bg-success">
                        <span>?</span>
                    </div>

                    <div class="ms-5">

                        <!-- Heading -->
                        <h4 class="text-white">
                            Is there a money back guarantee?
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-6 mb-md-8">
                            Yup! Bootstrap Themes come with a satisfaction guarantee. Submit a return and get your money back.
                        </p>

                    </div>

                </div>

                <!-- Item -->
                <div class="d-flex">

                    <!-- Badge -->
                    <div class="badge badge-lg badge-rounded-circle bg-success">
                        <span>?</span>
                    </div>

                    <div class="ms-5">

                        <!-- Heading -->
                        <h4 class="text-white">
                            Does it work with Rails? React? Laravel?
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-6 mb-md-0">
                            Yes. Landkit has basic CSS/JS files you can include. If you want to enable deeper customization, you can integrate it into your assets pipeline or build processes.
                        </p>

                    </div>

                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- CTA -->
<section class="py-8 py-md-11 bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">

                <!-- Badge -->
                <span class="badge rounded-pill bg-gray-700-soft mb-4">
              <span class="h6 fw-bold text-uppercase">Get started</span>
            </span>

                <!-- Heading -->
                <h1 class="display-4 text-white">
                    Get Landkit and save your time.
                </h1>

                <!-- Text -->
                <p class="fs-lg text-muted mb-6 mb-md-8">
                    Stop wasting time trying to do it the "right way" and build a site from scratch. Landkit is faster, easier, and you still have complete control.
                </p>

                <!-- Button -->
                <a href="https://themes.getbootstrap.com/product/landkit/" target="_blank" class="btn btn-success lift">
                    Buy it now <i class="fe fe-arrow-right"></i>
                </a>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- SHAPE -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
</div>

<!-- FOOTER -->
<footer class="py-8 py-md-11 bg-gray-200">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

                <!-- Brand -->
                <img src="assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-2">

                <!-- Text -->
                <p class="text-gray-700 mb-2">
                    A better way to build.
                </p>

                <!-- Social -->
                <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item me-3">
                        <a href="#!" class="text-decoration-none">
                            <img src="assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                    <li class="list-inline-item list-social-item">
                        <a href="#!" class="text-decoration-none">
                            <img src="assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="...">
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Products
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Services
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Pagebuilder
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Connect
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

                <!-- Heading -->
                <h6 class="fw-bold text-uppercase text-gray-700">
                    Legal
                </h6>

                <!-- List -->
                <ul class="list-unstyled text-muted mb-0">
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Pagebuilder
                        </a>
                    </li>
                </ul>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>

<!-- JAVASCRIPT -->
<!-- Map JS -->
{{--
<script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
--}}

<!-- Vendor JS -->
<script src="assets/js/vendor.bundle.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.bundle.js"></script>

</body>

<!-- Mirrored from landkit.goodthemes.co/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jan 2023 01:16:05 GMT -->
</html>
