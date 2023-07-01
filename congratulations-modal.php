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

                        <div class="congratulations-wrapper m-auto text-center">
                            <img src="assets/images/congratulations.png" class="img-fluid w-50 m-auto" alt="">

                            <h4> Congratulations! </h4>
                            <p> You’ve successfully joined Cari’s weekly meal plan subscription. </p>

                            <div class="d-block text-center py-3">
                                <a href="dashboard.php" class="default-btn one lg-btn"> Manage subscription </a>
                            </div>

                        </div> <!-- congratulations-wrapper -->


                    </div>
                </div>
            </div>

        </div><!-- page-content -->
    </div><!-- container -->
</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>