<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">

        <div class="page-content card">


            <div class="row">
                <div class="col-lg-6">
                    <h4 class="mb-0"> Enter your delivery information </h4>
                    <p class="lead color-gray"> Add one or more delivery addresses </p>
                </div> <!-- col-lg-6 -->
                <div class="col-lg-6">
                    <div class="steps-wrapper">
                        <ul class="steps">
                            <li class="step active">
                                <a href="#"> 1 </a>
                                <p class="mb-0"> Meal Plan </p>
                            </li> <!-- step -->
                            <li class="step">
                                <a href="#"> 2 </a>
                                <p class="mb-0"> Delivery information </p>
                            </li> <!-- step -->
                            <li class="step">
                                <a href="#"> 3 </a>
                                <p class="mb-0"> Pick my meals </p>
                            </li> <!-- step -->
                        </ul>
                    </div><!-- steps-wrapper -->
                </div>
            </div><!-- row -->


            <div class="row">
                <div class="col-lg-6">

                    <p class="bold"> Add your address </p>

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

                    <div class="form-group mb-3">
                        <label> Address name (Optional) </label>
                        <input type="text" class="form-control" required="">
                    </div>

                    <div class="form-group mb-3">
                        <label> Area </label>
                        <input type="text" class="form-control" required="">
                    </div>

                    <div class="form-group mb-3">
                        <label> Block </label>
                        <input type="text" class="form-control" required="">
                    </div>

                    <div class="d-flex">

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

                    <div class="d-flex">

                        <div class="form-group mb-3 w-100 me-3">
                            <label> Floor N </label>
                            <input type="text" class="form-control" required="">
                        </div>


                        <div class="form-group mb-3 w-100">
                            <label> Apartment N </label>
                            <input type="text" class="form-control" required="">
                        </div>

                    </div>

                    <div class="form-group mb-3 w-100">
                        <label> Additional Instructions (Optional) </label>
                        <textarea type="text" class="form-control" required=""></textarea>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault"> Leave order at the door </label>
                    </div>

                </div> <!-- col-lg-6 -->


                <div class="col-lg-6">

                    <p class="bold"> Add your information </p>


                    <div class="d-flex">

                        <div class="form-group mb-3 w-100 me-3">
                            <label> First name </label>
                            <input type="text" class="form-control" required="">
                        </div>



                        <div class="form-group mb-3 w-100">
                            <label> Last Name </label>
                            <input type="text" class="form-control" required="">
                        </div>

                    </div>

                    <div class="form-group mb-3 w-100">
                        <label> Phone </label>
                        <input type="text" class="form-control" required="">
                    </div>

                    <div class="form-group mb-3 w-100">
                        <label> Email </label>
                        <input type="email" class="form-control" required="">
                    </div>








                    <div class="d-block order-pref py-3">

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


                    <div class="d-block text-center py-3">
                        <a href="meal-plans-select-meals.php" class="default-btn one lg-btn"> next </a>
                    </div>

                    <p class="text-center w-lg-50  m-auto color-gray"> You can update your preferences and skip, pause, or cancel anytime </p>



                </div> <!-- col-lg-6 -->

            </div><!-- row -->

        </div><!-- page-content -->
    </div><!-- container -->
</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>



<script>
    // Top Header cart popup --> increaseCount and decreaseCount START 
    let increaseCount = (event, b) => {

        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10);

        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
    }

    // Top Header cart popup --> increaseCount and decreaseCount END
    let decreaseCount = (event, b) => {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
        }
    }
</script>