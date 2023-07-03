<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">

        <div class="page-content card">











 
 

                <div class="attributes-options default">

                    <label class="option-container option-inline">
                        <input type="checkbox" name="size" value="1">
                        <span class="checkmark"> S </span>
                    </label>

                    <label class="option-container option-inline">
                        <input type="checkbox" name="size" value="2">
                        <span class="checkmark"> M </span>

                    </label>

                    <label class="option-container option-inline">
                        <input type="checkbox" name="size" value="3">
                        <span class="checkmark"> L </span>

                    </label>


                    <label class="option-container option-inline">
                        <input type="checkbox" name="size" value="4" disabled="disabled">
                        <span class="checkmark"> XX </span>

                    </label>

                </div> <!-- attributes-options -->
 










            <h1>International Telephone Input</h1>
            <form>
                <input id="phone" name="phone" placeholder="" type="tel" />
            </form>


            <div class="d-block">

                <a href="#" class="default-btn"> default-btn </a>

                <a href="#" class="default-btn two"> two </a>

                <a href="#" class="default-btn tow"> tow </a>

                <a href="#" class="default-btn three"> three </a>

                <div class="options-wrapper">

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


                <i class="icon icon-check"></i>







                <div class="one-meal-card-wrapper option-container p-0 ">

                    <input type="checkbox" id="product-01" name="select-product" class="radio-with-select-item" value="1">
                    <span class="checkmark"></span>

                    <label for="product-01" class="one-meal-card style-2 mb-4">

                        <img src="assets/images/plans-01.png" class="img-fluid" alt="">

                        <div class="p-3">

                            <h6> Steelhead Trout Fillets & Creamy Pesto </h6>

                            <p class="color-gray"> <i class="icon icon-fire"> </i> <span> 1,200 </span> <span> Kcal </span> </p>

                        </div>

                    </label> <!-- flexible-plans-card -->

                </div> <!-- one-meal-wrapper -->






            </div>

        </div><!-- page-content -->
    </div><!-- container -->
</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>