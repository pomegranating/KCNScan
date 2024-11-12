<!-- info section -->

<section class="info_section long_section">

    <div class="container" id="contact">
        <div class="contact_nav">
            <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                    Call : +01 123455678990
                </span>
            </a>
            <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                    Email : keratoscan@gmail.com
                </span>
            </a>
            <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                    Strathmore University, Madaraka Estate, Nairobi, Kenya
                </span>
            </a>
        </div>

        <div class="info_top ">
            <div class="row ">
                <div class="col-5 col-lg-3">
                    <div class="info_links">
                        <h4>
                            QUICK LINKS
                        </h4>
                        <div class="info_links_menu">
                            <a class="" href="<?= base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
                            <a class="" href="#why_keratoscan">Why KeratoScan?</a>
                            <a class="" href="#about"> About</a>
                            <a class="" href="#contact"> Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-6">
                    <div class="info_form">
                        <h4>
                            SIGN UP TO OUR NEWSLETTER
                        </h4>
                        <div id="alertContainer"></div>

                        <form id="subscribeForm" action="">
                            <input type="text" name="email" id="emailInput" placeholder="Enter Your Email"/>
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end info_section -->

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <!-- <p> -->
    </div>
</footer>
<!-- footer section -->
<!-- jQery -->
<script src="<?= base_url('assets/Home/js/jquery-3.4.1.min.js') ?>"></script>
<!-- bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="<?= base_url('assets/Home/js/bootstrap.js') ?>"></script>

<!-- custom js -->
<script src="<?= base_url('assets/Home/js/custom.js') ?>"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

<!-- End Google Map -->
<script>
    $(document).ready(function () {
        $('#subscribeForm').submit(function (e) {
            e.preventDefault();

            var email = $('#emailInput').val();

            $.ajax({
                type: 'POST',
                url: '/admindashboard/subscribe',
                data: {
                    email: email
                },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        showNotification(response.message, 'success');
                    } else if (response.status === 'error') {
                        showNotification(response.message, 'danger');
                    }
                },
                error: function (xhr, textStatus, errorThrown) {
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        showNotification(xhr.responseJSON.message, 'danger');
                    } else {
                        showNotification('An error occurred while processing your request.', 'danger');
                    }
                }
            });


        });
    });

    function showNotification(message, type) {
        console.log("Notification type:", type);

        var alertClass;
        switch (type) {
            case 'success':
                alertClass = 'alert-success';
                break;
            case 'danger':
                alertClass = 'alert-danger';
                break;
            case 'warning':
                alertClass = 'alert-warning';
                break;
            default:
                alertClass = 'alert-info';
        }

        var alertText = $('<div class="alert ' + alertClass + '" role="alert">' + message + '</div>');
        $('#alertContainer').empty().append(alertText);
        setTimeout(function () {
            alertText.fadeOut('slow', function () {
                $(this).remove();
            });
        }, 5000);
    }
</script>

</body>

</html>