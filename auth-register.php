<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="user-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <h3>Create an Account!</h3>
                            <form id="contactForm" novalidate="true">
                                <div class="row">

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="" class="mb-2"> First name </label>
                                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="" class="mb-2"> Last name </label>
                                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="" class="mb-2"> Email </label>
                                            <input type="email" name="name" id="name" class="form-control" required="" data-error="Please enter your Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="" class="mb-2"> Password </label>
                                            <input type="Password" name="name" id="name" class="form-control" required="" data-error="Please enter your Email">
                                        </div>
                                    </div>



                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                                            Register Now
                                        </button>
                                    </div>

                                    <div class="col-12 text-center">
                                        <p class="account-desc">
                                            Already have an account?
                                            <a href="auth-login.php">Log In</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>