<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Golden TKM</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/goldenTKMv1.jpg') }}" rel="icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">






    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/landingStyle.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><img style="border-radius: 50%; width:auto; "
                    src="{{ asset('assets/img/goldenTKMv2.jpg') }}" alt=""><a href="#"><span
                        class="mx-2" style="font-display:  Candara">Golden
                        TKM</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->



            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Courses</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="#signin">Sign-in</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero"
        style=" width: 100%;
    height: 80vh;
    background: url('{{ asset('assets/img/hero-bg.jpg') }}') top left;
    background-size: cover;
    position: relative;"
        class="d-flex align-items-center">


        <div class="container" data-aos="zoom-out" data-aos-delay="200">
            <h1>Welcome to <span style="color:#ECBD00">Golden TKM</span></h1>
            <h2>We are team of experts trying to produce talented young people in IT Field</h2>
            <div class="d-flex">
                <a href="#signin" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        {{-- <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Featured Services Section -->
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Students</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Completed Courses</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3400" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Number of Teachers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <h3>Find Out More <span>About Us</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>Golden TKM Established Since 2018</h3>
                        <p class="fst-italic">
                            We ensure the better education for better world
                        </p>
                        <ul>
                            <li>
                                <i class="bx bx-label"></i>
                                <div>
                                    <h5>ITPEC Classes</h5>
                                    <p>IP , FE & other Programming Languages Class</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-label"></i>
                                <div>
                                    <h5>Japanese Language Classes</h5>
                                    <p>From basic to Adavanced Level for 4 skills</p>
                                </div>
                            </li>
                        </ul>
                        <p>
                            No.1, 1st floor, Thukha Cho Condo,<br>
                            Corner of Thukha street and U Cho street,<br>
                            8 quarter, U Cho Rd, Yangon
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Skills Section ======= -->




        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Courses</h2>
                    <h3>Check our Popular <span>Courses</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-book"></i></div>
                            <h4 style="color: #EDA800">IT Passport class</h4>
                            <p class="text-center">This class is a stepping stone for who want to start their career as
                                IT Professionals</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-book"></i></div>
                            <h4 style="color: #EDA800">Fundamental Engineering class</h4>
                            <p>This is level-up class for who have passed or on the same level as IP Exam </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-book-fill"></i></div>
                            <h4 style="color: #EDA800">IP + FE + Japanese<br>Special Class</h4>
                            <p>This is a special-blended class including two months OJT for who are interested to work
                                at Japan </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i>
                            </div>
                            <h4 style="color: #EDA800">Japnanese Class- Basic + N5 + N4</h4>
                            <p>This class is completely for beginners who want to learn new language from scratch.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-conversation"></i></div>
                            <h4 style="color: #EDA800">Japanese Speaking Class</h4>
                            <p>This is a class for who want to use their Japanese language in practice.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxs-plane-take-off"></i></div>
                            <h4 style="color: #EDA800"> Training</h4>
                            <p>We train and manage our students & we introduce work opportinities for our students</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->



        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <h3>Check our <span>Portfolio</span></h3>
                </div>

                <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div> -->

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">



                    <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>  -->


                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets/img/portfolio/ohayo1.jpg') }}" class="img-fluid" alt="">
                        {{-- <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>

                        </div> --}}
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets/img/portfolio/ohayo2.jpg') }}" class="img-fluid" alt="">
                        {{-- <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div> --}}
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets/img/portfolio/ohayo3.jpg') }}" class="img-fluid" alt="">
                        {{-- <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div> --}}
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets/img/portfolio/ohayo4.jpg') }}" class="img-fluid" alt="">
                        {{-- <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div> --}}
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets/img/portfolio/ohayo5.jpg') }}" class="img-fluid" alt="">
                        {{-- <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div> --}}
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets/img/portfolio/ohayo6.jpg') }}" class="img-fluid" alt="">
                        {{-- <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div> --}}
                    </div>



                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Contact Us</span></h3>
                    <p>In order that we may be able to give the satifaction and pleasure of life in every way, it is
                        expedient for us to be able to do so at any given time.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p> No.1, 1st floor, Thukha Cho Condo, <br>Corner of Thukha street and U Cho street,<br> 8
                                quarter, U Cho Rd, Yangon <br><br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>ohayo@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+959 958 210 304</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1909.361918796316!2d96.12182116905713!3d16.840050898330155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1955a87cd14bd%3A0x3315ceec1d4edceb!2sOHAYO%20Japanese%20Language%20Center!5e0!3m2!1sen!2ssg!4v1685033790537!5m2!1sen!2ssg"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->
        <!-- ======= Signin Section ======= -->


        <section id="signin" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sign-in</h2>
                    <!-- <h3>Our Hardworking <span>Team</span></h3> -->
                    <h3><span>Sign-in</span> to your account</h3>
                    <p>
                        Welcome to our website!!!
                    </p>
                </div>


                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                class="img-fluid" alt="Sample image">
                        </div>
                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" :value="old('email')"
                                        class="form-control form-control-lg"
                                        placeholder="Enter a valid email address" />
                                    <label class="form-label">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Enter password" />
                                    <label class="form-label">Password</label>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3" />
                                        <label class="form-check-label" for="form2Example3">
                                            Remember me
                                        </label>
                                    </div>

                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">

                                    {{-- <input type="submit" value="Sign-in" class="btnSubmit"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;"> --}}

                                    <input type="submit" class="btn btn-warning" value="Sign-in">
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#contact"
                                            class="link-danger">Contact our Teachers</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>




            </div>
        </section>



        <!-- End signin Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3><span>Ohayo JLC</span></h3>
                        <p>
                            No.1, 1st floor, Thukha Cho Condo, <br>Corner of Thukha street and U Cho street,<br> 8
                            quarter, U Cho Rd, Yangon <br><br>
                            <strong>Phone:</strong> +959 958 210 304<br>
                            <strong>Email:</strong> ohayo@gmail.com<br>
                        </p>


                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank"
                                    href="https://itpec.org/">ITPEC.org</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank"
                                    href="https://itpec.org/pastexamqa/fe.html">FE Old Question Archive</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank"
                                    href="https://itpec.org/pastexamqa/ip.html">IP Old Question Archive</a></li>

                        </ul>
                    </div>



                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Connect through Social Network</p>
                        <div class="social-links mt-3">

                            <a target="_blank"
                                href="https://www.facebook.com/OHAYO-Japanese-Language-Center-357801321698042"
                                class="facebook">
                                <i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Team RJC : 2023</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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
