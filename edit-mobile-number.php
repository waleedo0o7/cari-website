<?php include 'header.php'; ?>

<div class="main-page-wrapper edit-mobile-number">

    <div class="container container-sm-custom">

        <div class="page-content">

            <div class="row flex-column-reverse-md">
                <div class="col-lg-6 ">
                    <div class="image-with-pink-bg-wrapper">
                        <img src="assets/images/contact.png" class="img-fluid" alt="">
                    </div><!-- image-with-pink-bg-wrapper -->
                </div>

                <div class="col-lg-6 d-flex justify-content-center align-items-start flex-column">
                    <h4> Enter your mobile number </h4>
                    <p class="color-gray"> We need your phone number to confirm it's you </p>


                    <div class="form-group mb-3 w-100">
                        <label> Phone number </label>
                        <input type="text" class="form-control" id="phone">
                    </div>


                    <p class="lead"> How would you like to verify your number? </p>

                    <div class="attributes-options default style-3  fit-to-content mb-3">

                        <label class="option-container option-inline">
                            <input type="radio" checked="checked" name="Meals" value="1">
                            <span class="checkmark"> <i class="icon icon-sms"></i> SMS </span>
                        </label>

                        <label class="option-container option-inline">
                            <input type="radio" name="Meals" value="2">
                            <span class="checkmark"> <i class="icon icon-whatsapp"></i> whatsapp </span>

                        </label>

                    </div>


                    <a href="meal-plans-delivery.php" data-bs-toggle="modal" data-bs-target="#verification-code-modal" class="default-btn one lg-btn"> Next </a>



                </div>
            </div>



        </div><!-- page-content -->
    </div><!-- container -->

</div><!-- main-page-wrapper -->

<!-- Modal  payment-method -->
<div class="modal fade" id="verification-code-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Verify your number </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="d-block text-center mb-3">
                    <h5> We sent a verification code to </h5>

                    <p class="lead bold"> +965 977 01234 </p>

                </div>


                <p class="text-center mb-0"> Enter the 4-digit code you recieved </p>

                <div class="mb-3 activate-inputs-container">

                    <div class="activate-inputs">
                        <input class="num1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num2" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num3" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num4" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                    </div><!-- activate-inputs -->

                    <form action="#" id="activate-code" class="d-none">
                        <input id="activate-code-input" name="code" type="text">
                    </form>

                </div>

                <div class="count-down-numbers-wrapper text-center">

                    <p class="lead"> Request a new code in </p>

                    <div class="sign-up-btn-container mb-3">
                        <div id="count-down-numbers">
                            <span class="black" id="minutes">02</span>
                            <span class="black" id="colon">:</span>
                            <span class="black" id="seconds">00</span>
                        </div>
                    </div><!-- submit-btn-container -->

                </div><!-- count-down-numbers-wrapper -->

                <div class="d-block text-center">
                    <p> Didn’t receive the code? </p>

                    <div class="buttons-wrapper">
                        <a href="#" class="default-btn three btn-sm me-2"> <i class="icon icon-sms me-2"></i> SMS </a>
                        <a href="#" class="default-btn three btn-sm me-2"> <i class="icon icon-whatsapp"></i> whatsapp </a>
                    </div><!-- buttons-wrapper -->

                </div>



            </div>

        </div>
    </div>
</div>





<?php include 'footer.php'; ?>