<?php include 'header.php'; ?>

<div class="main-page-wrapper bg-gray">

    <div class="user-area pt-100 pb-70">
        <div class="container">




            <div class="page-header text-center mb-5">
                <h3 class=""> Dashboard </h3>
                <p class="color-gray"> In this page you can manage your account information </p>
            </div>


            <div class="row align-items-center justify-content-center">

                <div class="col-lg-3">
                    <div class="user-all-form">
                        <a href="edit-profile.php" class="dashboard-card">
                            <i class="icon icon-user"></i>
                            <h5 class="text-center">Edit Profile </h5>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="user-all-form">
                        <a href="manage-subscription.php" class="dashboard-card">
                            <i class="icon icon-summary"></i>
                            <h5 class="text-center"> Manage subscription </h5>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div><!-- main-page-wrapper -->

<?php include 'footer.php'; ?>