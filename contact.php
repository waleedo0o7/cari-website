<?php include 'header.php'; ?>

<!-- Inner Banner -->
<div class="inner-banner inner-bg9">
    <div class="container">
        <div class="inner-title text-center">
            <h3> Contact Us </h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Contact Area -->
<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-info">
                    <span>Contact Info</span>
                    <h2>Let's Connect With Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet varius mi, ut hendrerit magna mollis ac. </p>
                    <ul>
                        <li>
                            <div class="content">
                                <i class='bx bx-phone-call'></i>
                                <h3>Phone Number</h3>
                                <a href="tel:+96645678924">+96645678924</a>
                            </div>
                        </li>

                        <li>
                            <div class="content">
                                <i class='bx bxs-map'></i>
                                <h3>Address</h3>
                                <span> ksa makkah</span>
                            </div>
                        </li>

                        <li>
                            <div class="content">
                                <i class='bx bx-message'></i>
                                <h3>Contact Info</h3>
                                <a href="mailto:info@cari.com">info@cari.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="contact-form">
                    <h3>Contact With Us!</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message*"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">
                                        Accept <a href="terms-condition.php">Terms & Conditions</a> And <a href="privacy-policy.php">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

<!-- Map Area -->
<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5928042.1940770075!2d165.88090651337563!3d-43.49082204427353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa82a57f80ab40ad3%3A0x31fd410f8a3e86eb!2sTe%20Waipounamu%20%2F%20South%20Island!5e0!3m2!1sen!2sbd!4v1623698279996!5m2!1sen!2sbd"></iframe>
    </div>
</div>
<!-- Map Area End -->








<?php include 'footer.php'; ?>