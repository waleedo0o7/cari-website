<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="container">

        <div class="page-content card">




            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="m-auto text-center">
                            <img src="assets/images/something-wrong.png" class="img-fluid w-50 m-auto" alt="">

                            <h4> Something went wrong </h4>
                            <p> An error occurred while trying to create you meal plan subscription. Please try again or contact our customer support. </p>

                            <div class="d-block text-center py-3">
                                <a href="congratulations.php" class="default-btn one lg-btn"> Try again </a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>





        </div><!-- page-content -->
    </div><!-- container -->
</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>