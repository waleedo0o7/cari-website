<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">

        <div class="page-content card">


            <div class="page-header text-center mb-5">
                <h3 class=""> One final step! </h3>
                <p class="color-gray">This is a recurring monthly subscription. You have the option to stop it at any moment.</p>
            </div>


            <div class="row">

                <div class="col-lg-6">

                    <div class="subscription-details-card-wrapper">

                        <div class="subscription-details">


                            <div class="image-wrapper">
                                <img src="assets/images/plans-01.png" class="img-fluid" alt="">
                            </div>

                            <div class="p-3">

                                <p class=" bold"> <i class="icon icon-summary"></i> Subscription Summary </p>

                                <p class="color-dark-gray"> <i class="icon icon-calendar"></i> Your first day will be Mon, April 10th </p>

                                <p class="color-dark-gray"> <i class="icon icon-dishes "></i> 2 Meal Package x 2 people </p>

                                <p class="color-dark-gray"> <i class="icon icon-table"></i> 5 Days/Week </p>

                            </div>

                        </div> <!-- subscription-details -->

                        <div class="subscription-details">

                            <div class="p-3">

                                <p class=" bold"> <i class="icon icon-location"></i> Delivery Address </p>

                                <p class="color-dark-gray"> Sharafiyah Dist.15607, Jeddah,Saudi Arabia </p>

                            </div>
                        </div> <!-- subscription-details -->

                        <div class="subscription-details">

                            <div class="p-3">

                                <p class=" bold"> <i class="icon icon-cell-phone"></i> Contact info</p>

                                <p class="color-dark-gray m-0"> Mohammed Ahmad </p>

                                <p class="color-dark-gray"> +966 453 635 768 </p>

                            </div>
                        </div> <!-- subscription-details -->



                    </div><!-- subscription-details -->

                </div><!-- col-lg-6 -->


                <div class="col-lg-6">


                    <div class="card p-3 mb-3">
                        <p class="bold"> <i class="icon icon-payment"></i> Payment Options </p>


                        <div class="options-wrapper ">

                            <label class="option-container">
                                <input type="radio" checked="checked" name="report-reason" value="1">
                                <span class="checkmark"></span>
                                Credit Card
                            </label>

                            <label class="option-container">
                                <input type="radio" name="report-reason" value="2">
                                <span class="checkmark"></span>
                                Cash
                            </label>

                        </div>


                    </div>









                    <div class="d-block order-pref py-3 mb-4">

                        <p class="bold"> Order Summary </p>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 bold"> Subscription Total : </p>
                            <p class="m-0"> <span id="currency" class="bold"> KD </span> <span id="price" class="bold"> 955 </span> </p>
                        </div> <!-- d-flex -->

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 "> 2 Meals per day </p>
                        </div> <!-- d-flex -->


                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="m-0 "> Serving 2 People </p>
                        </div> <!-- d-flex -->

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 bold"> Delivery Fee : </p>
                            <p class="m-0"> <span id="delivery" class="bold text-success"> Free </span> </p>
                        </div> <!-- d-flex -->

                        <hr class="border-line">


                        <div class="d-flex justify-content-between align-items-center">
                            <p class="m-0 bold"> Weekly total : </p>
                            <p class="m-0"> <span id="currency" class="bold"> KD </span> <span id="total-price" class="bold"> KD 19 </span> </p>
                        </div>

                    </div>



                    <p class="text-center w-lg-75  m-auto color-gray"> By proceeding, you agree to our <a href="#"> Terms of Use </a> and confirm confirm you have read our <a href="#"> Privacy Statement </a> </p>

                    <div class="d-block text-center py-3">
                        <a href="congratulations.php" class="default-btn one lg-btn"> next </a>
                    </div>



                </div><!-- col-lg-6 -->

            </div><!-- row -->


        </div><!-- page-content -->
    </div><!-- container -->
</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>