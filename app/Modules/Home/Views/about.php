<?php include('header.php') ?>
    <!-- about section -->
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
    <section class="about_section layout_padding long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="<?= base_url('assets/Home/images/about-img.png') ?>" alt="">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            At Linguistic Lab Africa 🚀 , we're passionate about transforming lives through code. Our
                            journey began with a simple belief: everyone should have access to quality coding education.
                            Guided by this vision, we've built a platform where aspiring programmers, from beginners to
                            experts, can thrive. Our team of dedicated mentors and educators are committed to nurturing
                            talent, fostering creativity, and empowering individuals to reach their full potential in
                            the ever-evolving world of technology. Join us as we embark on this exciting adventure of
                            learning, growth, and innovation. Welcome to the future of coding.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->
<?php include('footer.php') ?>