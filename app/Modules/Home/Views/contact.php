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

    <!-- contact section -->
    <section class="contact_section  long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div class="heading_container">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action="">
                            <div>
                                <input type="text" placeholder="Your Name"/>
                            </div>
                            <div>
                                <input type="text" placeholder="Phone Number"/>
                            </div>
                            <div>
                                <input type="email" placeholder="Email"/>
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message"/>
                            </div>
                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

<?php include('footer.php') ?>