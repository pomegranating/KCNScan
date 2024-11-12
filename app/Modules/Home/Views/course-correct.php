<?php include('header.php') ?>

    <!-- header section strats -->
    <header class="header_section long_section  px-0 fixed-top shadow">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
            <span style="font-size: medium;">
                Linguistic Lab Africa
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex mx-auto flex-column flex-lg-row align-items-center" style="margin-left: auto;">
                    <ul class="navbar-nav " style="margin-left:120px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('projects') ?>">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('course_correct') ?>">Course Correct</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="quote_btn-container">
                    <a href="<?= base_url('authentication/sign_in') ?>"
                       style="margin-right: 5px; color:#6bb7be;font-weight:bold;">
                        <span>Login</span>
                    </a>
                    <span class="separator" style="margin-right: 7px;">|</span>
                    <a href="<?= base_url('authentication/sign_up') ?>" style="color:#f89646; font-weight:bold;">
                        <span>Register</span>
                    </a>
                    <form class="form-inline">
                        <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>


        </nav>
    </header>
    <!-- end header section -->

    <!-- Coding Courses Section -->
    <section class="coding_courses_section layout_padding">
        <div class="container">
            <div class="heading_container" style="align-items:center;">
                <h2>
                    Our Packages
                </h2>
                <p style="font-size: 16px;">Explore our selection of packages designed to boost your skills and advance
                    your career. Choose the one that suits your goals.</p>

            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="box"
                         style="border: 1px solid #ccc; border-radius: 10px; overflow: hidden; margin-bottom: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                        <div class=" img-box">
                            <img src="<?= base_url('assets/Home/images/programming.png') ?>" alt="Programming Image"
                                 style="width: 100%; height: auto; display: block;">
                        </div>
                        <div class=" detail-box" style="padding: 20px;">
                            <h5 style="margin-top: 0; font-size: 15px; color: #333; font-weight:bold;">Peer
                                Programming</h5>
                            <p style="font-size: 16px;">Duration: Flexible</p>
                            <p style="font-size: 16px;">Sessions: Varies</p>
                            <!-- <div class="price_box">
                    <h6 class="price_heading">
                        <span>$</span> 99.00
                    </h6>
                </div> -->
                            <a href="<?= base_url('/peer_programming') ?>" class="btn"
                               style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff;">Learn
                                More</a>
                        </div>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-4">
                    <div class="box"
                         style="border: 1px solid #ccc; border-radius: 10px; overflow: hidden; margin-bottom: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <div class=" img-box">
                            <img src="<?= base_url('assets/Home/images/interviewprep.png') ?>"
                                 alt="Interview Preparation Image" style="width: 100%; height: auto; display: block;">
                        </div>
                        <div class=" detail-box" style="padding: 20px; align-items: center;">
                            <h5 style="margin-top: 0; font-size: 15px; color: #333; font-weight:bold;">Interview
                                Preparation</h5>
                            <p style="font-size: 16px;">Duration: 4 weeks</p>
                            <p style="font-size: 16px;">Sessions: Twice a week</p>
                            <!-- <div class="price_box">
                    <h6 class="price_heading">
                        <span>$</span> 199.00
                    </h6>
                </div> -->
                            <a href="<?= base_url('/interview_preparation') ?>" class="btn"
                               style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px; transition: background-color 0.3s;">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-lg-4">
                    <div class="box"
                         style="border: 1px solid #ccc; border-radius: 10px; overflow: hidden; margin-bottom: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <div class=" img-box">
                            <img src="<?= base_url('assets/Home/images/code.png') ?>" alt="Code Mentorship Image"
                                 style="width: 100%; height: auto; display: block;">
                        </div>
                        <div class=" detail-box" style="padding: 20px;">
                            <h5 style="margin-top: 0; font-size: 15px; color: #333; font-weight:bold;">Code
                                Mentorship</h5>
                            <p style="font-size: 16px;">Duration: 12 weeks</p>
                            <p style="font-size: 16px;">Sessions: Weekly</p>
                            <!-- <div class="price_box">
                    <h6 class="price_heading">
                        <span>$</span> 249.00
                    </h6>
                </div> -->
                            <a href="<?= base_url('/code_mentorship') ?>" class="btn"
                               style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px; transition: background-color 0.3s;">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info section -->
    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Testimonials
                </h2>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="<?= base_url('assets/Home/images/client.jpg') ?>" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                John Doe
                                            </h6>
                                        </div>
                                        <p>
                                            "I'm amazed by the quality of mentorship and resources provided by this
                                            platform. It has truly transformed my coding journey."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="<?= base_url('assets/Home/images/client.jpg') ?>" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Jane Smith
                                            </h6>
                                        </div>
                                        <p>
                                            "The learning experience here is unparalleled. I've gained valuable insights
                                            and skills that have propelled my career forward."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="<?= base_url('assets/Home/images/client.jpg') ?>" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h6>
                                                Sarah Johnson
                                            </h6>
                                        </div>
                                        <p>
                                            "This platform has been instrumental in my coding journey. The support and
                                            guidance from mentors have been invaluable."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php') ?>