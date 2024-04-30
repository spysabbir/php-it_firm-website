<?php
$contact = true;
require_once('header.php');
?>

<!-- Banner Start -->
<section id="banner">
    <div class="banner_slider">
        <div class="banner_item" style="background-image: url(assets/images/<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="banner_text">
                            <h1>Contact</h1>
                            <p>If you have any questions or comments, please don't hesitate to contact me.</p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i>
                                            Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Contact Us Start Done -->
<section id="contact">
    <div class="container">
        <div class="section_title">
            <h2>Contact <span>Us</span></h2>
            <p>Feel free to contact us if you have any questions</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form_area">
                    <h4>Send a message</h4>
                    <strong id="contact_message" class="ml-2"></strong>
                    <form method="POST" action="contact_post.php">
                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="text" class="form-control" id="client_full_name" name="full_name" placeholder="Name*" value="">
                                </div>
                                <strong id="client_full_name_error" class="error-message text-danger"></strong>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="email" class="form-control" id="client_email_address" name="email_address" placeholder="Email*" value="">
                                </div>
                                <strong id="client_email_address_error" class="error-message text-danger"></strong>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="text" class="form-control" id="client_phone_number" name="phone_number" placeholder="Phone*" value="">
                                </div>
                                <strong id="client_phone_number_error" class="error-message text-danger"></strong>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="text" class="form-control" id="client_subject" name="subject" placeholder="Subject*" value="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <textarea rows="4" class="form-control" name="message" id="client_message" placeholder="Message*"></textarea>
                                </div>
                                <strong id="client_message_error" class="error-message text-danger"></strong>
                            </div>
                            <div class="col-lg-12">
                                <button type="button" id="contact_button" class="btn btn-success mt-3">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact_details">
                    <div class="details_item">
                        <h4>Address</h4>
                        <p><i class="fas fa-map-marker-alt"></i> <?= spy_sabbir_update('contact_details', 'company_address'); ?></p>
                    </div>
                    <div class="details_item">
                        <h4>Phone</h4>
                        <p><i class="fas fa-phone-alt"></i> <a href="tel:<?= spy_sabbir_update('contact_details', 'phone_number_one'); ?>"><?= spy_sabbir_update('contact_details', 'phone_number_one'); ?></a>
                        </p>
                        <p><i class="fas fa-phone-alt"></i> <a href="tel:<?= spy_sabbir_update('contact_details', 'phone_number_two'); ?>"><?= spy_sabbir_update('contact_details', 'phone_number_two'); ?></a>
                        </p>
                    </div>
                    <div class="details_item">
                        <h4>E-Mail</h4>
                        <p><i class="far fa-envelope"></i> <a href="mailto:<?= spy_sabbir_update('contact_details', 'email_address_one'); ?>"><?= spy_sabbir_update('contact_details', 'email_address_one'); ?></a>
                        </p>
                        <p><i class="far fa-envelope"></i> <a href="mailto:<?= spy_sabbir_update('contact_details', 'email_address_two'); ?>"><?= spy_sabbir_update('contact_details', 'email_address_two'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->

<!-- Maps Start -->
<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d363.6607429656433!2d90.35418879097962!3d23.98239500323118!2m3!1f0!2f39.404635688427135!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x3755ddb79e27fe0d%3A0x921575b97de3c49b!2sSPY%20IT%20FIRM!5e1!3m2!1sbn!2sbd!4v1623380568095!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<!-- Maps End -->

<?php
require_once('footer.php');
require_once('status.php');
?>