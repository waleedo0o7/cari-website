<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">

        <div class="page-header  mb-3">
            <h3 class=""> Manage Subscription </h3>
            <p class="color-gray"> Tailor your membership according to your preferences and requirements. </p>
        </div>

        <div class="card p-3 mb-3">

            <div class="row">

                <div class="col-lg-4">

                    <div class="d-flex align-items-center mb-2">
                        <p class="bold mb-0 me-2"> <i class="icon icon-chef-hat"></i> 2 Meal Plan </p>
                        <span class="badge bg-light text-dark custom-badge"> Weekly </span>
                    </div>

                    <p> SAR19 per person/week </p>

                    <div class="d-flex">

                        <a href="homepage.php" class="default-btn one btn-sm me-2"> Explore Plans </a>
                        <a href="#" class="default-btn tow btn-sm"> Pause subscription </a>

                    </div>
                </div> <!-- col-lg-4 -->


                <div class="col-lg-4">

                    <div class="d-flex align-items-center mb-2">
                        <p class="bold mb-0 me-2"> <i class="icon icon-payment"></i> Billing period </p>
                    </div>

                    <p> Weekly (renews June 23rd, 2023) </p>

                    <a href="homepage.php" class="default-btn tow btn-sm"> Change to monthly billing </a>

                </div> <!-- col-lg-4 -->


                <div class="col-lg-4">

                    <div class="d-flex align-items-center mb-2">
                        <p class="bold mb-0 me-2"> <i class="icon icon-user"></i> Members </p>
                    </div>

                    <p> 2 Members </p>

                </div> <!-- col-lg-4 -->

            </div> <!-- row -->

            <hr />

            <div class="row">


                <div class="col-lg-6">

                    <div class="d-flex align-items-center mb-3">
                        <p class="bold mb-0 me-2"> <i class="icon icon-location"></i> Delivery Address </p>
                    </div>

                    <div class="address-wrapper mb-3">

                        <p class="mb-1 color-gray"> Sharafiyah Dist </p>
                        <p class="mb-1 color-gray"> Jeddah </p>
                        <p class="mb-1 color-gray"> 15607 Saudi Arabia </p>

                    </div>

                    <a href="#" class="default-btn tow btn-sm" data-bs-toggle="modal" data-bs-target="#update-delivery-address "> Update delivery address </a>



                </div> <!-- col-lg-6 -->


                <div class="col-lg-6">

                    <div class="d-flex align-items-center mb-2">
                        <p class="bold mb-0 me-2"> <i class="icon icon-cell-phone"></i> Contact info </p>
                    </div>

                    <div class="info-wrapper mb-3">

                        <p class="mb-1 color-gray"> Mohammed Ahmad </p>
                        <p class="mb-1 color-gray"> +966 453 635 768 </p>

                    </div>

                    <a href="#" class="default-btn tow btn-sm" data-bs-toggle="modal" data-bs-target="#update-contact-info "> Update contact info </a>


                </div> <!-- col-lg-6 -->

            </div> <!-- row -->

            <hr />

            <div class="d-flex align-items-center mb-3">
                <p class="bold mb-0 me-2"> <i class="icon icon-payment"></i> Billing Info </p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="d-flex align-items-center mb-2">
                        <p class="bold mb-0 me-2"> Billing Email </p>
                    </div>

                    <div class="billing-email-wrapper mb-3">
                        <p class="mb-1 color-gray"> Mohammed_Ahmad@gmail.com </p>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <p class="bold mb-0 me-2"> Billing Address </p>
                    </div>

                    <div class="address-wrapper mb-3">

                        <p class="mb-1 color-gray"> Sharafiyah Dist </p>
                        <p class="mb-1 color-gray"> Jeddah </p>
                        <p class="mb-1 color-gray"> 15607 Saudi Arabia </p>

                    </div>

                    <a href="#" class="default-btn tow btn-sm" data-bs-toggle="modal" data-bs-target="#"> Update delivery address </a>



                </div> <!-- col-lg-6 -->

                <div class="col-lg-6">


                    <div class="d-flex align-items-center mb-2">
                        <p class="bold mb-0 me-2"> Payment Methods </p>
                    </div>

                    <p class="mb-1 color-gray"> MasterCard ending 896 (exp 28) </p>


                    <a href="#" class="default-btn tow btn-sm" data-bs-toggle="modal" data-bs-target="#update-payment-method "> update payment method </a>

                </div> <!-- col-lg-6 -->

            </div> <!-- row -->

        </div> <!-- card p-3 -->

        <a href="#"> <img src="assets/images/banner-001.png" alt=""> </a>

    </div> <!-- container -->

