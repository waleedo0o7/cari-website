<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">


        <div class="page-header mb-3">
            <h3 class=""> Edit Profile </h3>
            <p class="color-gray"> Tailor your membership according to your preferences and requirements. </p>
        </div>

        <div class="card p-3">

            <div class="row">


                <div class="col-lg-6 mb-3">
                    <div class="form-group has-error">
                        <label for="" class="mb-2"> First name </label>
                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username">
                    </div>
                </div>


                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="" class="mb-2"> Last name </label>
                        <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your Username">
                    </div>
                </div>


                <div class="col-lg-6 mb-3">
                    <div class="form-group has-error">
                        <label for="" class="mb-2"> Email </label>
                        <input type="email" name="name" id="name" class="form-control" required="" data-error="Please enter your Email">
                    </div>
                </div>


                <div class="col-lg-6 mb-3">
                    <div class="form-group has-error">
                        <label for="" class="mb-2"> Password </label>
                        <input type="Password" name="name" id="name" class="form-control" required="" data-error="Please enter your Email">
                    </div>
                </div>



                <div class="col-lg-12 col-md-12 text-center">
                    <a type="submit" class="default-btn lg-btn ">Edit</a>
                </div>

            </div>

        </div> <!-- card p-3 -->

    </div> <!-- container -->


</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>