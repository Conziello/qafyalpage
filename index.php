
<?php 
include 'db_fns.php';
?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from theme-land.com/sApp/demo/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jun 2020 09:55:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>QAFYA</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body class="homepage-5">
    <!--====== Preloader Area Start ======-->
    <div class="preloader-main">
        <div class="preloader-wapper">
            <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                <defs>
                    <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                    <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                </g>
            </svg>
            <div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div>

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo/logo-white.png" alt="brand-logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo/logo.png" alt="sticky brand-logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-inner">
                    <!--  Mobile Menu Toggler -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                              
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll" href="#features">Features</a>
                            </li>

                            
                            <!-- <li class="nav-item">
                                <a class="nav-link scroll" href="#screenshots">Screenshots</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#pricing">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-lg-7">
                        <div class="welcome-intro">
                            <h1 class="text-white">Stay connected with us</h1>
                            <p class="text-white my-4">Explore profitable tips and free downloadable social media content on ways to improve your business operations using our technical business systems.</p>
                            <!-- Store Buttons -->
                            <div class="button-group store-buttons d-flex">
                                <a href="#" class="btn sApp-btn text-uppercase">Start Today</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-5">
                        <!-- Contact Box -->
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                            <!-- Contact Form -->
                            <form  method="POST" action="process.php">
                                <div class="contact-top">
                                    <!-- <h3 class="contact-title">Get started </h3> -->
                                    <h5 class="text-secondary fw-3 py-3">Fill all fields so we can get some info about you. We'll never send you spam</h5>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="location" placeholder="Location" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="business" placeholder="Line of business" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="submit" name="submit">Send Message</button>
                                        <div class="contact-bottom">
                                            <span class="d-inline-block mt-3">By signing up, you accept our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- <p class="form-message"></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Features Area Start ***** -->
        <section id="features" class="section features-area style-two overflow-hidden ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                                <i class="far fa-lightbulb text-primary mr-1"></i>
                                <span class="text-primary">Some of the Premium</span>
                                Features of Q-Afya
                            </span>
                            <h2>Improves Hospital Management</h2>
                            <p class="d-none d-sm-block mt-4">The implementation of hospital management system project provides the institution with different advantages that improve the service quality and efficiency. As mentioned above it is created for three groups of users: patients, hospital staff and management, and third-parties like drug suppliers and insurance companies. </p>
                            <!-- <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/layers.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Digital medical records</h3>
                                <p>The hospital database includes all the necessary patient data. The disease history, test results, prescribed treatment can be accessed by doctors without much delay in order to make an accurate diagnosis . </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.2s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/speak.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Financial control</h3>
                                <p>The management has the ability to monitor different financial operations including expenses, profits, and losses, paying bills and taxes, in and outpatient billing. This helps to analyze business prospects quite clear.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/lock.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Improved Processes</h3>
                                <p>Automation is one of the main benefits here. It helps to optimize the user experience. Medical specialists, patients, and hospital authorities can interact online, make the appointments and exchange information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.8s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/support.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Insurance claims processing</h3>
                                <p>Integration with health insurance services improves the experience of the patients and brings benefits to the institution. It allows you to be innovative and helps both the patient and hospital </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3 res-margin">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/seo-and-web.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Better customer experience</h3>
                                <p>Since the clinic management system is patient-oriented, the treatment process can be less stressful. Doctors have more time for the examination and interaction with patients. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-3">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.8s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="avatar-sm" src="assets/img/icon/featured-img/code.png" alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">Less time consuming</h3>
                                <p>As the services and interactions are improved in all possible ways, everything is being planned with greater precision. It saves the time of all the system users and provides them with up-to-date information.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Area End ***** -->

       
        <!-- ***** Discover Area End ***** -->

        <!-- ***** Service Area Start ***** -->
       
        <!-- ***** Service Area End ***** -->

        <!-- ***** Work Area Start ***** -->
        <section class="section work-area bg-overlay overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <!-- Work Content -->
                        <div class="work-content text-center">
                            <h2 class="text-white">How Q-Afya  HMIS Works?</h2>
                            <p class="text-white my-3 mt-sm-4 mb-sm-5"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md" src="assets/img/icon/work/download.png" alt="">
                            </div>
                            <h3 class="text-white py-3">Install the System</h3>
                            <p class="text-white"></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md" src="assets/img/icon/work/settings.png" alt="">
                            </div>
                            <h3 class="text-white py-3">Customize system to your preference</h3>
                            <p class="text-white"></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Single Work -->
                        <div class="single-work text-center p-3">
                            <!-- Work Icon -->
                            <div class="work-icon">
                                <img class="avatar-md" src="assets/img/icon/work/app.png" alt="">
                            </div>
                            <h3 class="text-white py-3">Enjoy the features!</h3>
                            <p class="text-white"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Work Area End ***** -->
        
        <!-- ***** Screenshots Area Start ***** -->
        <section id="screenshots" class="section screenshots-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <!-- <h2 class="text-capitalize">Simple &amp; Beautiful Interface</h2> -->
                            <p class="d-none d-sm-block mt-4"></p>
                            <p class="d-block d-sm-none mt-4"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- App Screenshot Slider Area -->
                        
                        <!-- <div class="app-screenshots">
                            <!-- Single Screenshot Item -
                            <div class="single-screenshot">
                                 <img src="assets/img/screenshots/1.jpg"  class="measure" alt="" width="100%"> 
                            </div>
                            <!-- Single Screenshot Item -
                            <div class="single-screenshot">
                                 <img src="assets/img/screenshots/2.jpg" class="measure"alt="" width="fit"> 
                            </div>
                            <!-- Single Screenshot Item 
                            <div class="single-screenshot">
                                <!-- <img src="assets/img/screenshots/3.jpg"class="measure" alt=""> 
                            </div>
                            <!-- Single Screenshot Item 
                            <div class="single-screenshot">
                                <!-- <img src="assets/img/screenshots/4.png"class="measure" alt="">  
                            </div>
                            <!-- Single Screenshot Item 
                            <div class="single-screenshot">
                                 <!-- <img src="assets/img/screenshots/5.jpg"class="measure" alt="">  
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Screenshots Area End ***** -->
        <!-- <section class="section testimonial-area ptb_100">
        <div class="work-content text-center">
                            <h2 class="text">screenshots</h2>
                            <p class="text-white my-3 mt-sm-4 mb-sm-5"></p>
                        </div>
            <div class="container text-center">
                
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="imagesss owl-carousel">
                       
                            <!-- Single Testimonial -
                          <div class="single-testimonial "> 

                                <img src="assets/img/screenshots/1.jpg" class="mx-auto d-block" alt="">
                                <!-- Client Name --
                                <h3 class="client-name mt-4 mb-2">John Kamau</h3>
                                <!-- Client Address --
                                <h5 class="client-address fw-4">Kiambu</h5>
                                <!-- Client Rating -->
                                <!-- <div class="client-rating mt-2 mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div> -->
                                <!-- Client Description -
                                <div class="client-description">
                                    <!-- Client Text -
                                    <div class="client-text">
                                        <p>The Q-Afya HMIS  helped us create an ongoing solution for tracking, assessing, and improving healthcare accessibility for pregnant women across Nairobi county.”</p>
                                    </div>
                                </div>
                             </div> 
                            <!-- Single Testimonial -
                            <div class="single-testimonial p-3 p-md-5">
                                <img src="assets/img/avatar/avatar-2.png" class="mx-auto d-block" alt="">
                                <!-- Client Name -
                                <h3 class="client-name mt-4 mb-2">Jassica Cherono</h3>
                                <!-- Client Address -
                                <h5 class="client-address fw-4">Nakuru</h5>
                                <!-- Client Rating -
                                <div class="client-rating mt-2 mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <!-- Client Description -
                                <div class="client-description">
                                    <!-- Client Text -
                                    <div class="client-text">
                                        <p>Q-Afya HMIS has enabled case managers to leverage tools and data to greatly improve turnaround on critical documentation and services</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -
                            <div class="single-testimonial p-3 p-md-5">
                                <img src="assets/img/avatar/avatar-3.png" class="mx-auto d-block" alt="">
                                <!-- Client Name -
                                <h3 class="client-name mt-4 mb-2">Johnson Mbitha</h3>
                                <!-- Client Address -
                                <h5 class="client-address fw-4">Naivasha</h5>
                                <!-- Client Rating -
                                <div class="client-rating mt-2 mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <!-- Client Description -
                                <div class="client-description">
                                    <!-- Client Text -
                                    <div class="client-text">
                                        <p>My favorite thing about Q-Afya is the fact that it’s very user friendly. And I love reporting modules. Data Explorer provides me the opportunity to create any single report that I can possibly imagine.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- ***** Testimonial Area Start ***** -->

        <section class="section testimonial-area ptb_100">
        <div class="work-content text-center">
                            <h2 class="text">Testimonials</h2>
                            <p class="text-white my-3 mt-sm-4 mb-sm-5"></p>
                        </div>
            <div class="container text-center">
                
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="testimonials owl-carousel">
                       
                            <!-- Single Testimonial -->
                            <div class="single-testimonial p-3 p-md-5">

                                <img src="assets/img/avatar/avatar-1.png" class="mx-auto d-block" alt="">
                                <!-- Client Name -->
                                <h3 class="client-name mt-4 mb-2">John Kamau</h3>
                                <!-- Client Address -->
                                <h5 class="client-address fw-4">Kiambu</h5>
                                <!-- Client Rating -->
                                <div class="client-rating mt-2 mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <!-- Client Description -->
                                <div class="client-description">
                                    <!-- Client Text -->
                                    <div class="client-text">
                                        <p>The Q-Afya HMIS  helped us create an ongoing solution for tracking, assessing, and improving healthcare accessibility for pregnant women across Nairobi county.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial p-3 p-md-5">
                                <img src="assets/img/avatar/avatar-2.png" class="mx-auto d-block" alt="">
                                <!-- Client Name -->
                                <h3 class="client-name mt-4 mb-2">Jassica Cherono</h3>
                                <!-- Client Address -->
                                <h5 class="client-address fw-4">Nakuru</h5>
                                <!-- Client Rating -->
                                <div class="client-rating mt-2 mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <!-- Client Description -->
                                <div class="client-description">
                                    <!-- Client Text -->
                                    <div class="client-text">
                                        <p>Q-Afya HMIS has enabled case managers to leverage tools and data to greatly improve turnaround on critical documentation and services</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial p-3 p-md-5">
                                <img src="assets/img/avatar/avatar-3.png" class="mx-auto d-block" alt="">
                                <!-- Client Name -->
                                <h3 class="client-name mt-4 mb-2">Johnson Mbitha</h3>
                                <!-- Client Address -->
                                <h5 class="client-address fw-4">Naivasha</h5>
                                <!-- Client Rating -->
                                <div class="client-rating mt-2 mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <!-- Client Description -->
                                <div class="client-description">
                                    <!-- Client Text -->
                                    <div class="client-text">
                                        <p>My favorite thing about Q-Afya is the fact that it’s very user friendly. And I love reporting modules. Data Explorer provides me the opportunity to create any single report that I can possibly imagine.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Testimonial Area End ***** -->

        <!-- ***** Price Plan Area Start ***** -->
        <section id="pricing" class="section price-plan-area bg-gray overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>Unlock Full Power Of Q-Afya</h2>
                            <h3 class="d-none d-sm-block mt-4">Enjoy our Exclusive Offers</h3>
                            <!-- <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                        <div class="row price-plan-wrapper">
                            <div class="col-12 col-md-6">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan text-center p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s">
                                    <!-- Plan Thumb -->
                                    <div class="plan-thumb">
                                        <img class="avatar-lg" src="assets/img/pricing/basic.png" alt="">
                                    </div>
                                    <!-- Plan Title -->
                                    <div class="plan-title my-2 my-sm-3">
                                        <h3 class="text-uppercase">Basic</h3>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <h1 class="color-primary"><small class="fw-7">$</small>200</h1>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                        <ul class="plan-features">
                                            <li class="border-top py-3">Registration</li>
                                            <li class="border-top py-3">Billing </li>
                                            <li class="border-top py-3">Doctor Appointments</li>
                                            <li class="border-top border-bottom py-3">OP Consultation and Triage</li>
                                            <li class="border-top py-3">EMR View </li>
                                            <li class="border-top py-3">EMR View – Trend Reports </li>
                                            <li class="border-top py-3">Reports Builder </li>
                                            <li class="border-top py-3">User Management and Master Settings </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#contact" class="btn mt-4">ENQUIRE NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-4 mt-md-0">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan text-center p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.4s">
                                    <!-- Plan Thumb -->
                                    <div class="plan-thumb">
                                        <img class="avatar-lg" src="assets/img/pricing/premium.png" alt="">
                                    </div>
                                    <!-- Plan Title -->
                                    <div class="plan-title my-2 my-sm-3">
                                        <h3 class="text-uppercase">Pro</h3>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <h1 class="color-primary"><small class="fw-7">$</small>350</h1>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                        <ul class="plan-features">
                                            <li class="border-top py-3">Pharmacy</li>
                                            <li class="border-top py-3">Lab</li>
                                            <li class="border-top py-3">Radiology</li>
                                            <li class="border-top py-3">Services</li>
                                            <li class="border-top py-3">Inventory Management</li>
                                            <li class="border-top py-3">Indents</li>
                                            <li class="border-top py-3">Sales and Issues</li>
                                            <li class="border-top py-3">Procurement</li>
                                            <li class="border-top border-bottom py-3">SMS/email Messages</li>
                                        </ul>
                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#contact" class="btn mt-4">ENQUIRE NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <!-- FAQ Content -->
                        <div class="faq-content">
                            <!-- <span class="d-block text-center mt-5">Not sure what to choose? <a href="#">Contact Us</a></span> -->
                            <!-- sApp Accordion -->
                            <div class="accordion pt-5" id="apolo-accordion">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <!-- Single Accordion Item 
                                        <div class="card my-2">
                                            <!-- Card Header 
                                            <!-- <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn p-2" type="button" data-toggle="collapse" data-target="#collapseOne">
                                                        How to install sApp?
                                                    </button>
                                                </h2>
                                            </div> -->
                                            <!-- <div id="collapseOne" class="collapse show" data-parent="#apolo-accordion">
                                                <!-- Card Body -
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa.
                                                </div>
                                            </div> 
                                        </div>-->
                                        <!-- Single Accordion Item
                                        <div class="card my-2">
                                            <!-- Card Header -->
                                            <!-- <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        Can I get support from the Author?
                                                    </button>
                                                </h2>
                                            </div> 
                                            <div id="collapseTwo" class="collapse" data-parent="#apolo-accordion">
                                                <!-- Card Body
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Accordion Item
                                        <div class="card my-2">
                                            <!-- Card Header
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                        Contact form isn't working?
                                                    </button>
                                                </h2>
                                            </div>
                                            <!-- <div id="collapseThree" class="collapse" data-parent="#apolo-accordion">
                                                <!-- Card Body 
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa.
                                                </div>
                                            </div> -
                                        </div>
                                    </div>
                                  <div class="col-12 col-lg-6">
                                         Single Accordion Item 
                                        <div class="card my-2">
                                            <!-- Card Header -->
                                            <!-- <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn collapsed p-2" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                        What about the events?
                                                    </button>
                                                </h2>
                                            </div> -->
                                          
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Price Plan Area End ***** -->

        <!-- ***** Team Area Start ***** -->
        <section class="section team-area team-style-two overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Our Team Experts</h2>
                            <!-- <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-6">
                        <!-- Single Team -->
                        <div class="single-team text-center radius-100 overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb radius-100 d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/avatar-5.jpeg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay radius-100">
                                    <h4 class="team-name text-white">Prince Munene</h4>
                                    <h5 class="team-post text-white mt-2 mb-3">Founder </h5>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                        <!-- Single Team -->
                        <div class="single-team text-center radius-100 overflow-hidden m-2 m-lg-0">
                            <!-- Team Thumb -->
                            <div class="team-thumb radius-100 d-inline-block position-relative overflow-hidden">
                                <img src="assets/img/avatar/avatar-6.jpeg" alt="">
                                <!-- Team Overlay -->
                                <div class="team-overlay radius-100">
                                    <h4 class="team-name text-white">Alex Mbaka</h4>
                                    <h5 class="team-post text-white mt-2 mb-3">Founder</h5>
                                    <!-- Team Icons -->
                                    <div class="team-icons">
                                        <a class="p-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a class="p-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- ***** Team Area End ***** -->

        <!-- ***** Download Area Start ***** -->
        <section class="section download-area overlay-dark ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Download Text -->
                        <div class="download-text text-center">
                            <h2 class="text-white">Q-Afya is available for all desktop devices</h2>
                            <!-- <p class="text-white my-3 d-none d-sm-block">sApp is available for all devices, consectetur adipisicing elit. Itaque at harum quam explicabo. Aliquam optio, delectus, dolorem quod neque eos totam. Delectus quae animi tenetur voluptates doloribus commodi dicta modi aliquid deserunt, quis maiores nesciunt autem, aperiam natus.</p>
                            <p class="text-white my-3 d-block d-sm-none">sApp is available for all devices, consectetur adipisicing elit. Vel neque, cumque. Temporibus eligendi veniam, necessitatibus aut id labore nisi quisquam.</p> -->
                            <!-- Store Buttons -->

                            <!-- <li><a href="img/docs/qafya.pdf" target="_blank"> Q-Afya</a></li> -->


                             <div class="button-group store-buttons d-flex justify-content-center">
                             <a href="assets/img/docs/qafya.pdf" target="_blank"><h4 class="text-white"><i>Download Q-Afya demo here</i>
                                    <img src="assets/img/logo/logo.png" alt="downlaod pdf ">
                                    </h4> </a>
                                <!-- <a href="#">
                                    <img src="assets/img/icon/app-store.png" alt="">
                                </a> -->
                            </div> 
                            <span class="d-inline-block text-white fw-3 font-italic mt-3"></span>
                        
                            <!-- <a href=""  ></a><img src="img/pdf_icon.png" /> Download our demo sample</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Download Area End ***** -->

        <!--====== Contact Area Start ======-->
        <section id="contact" class="contact-area bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Get in touch</h2>
                            <!-- <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p> -->
                            <!-- <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-5">
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <!-- <p class="mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p> -->
                            <ul>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <span class="media-body align-self-center">Thika 5th, floor Thika Business centre</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <span class="media-body align-self-center">+254 700 017 0179  or   +254 741 210 049</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="media" href="#">
                                        <div class="social-icon mr-3">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <span class="media-body align-self-center">info@qet.co.ke </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-4 pt-md-0">
                        
                        <div class="contact-box text-center">

                            <div class="google-map mt-100">
                                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d127653.29881780625!2d37.00266688641212!3d-1.0364170257794505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x182f4e8ff903c717%3A0x8012052d7cbd94e4!2sNaivas%20Supermarket%20-%20Thika%20Town%2C%20Workshop%20Rd%2C%20Thika!3m2!1d-1.0364178!2d37.0727075!5e0!3m2!1sen!2ske!4v1567366265212!5m2!1sen!2ske" width="1251" height="381" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                              </div>
                            </div><!-- contact-us-area -->
                            <!-- Contact Form
                            <form id="contact-form" method="POST" action="https://theme-land.com/sApp/demo/assets/php/mail.php">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>-->
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->

        <!--====== Footer Area Start ======-->
        <footer class="footer-area footer-fixed">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Logo -->
                                <a class="navbar-brand" href="#">
                                    <img class="logo" src="assets/img/logo/logo.png" alt="">
                                </a>
                                <p class="mt-2 mb-3">“We bring a personal and effective approach to every project we work on, which is why our clients love us".</p>
                                
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Useful Links</h3>
                                <ul>
                                    <li class="py-2"><a href="#">Home</a></li>
                                    <li class="py-2"><a href="#features">Features</a></li>
                                    <li class="py-2"><a href="#screenshots">Screenshot</a></li>
                                    <li class="py-2"><a href="#pricing">Pricing</a></li>
                                    <li class="py-2"><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title mb-2">Product Help</h3>
                                <ul>
                                    <li class="py-2"><a href="#">FAQ</a></li>
                                    <li class="py-2"><a href="#">Privacy Policy</a></li>
                                    <li class="py-2"><a href="#">Support</a></li>
                                    <li class="py-2"><a href="#">Terms &amp; Conditions</a></li>
                                    <li class="py-2"><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-12 col-sm-6 col-lg-3">
                             <!-- Social Icons -->
                             <div class="social-icons d-flex">
                                <a class="facebook"href="https://www.facebook.com/qetsystems" target="-blank">
                                    <i class="fab fa-facebook-f" ></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="twitter"href="https://twitter.com/qet_systems" target="-blank">                                        <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                               <a class="google-plus"href="https://plus.google.com/105181721465482082641" target="-blank">
                                    <i class="fab fa-google-plus-g"></i>
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                
                            </div>
                            <!-- Footer Items 
                            <div class="footer-items">
                                <!-- Footer Title 
                                <h3 class="footer-title mb-2">Download</h3>
                                <!-- Store Buttons 
                                <div class="button-group store-buttons store-black d-flex flex-wrap">
                                    <a href="#">
                                        <img src="assets/img/icon/google-play-black.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="assets/img/icon/app-store-black.png" alt="">
                                    </a>
                                </div>
                            </div>-->
                        </div> 
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">&copy; Copyrights 2020 QET SYSTEMS rights reserved.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">Made with <i class="fas fa-heart"></i> By <a href="#">Qet Systems</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
</body>


<!-- Mirrored from theme-land.com/sApp/demo/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jun 2020 09:55:56 GMT -->
</html>