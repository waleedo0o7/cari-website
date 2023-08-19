<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">

        <div class="page-content card">


            <div class="row mb-3">

                <div class="col-lg-6">
                    <h4 class="mb-0"> Pick the type of meals you like </h4>
                    <p class="lead color-gray"> Select Your Meals </p>
                </div> <!-- col-lg-6 -->

                <div class="col-lg-6">
                    <div class="steps-wrapper">
                        <ul class="steps">
                            <li class="step finished">
                                <a href="#"> 1 </a>
                                <p class="mb-0"> Meal Plan </p>
                            </li> <!-- step -->
                            <li class="step finished">
                                <a href="#"> 2 </a>
                                <p class="mb-0"> Delivery information </p>
                            </li> <!-- step -->
                            <li class="step active">
                                <a href="#"> 3 </a>
                                <p class="mb-0"> Pick my meals </p>
                            </li> <!-- step -->
                        </ul>
                    </div><!-- steps-wrapper -->
                </div>

            </div><!-- row -->

            <div class="row mb-3">
                <div class="col-lg-12">

                    <div class="calendar-wrapper mb-3">

                        <div class="days-wrapper">

                            <!-- <div class="one-day active" data-day="11-6-2013">
                                <p class="day-name"> Monday </p>
                                <p class="date"> March 16</p>
                            </div>  

                            <div class="one-day" data-day="11-6-2013">
                                <p class="day-name"> Monday </p>
                                <p class="date"> March 16</p>
                            </div>   -->


                        </div> <!-- days-wrapper -->


                        <div class="nex-days">
                            <p class="mb-0"> Upcoming... </p>
                            <p class="mb-0"> Check back next week </p>
                        </div>


                    </div><!-- calendar-wrapper -->



                    <div class="nav-and-meals-wrapper">

                        <div class="nav-wrapper">

                            <div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="default-btn tow active" id="breakfast-tab" data-bs-toggle="pill" data-bs-target="#breakfast" type="button" role="tab" aria-controls="breakfast" aria-selected="true"> Breakfast </button>
                                <button class="default-btn tow" id="lunch-tab" data-bs-toggle="pill" data-bs-target="#lunch" type="button" role="tab" aria-controls="lunch" aria-selected="false"> lunch </button>
                                <button class="default-btn tow" id="dinner-tab" data-bs-toggle="pill" data-bs-target="#dinner" type="button" role="tab" aria-controls="dinner" aria-selected="false"> dinner </button>
                                <button class="default-btn tow" id="snacks-tab" data-bs-toggle="pill" data-bs-target="#snacks" type="button" role="tab" aria-controls="snacks" aria-selected="false"> Snacks </button>

                                <a href="meal-plans-final-step.php" class="default-btn one mx-2"> Next </a>


                            </div>

                        </div> <!-- nav-wrapper -->

                        <div class="main-meals-wrapper">

                            <div class="d-flex align-items-start">

                                <div class="tab-content" id="v-pills-tabContent">


                                    <!-- breakfast TAP -->
                                    <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">

                                        <div class="row">

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                        </div> <!-- row -->

                                    </div>

                                    <!-- lunch TAP -->
                                    <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">

                                        <div class="row">

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                        </div> <!-- row -->



                                    </div>


                                    <!-- dinner TAP -->
                                    <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">


                                        <div class="row">

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                        </div> <!-- row -->



                                    </div>


                                    <!-- snacks TAP -->
                                    <div class="tab-pane fade" id="snacks" role="tabpanel" aria-labelledby="snacks-tab">

                                        <div class="row">

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-01" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/001.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray description small"> Lamb Kebabs , Boiled , sauce , Lamb Kebabs , Boiled , sauce </p>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container disabled p-0">

                                                    <input type="checkbox" id="product-02" name="select-product" class="radio-with-select-item" disabled="disabled" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-02" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/004.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                            <div class="col-lg-3">

                                                <div class="one-meal-card-wrapper option-container p-0 ">

                                                    <input type="checkbox" id="product-04" name="select-product" class="radio-with-select-item" value="1">
                                                    <span class="checkmark"></span>

                                                    <label for="product-04" class="one-meal-card style-2 mb-4">

                                                        <img src="assets/images/003.jpg" class="img-fluid" alt="">

                                                        <div class="p-3">

                                                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                                                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                                                        </div>

                                                    </label> <!-- flexible-plans-card -->

                                                </div> <!-- one-meal-wrapper -->


                                            </div> <!-- col-lg-3 -->

                                        </div> <!-- row -->



                                    </div>


                                </div> <!-- main tab-content -->
                            </div>



                        </div> <!-- main-meals-wrapper -->

                    </div>

                </div> <!-- col-lg-12 -->

            </div><!-- row -->

        </div><!-- page-content -->
    </div><!-- container -->
</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>