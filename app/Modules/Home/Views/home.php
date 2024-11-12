<?php include('header.php') ?>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section long_section  px-0 fixed-top shadow">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="<?= base_url('/home') ?>">
                <span style="font-size: medium;">
                    KeratoScan
                </span>
                </a>
                <img src="<?= base_url('assets/img/eye-scan.png') ?>" alt="Logo" class="mr-2" style="height: 30px;">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center" style="margin-left: auto;">
                        <ul class="navbar-nav " style="margin-left:120px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url('/home') ?>">Home <span
                                            class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#why_keratoscan">Why KeratoScan?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="quote_btn-container">
                        <a href="<?= base_url('authentication/sign_in') ?>"
                           style="margin-right: 5px; color:#6495ed;font-weight:bold;">
                            <span>Login</span>
                        </a>
                        <span class="separator" style="margin-right: 7px;">|</span>
                        <a href="<?= base_url('authentication/sign_up') ?>" style="color:#ffd801; font-weight:bold;">
                            <span>Register</span>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <!-- about section -->

        <section class="slider_section long_section">
            <div id="customCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="detail-box">
                                        
                                        <h1>
                                            Keratoconus and Artificial Intelligence
                                        </h1>
                                        <p>At KeratoScan, we leverage the power of Artificial Intelligence to aid in 
                                        the early detection of Keratoconus. Our cutting-edge technology is designed to automate the process 
                                        of diagnosing the disease, thereby improving the accuracy of results leading to provision of correct 
                                        treatments.
                                        </p>
                                        <div class="btn-box">
                                            <a href="#contact" class="btn1">
                                                Contact Us
                                            </a>
                                            <a href="#about" class="btn2">
                                                About Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img-box">
                                        <img src="<?= base_url('assets/Home/images/Eye_Exam.png') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="detail-box">
                                        <h1>
                                            AI Research
                                        </h1>

                                        <p> The system is powered by a machine learning model that has been trained on a large dataset 
                                            of corneal topographic scans. But worry not, the model is not here to take your job! It acts as 
                                            a secondary opinion for you, providing you with more nformation to make a more accurate diagnosis. 
                                        </p>

                                        <div class="btn-box">
                                            <a href="#contact" class="btn1">
                                                Contact Us
                                            </a>
                                            <a href="#about" class="btn2">
                                                About Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img-box">
                                        <img src="<?= base_url('assets/Home/images/ML_health.png') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <ol class="carousel-indicators">
                    <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel" data-slide-to="1"></li>
                </ol>
            </div>
        </section>
        <!-- end slider section -->
    </div>
    <!-- //why keratoscan?  -->
    <section class="why_kcn_section layout_padding long_section">
        <div class="container" id="why_keratoscan">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="<?= base_url('assets/Home/images/Eye_Exam.png') ?>" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="detail-box" style="text-align: justify;">
                        <div class="heading_container">
                            <h2>
                                Why KeratoScan?
                            </h2>
                        </div>
                        <p>
                        Studies suggest that the prevalence of keratoconus is as high as 1 in 375 in various populations. 
                        Due to subjective viewing of topographic scans, doctors may miss signs of early development of keratoconus.
                        KeratoScan 👁️ aids doctors in performing a secondary evaluation while keeping their own evaluation as primary to 
                        provide a solid and accurate diagnosis to patients by ensuring that all areas of the scan are thoroughly evaluated.
                        This ensures that correct treatment plans are implemented!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Why KeratoScan section -->

    <!-- beginning of the about section -->
    <section class="about_section layout_padding long_section">
        <div class="container" id="about">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="<?= base_url('assets/Home/images/AI_health.png') ?>" alt="">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box" style="text-align: justify;">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                        KeratoScan 👁️ is a machine-learning powered system that aids in early detection and diagnosis of keratoconus.
                        Built on <a href="https://medium.com/@nitishkundu1993/exploring-resnet50-an-in-depth-look-at-the-model-architecture-and-code-implementation-d8d8fa67e46f" target="_blank" >ResNet50 architecture</a> and trained on 4000+ images, it provides accurate diagnosis based on topographic
                        scans provided by the doctor. It is simple, intuitive and user-friendly or is it doctor-friendly? It is definitely
                        not going to relieve medical practitioners of the eye from their job rather complements their job and ensures patients
                        leave satisfied with their diagnosis and the corresponding treatment plan provided by the practitioners themselves!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- //end of the about section -->
    
<?php include('footer.php') ?>