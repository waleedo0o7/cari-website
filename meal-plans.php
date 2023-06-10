<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">

        <div class="page-content card">


            <div class="row">
                <div class="col-lg-6">
                    <h4 class="mb-0"> Create your own custom Meal plan </h4>
                    <p class="lead color-gray"> You can edit your plan at anytime </p>
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

                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <div class="switches-container">
                            <input type="radio" id="weekly" name="switchPlan" value="1" checked="checked" />
                            <input type="radio" id="monthly" name="switchPlan" value="2" />
                            <label for="weekly"> Weekly </label>
                            <label for="monthly"> Monthly </label>
                            <div class="switch-wrapper">
                                <div class="switch">
                                    <div> Weekly </div>
                                    <div> Monthly </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- d-flex -->

                    <div class="d-flex justify-content-center align-items-center mb-4">


                        <div class="attributes-options default">

                            <label class="option-container option-inline">
                                <input type="radio" checked="checked" name="size" value="1">
                                <span class="checkmark"> Fresh Meals </span>
                            </label>

                            <label class="option-container option-inline">
                                <input type="radio" name="size" value="2">
                                <span class="checkmark"> Fresh Pressed Juices </span>

                            </label>

                            <label class="option-container option-inline">
                                <input type="radio" name="size" value="3">
                                <span class="checkmark"> Immune Boost & Detox </span>

                            </label>

                        </div> <!-- attributes-options -->

                    </div> <!-- d-flex -->

                    <div class="d-block mb-4">


                        <div class="flexible-plans-card-wrapper">

                            <div class="option-container">
                                <input type="radio" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                <span class="checkmark"></span>
                            </div>

                            <label for="product-01" class="flexible-plans-card style-2 mb-4">

                                <div class="flexible-plans-card-content p-3">
                                    <div class="d-flex d-flex justify-content-between align-items-center">
                                        <h5> 1 Meal </h5>
                                        <h2> KD9 </h2>
                                    </div>
                                    <p class="lead"> Perfect for those looking for a convenient and cost-effective option while still enjoying a satisfying and wholesome meal. </p>
                                </div>

                                <div class="image-wrapper">
                                    <img src="assets/images/plans-01.png" alt="">
                                </div>

                            </label> <!-- flexible-plans-card -->


                        </div><!-- flexible-plans-card-wrapper -->




                        <div class="flexible-plans-card-wrapper ">

                            <div class="option-container">
                                <input type="radio" id="product-02" name="select-product" class="radio-with-select-item" value="1">
                                <span class="checkmark"></span>
                            </div>

                            <label for="product-02" class="flexible-plans-card recommended style-2 mb-4">

                                <div class="flexible-plans-card-content p-3">
                                    <div class="d-flex d-flex justify-content-between align-items-center">
                                        <h5> 1 Meal </h5>
                                        <h2> KD9 </h2>
                                    </div>
                                    <p class="lead"> Perfect for those looking for a convenient and cost-effective option while still enjoying a satisfying and wholesome meal. </p>
                                </div>

                                <div class="image-wrapper">
                                    <img src="assets/images/plans-01.png" alt="">
                                </div>

                            </label> <!-- flexible-plans-card -->


                        </div><!-- flexible-plans-card-wrapper -->





                        <div class="flexible-plans-card-wrapper">

                            <div class="option-container">
                                <input type="radio" id="product-03" name="select-product" class="radio-with-select-item" value="1">
                                <span class="checkmark"></span>
                            </div>

                            <label for="product-03" class="flexible-plans-card style-2 mb-4">

                                <div class="flexible-plans-card-content p-3">
                                    <div class="d-flex d-flex justify-content-between align-items-center">
                                        <h5> 1 Meal </h5>
                                        <h2> KD9 </h2>
                                    </div>
                                    <p class="lead"> Perfect for those looking for a convenient and cost-effective option while still enjoying a satisfying and wholesome meal. </p>
                                </div>

                                <div class="image-wrapper">
                                    <img src="assets/images/plans-01.png" alt="">
                                </div>

                            </label> <!-- flexible-plans-card -->


                        </div><!-- flexible-plans-card-wrapper -->





                    </div> <!-- d-flex -->

                </div> <!-- col-lg-6 -->


                <div class="col-lg-6">

                    <div class="d-block customize-your-plan py-3">

                        <h6> <i class="icon icon-dishes me-1"></i> Customize your plan </h6>

                        <p class="color-gray small"> Select 2 meal types </p>

                        <div class="attributes-options default">

                            <label class="option-container option-inline">
                                <input type="checkbox" checked="checked" name="size" value="1">
                                <span class="checkmark"> Breakfast </span>
                            </label>

                            <label class="option-container option-inline">
                                <input type="checkbox" name="size" value="2">
                                <span class="checkmark"> Lunch </span>
                            </label>

                            <label class="option-container option-inline">
                                <input type="checkbox" name="size" value="3" disabled>
                                <span class="checkmark"> Dinner </span>

                            </label>

                        </div> <!-- attributes-options -->


                    </div><!-- d-block -->

                    <div class="d-block calories py-3">

                        <h6> <i class="icon icon-fire me-1"></i> Calories </h6>

                        <p class="color-gray small"> You’ll receive three full meals (Breakfast, lunch, dinner) everyday. </p>


                        <div class="attributes-options default">

                            <label class="option-container option-inline">
                                <input type="radio" checked="checked" name="size" value="1">
                                <span class="checkmark"> 1200 Cal/Day </span>
                            </label>

                            <label class="option-container option-inline">
                                <input type="radio" name="size" value="2">
                                <span class="checkmark"> 1700 Cal/Day </span>
                            </label>


                        </div> <!-- attributes-options -->


                    </div><!-- d-block -->

                    <div class="d-block number-of-servings py-3">

                        <h6> <i class="icon icon-user me-1"></i> Number of servings </h6>

                        <p class="color-gray small"> You’ll receive three full meals (Breakfast, lunch, dinner) everyday. </p>




                        <div class="change-quantity-wrapper">
                            <div class="counter">
                                <span class="down" onclick="decreaseCount(event, this)"> <i class="icon icon-minus"></i> </span>
                                <input type="text" value="4">
                                <span class="up" onclick="increaseCount(event, this)"> <i class="icon icon-plus"></i></span>
                            </div> <!-- counter -->
                        </div>




                    </div><!-- d-block -->

                    <div class="d-block starting-date py-3 mb-3">

                        <h6> <i class="icon icon-calendar me-1"></i> Starting Date </h6>

                        <p class="color-gray small"> Pick when you would like to start receiving meals </p>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Starting Date </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pick starting date">
                        </div>

                    </div><!-- d-block -->


                    <div class="d-block order-pref py-3">

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 bold"> Subscription Total : </p>
                            <p class="m-0"> <span id="currency" class="bold"> KD </span> <span id="price" class="bold"> 955 </span> </p>
                        </div> <!-- d-flex -->

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <p class="m-0 bold"> Delivery Fee : </p>
                            <p class="m-0"> <span id="delivery" class="bold text-success"> Free </span> </p>
                        </div> <!-- d-flex -->

                        <hr class="border-line" />

                        <div class="d-flex justify-content-between align-items-center">
                            <p class="m-0 bold"> To Pay : </p>
                            <p class="m-0"> <span id="currency" class="bold"> KD </span> <span id="total-price" class="bold"> 955 </span> </p>
                        </div> <!-- d-flex -->



                    </div><!-- d-block -->

                    <div class="d-block text-center py-3">
                        <a href="#" class="default-btn one lg-btn"> next </a>
                    </div><!-- d-block -->

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