</div><!-- main-page-wrapper -->

<!-- Modal  contact-info-->
<div class="modal fade" id="update-contact-info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit Contact info </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="row align-items-center">
                    <div class="col-lg-12">

                        <form id=" " novalidate="true">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2"> First name </label>
                                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username or Email">
                                    </div>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2"> last name </label>
                                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username or Email">
                                    </div>
                                </div>

                                <div class="col-lg-12 ">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2"> phone </label>
                                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username or Email">
                                    </div>
                                </div>


                                <div class="col-lg-12 ">
                                    <div class="form-group mb-3">
                                        <label for="" class="mb-2"> Email </label>
                                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username or Email">
                                    </div>
                                </div>



                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="default-btn two btn-sm me-2" data-bs-dismiss="modal">Close</button>
                <button type="button" class="default-btn one btn-sm me-2"> Save Changes </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal  delivery-address -->
<div class="modal fade" id="update-delivery-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit delivery address </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form id=" " novalidate="true">
                    <div class="row">



                        <div class="col-lg-12">
                            <div class="form-group mb-3">


                                <div class="attributes-options default fit-to-content style-2">

                                    <label class="option-container option-inline">
                                        <input type="radio" checked="checked" name="size" value="1">
                                        <span class="checkmark"> <i class="icon icon-apartment"></i> Apartment </span>
                                    </label>

                                    <label class="option-container option-inline">
                                        <input type="radio" name="size" value="2">
                                        <span class="checkmark"> <i class="icon icon-house"></i> House </span>
                                    </label>

                                    <label class="option-container option-inline">
                                        <input type="radio" name="size" value="3">
                                        <span class="checkmark"> <i class="icon icon-office"></i> Office </span>
                                    </label>

                                </div> <!-- attributes-options -->

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label> Address name (Optional) </label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group mb-3">
                                <label> Area </label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label> Block </label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div class="d-flex inline-inputs-group">

                                <div class="form-group mb-3 w-100 me-3">
                                    <label> Street </label>
                                    <input type="text" class="form-control" required="">
                                </div>


                                <div class="form-group mb-3 w-100 me-3">
                                    <label> Avenue (Optional) </label>
                                    <input type="text" class="form-control" required="">
                                </div>


                                <div class="form-group mb-3 w-100">
                                    <label> Building N </label>
                                    <input type="text" class="form-control" required="">
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="d-flex inline-inputs-group">

                                <div class="form-group mb-3 w-100 me-3">
                                    <label> Floor N </label>
                                    <input type="text" class="form-control" required="">
                                </div>


                                <div class="form-group mb-3 w-100">
                                    <label> Apartment N </label>
                                    <input type="text" class="form-control" required="">
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3 w-100">
                                <label> Additional Instructions (Optional) </label>
                                <textarea type="text" class="form-control" required=""></textarea>
                            </div>

                        </div>


                        <div class="col-lg-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"> Leave order at the door </label>
                            </div>
                        </div>







                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="default-btn two btn-sm me-2" data-bs-dismiss="modal">Close</button>
                <button type="button" class="default-btn one btn-sm me-2"> Save Changes </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal  payment-method -->
<div class="modal fade" id="update-payment-method" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit payment method </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form id=" " novalidate="true">
                    <div class="row">



                        <div class="col-lg-12">

                            <div class="form-group mb-3">
                                <label> card name </label>
                                <input type="text" class="form-control" required="">
                            </div>

                        </div>



                        <div class="col-lg-12">

                            <div class="form-group mb-3 card-number-form-group">
                                <label> card number </label>
                                <input type="text" class="form-control" required="">
                            </div>

                        </div>




                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label> expire date </label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label> CCV </label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">   Save card no. for future payments </label>
                            </div>
                        </div>

                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="default-btn two btn-sm me-2" data-bs-dismiss="modal">Close</button>
                <button type="button" class="default-btn one btn-sm me-2"> Save Changes </button>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>