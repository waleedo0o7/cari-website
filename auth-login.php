<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">




    <div class="user-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <h3>Log In</h3>
                            <form id="contactForm" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="" class="mb-2">   Email </label>
                                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username or Email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="" class="mb-2"> Password </label>
                                            <input class="form-control" type="password" name="password">
                                        </div>
                                    </div>

                                    <div class="d-block text-center py-1">
                                        <a href="dashboard.php" class="default-btn one lg-btn"> Login </a>
                                    </div>

                                    <div class="col-12">
                                        <p class="account-desc text-center">
                                            Not a member?
                                            <a href="auth-register.php">Register</a>
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