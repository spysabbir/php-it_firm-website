    <!-- Footer Start-->
    <footer id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer_item ab">
                        <a href="index.php"><img src="assets/images/<?= spy_sabbir_update('theme_default', 'logo_photo'); ?>" alt="Footer Logo"></a>
                        <p><?= spy_sabbir_update('theme_default', 'company_name'); ?> is the Outsourcing firm based on Freelance & Outsourcing.</p>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> <?= spy_sabbir_update('theme_default', 'company_address'); ?></li>
                            <li><a href="tel:<?= spy_sabbir_update('theme_default', 'company_phone_number'); ?>"><i class="fas fa-phone-alt"></i> <?= spy_sabbir_update('theme_default', 'company_phone_number'); ?></a></li>
                            <li><a href="mailto:<?= spy_sabbir_update('theme_default', 'company_email_address'); ?>"><i class="far fa-envelope"></i>
                                    <?= spy_sabbir_update('theme_default', 'company_email_address'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_item link">
                        <h3>Quick Links</h3>
                        <div class="link_item">
                            <ul>
                                <li><a href="index.php"><i class="far fa-check-circle"></i>Home</a></li>
                                <li><a href="about.php"><i class="far fa-check-circle"></i>About Us</a></li>
                                <li><a href="services.php"><i class="far fa-check-circle"></i>Services</a></li>
                                <li><a href="portfolio.php"><i class="far fa-check-circle"></i>Portfolio</a></li>
                                <li><a href="blog.php"><i class="far fa-check-circle"></i>Blog</a></li>
                                <li><a href="contact.php"><i class="far fa-check-circle"></i>Contact Us</a></li>
                            </ul>
                            <ul>
                                <li><a href="join-our-team.php"><i class="far fa-check-circle"></i>Join Our Team</a></li>
                                <li><a href="privacy-policy.php"><i class="far fa-check-circle"></i>Privacy Policy</a></li>
                                <li><a href="terms-and-condition.php"><i class="far fa-check-circle"></i>Terms And Conditions</a></li>
                                <li><a href="faqs.php"><i class="far fa-check-circle"></i>Faq's</a></li>
                                <li><a href="sitemap.php"><i class="far fa-check-circle"></i>Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_item sc">
                        <h3>Subscribe To The Newsletter</h3>
                        <form method="POST" action="subscribe_post.php" id="subscription_form">
                            <div class="form-group">
                                <input type="email" name="subscriber_email" id="subscriber_email" class="form-control" placeholder="Enter your email" value="">
                                <button type="button" id="subscribe_button" class="btn"><i class="far fa-paper-plane"></i></button>
                                <strong id="subscription_message" class="ml-2"></strong>
                            </div>
                        </form>
                        <span>Fllow Social Media</span>
                        <ul>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'twitter_link'); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'instagram_link'); ?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'linkedin_link'); ?>"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'pinterest_link'); ?>"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'youtube_link'); ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>All rights reserved &copy; <?= date('Y') ?> | Power By <a href="index.php"><?= spy_sabbir_update('theme_default', 'company_name'); ?></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End-->

    <!-- Top to bottom Start -->
    <div class="top_to">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!-- Top to bottom End -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Counter Up JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Subscription form
            $('#subscribe_button').click(function() {
                var email = $('#subscriber_email').val().trim();

                if (email === '') {
                $('#subscription_message').removeClass('text-success').addClass('text-danger').text('Email cannot be blank.');
                    return;
                }

                $.ajax({
                type: 'POST',
                url: 'subscriber_post.php',
                data: { subscriber_email: email },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                    $('#subscription_message').removeClass('text-danger').addClass('text-success').text('Subscription successful!');
                    $('#subscriber_email').val('');
                    } else {
                    $('#subscription_message').removeClass('text-success').addClass('text-danger').text(data.error);
                    }
                },
                });
            });

            // Contact form
            $('#contact_button').click(function() {
                var client_full_name = $('#client_full_name').val().trim();
                var client_email_address = $('#client_email_address').val().trim();
                var client_phone_number = $('#client_phone_number').val().trim();
                var client_subject = $('#client_subject').val().trim();
                var client_message = $('#client_message').val().trim();
                
                $('.error-message').text('');
                $('#contact_message').text('');

                if (client_full_name === '') {
                    $('#client_full_name_error').text('Full name is required!');
                }
                if (client_email_address === '') {
                    $('#client_email_address_error').text('Email address is required!');
                }
                if (client_phone_number === '') {
                    $('#client_phone_number_error').text('Phone number is required!');
                }
                if (client_message === '') {
                    $('#client_message_error').text('Message is required!');
                }

                $.ajax({
                    type: 'POST',
                    url: 'contact_post.php',
                    data: { 
                        client_full_name: client_full_name, 
                        client_email_address: client_email_address, 
                        client_phone_number: client_phone_number, 
                        client_subject: client_subject,
                        client_message: client_message
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.success) {
                            $('#contact_message').removeClass('text-danger').addClass('text-success').text('Message sent successful!');
                            $('#client_full_name').val('');
                            $('#client_email_address').val('');
                            $('#client_phone_number').val('');
                            $('#client_subject').val('');
                            $('#client_message').val('');
                        } else {
                            $('#contact_message').removeClass('text-success').addClass('text-danger').text(data.error);
                        }
                    },
                });
            });
        });
    </script>

</body>

</html>

<?php
    require_once('status.php');
?>