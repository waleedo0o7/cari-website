<?php include 'header.php'; ?>

<!-- Inner Banner -->
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title text-center">
            <h3> Checkout </h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->








<!-- Checkout Area -->
<section class="checkout-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <form>
                    <div class="billing-details">
                        <h3 class="title">Billing details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="create-an-account">
                                    <label class="form-check-label" for="create-an-account">Create an account?</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="ship-different-address">
                                    <label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="billing-sildbar pl-20">
                    <div class="pricing-card">
                        <div class="pricing-title">
                            <h3>$25</h3>
                            <span>Starter</span>
                        </div>
                        <ul>
                            <li><i class='bx bx-check'></i> 20 Workouts</li>
                            <li><i class='bx bx-check'></i> Meal Plans & Analysis</li>
                            <li><i class='bx bx-check'></i> Weight Assessment</li>
                            <li><i class='bx bx-check'></i> Physical Activities</li>
                            <li><i class='bx bx-check'></i> Client Monitoring</li>
                            <li><i class='bx bx-check'></i> 24/7 Support</li>
                        </ul>
                    </div>


                    <div class="payment-box">

                        <div class="payment-method">
                            <h3>Payment Method</h3>

                            <p>
                                <input type="radio" id="paypal" name="radio-group">
                                <label for="paypal"> Visa Card</label>
                            </p>
                        </div>

                        <a href="order-received.php" class="default-btn"> Place to Order </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Area End -->




<?php include 'footer.php'; ?>