 <!-- Footer Area -->
 <footer class="footer-area custom-footer-area footer-area-bg">
     <div class="container">
         <div class="footer-top pt-5 pb-70">

             <div class="row">
                 <div class="col-lg-7 col-sm-12">

                     <div class="footer-widget">

                         <div class="footer-logo">

                             <a href="homepage.php">
                                 <img src="assets/images/logo-white.png" alt="Images">
                             </a>
                             <span class="h3 m-0"> The food delivery revolution </span>

                         </div>

                         <ul class="links-list mb-5">
                             <li> <a href="#"> Home </a></li>
                             <li> <a href="#"> Subscription plans </a></li>
                             <li> <a href="#"> About us </a></li>
                             <li> <a href="#"> Contact us </a></li>
                         </ul>

                         <ul class="social-link">

                             <li>
                                 <a href="https://www.linkedin.com/" target="_blank">
                                     <i class="bx bxl-linkedin"></i>
                                 </a>
                             </li>

                             <li>
                                 <a href="https://www.instagram.com/" target="_blank">
                                     <i class="bx bxl-instagram"></i>
                                 </a>
                             </li>


                             <li>
                                 <a href="https://www.tiktok.com/" target="_blank">
                                     <i class="bx bxl-tiktok"></i>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-5 col-sm-12">
                     <div class="footer-widget">

                         <ul class="links-list mb-5">
                             <li> <a href="#"> <i class="icon icon-envelope"></i> sales@getcari.com </a></li>
                             <li> <a href="#"> <i class="icon icon-cell-phone"></i> +9659701002 </a></li>
                         </ul>

                         <p> Hamra Tower, 59th floor, Al Shuhada'a Street, Sharq, Kuwait City. </p>

                         <p> Copyright © 2023 Cari General Trading Company. All rights reserved.</p>

                     </div>
                 </div>


             </div>
         </div>
     </div>
 </footer>
 <!-- Footer Area End -->

 <!-- Modal Start -->
 <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-bs-dismiss="modal">
                     <i class='bx bx-x'></i>
                 </button>
             </div>
             <div class="modal-body">
                 <form class="modal-search-form">
                     <input type="search" class="search-field" placeholder="Search...">
                     <button type="submit"><i class='bx bx-search-alt'></i></button>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal End -->

 <!-- Jquery Min JS -->
 <script src="assets/js/jquery.min.js"></script>

 <!-- Bootstrap Bundle Min JS -->
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <!-- Magnific Popup JS -->
 <script src="assets/js/magnific-popup.min.js"></script>
 <!-- Odometer JS -->
 <script src="assets/js/odometer.min.js"></script>
 <!-- Appear Min JS -->
 <script src="assets/js/appear.min.js"></script>
 <!-- Meanmenu JS -->
 <script src="assets/js/meanmenu.min.js"></script>
 <!-- Owl Carousel JS -->
 <script src="assets/js/owl.carousel.min.js"></script>
 <!-- Wow Min JS -->
 <script src="assets/js/wow.min.js"></script>
 <!-- Jquery Ui JS -->
 <script src="assets/js/jquery-ui.min.js"></script>
 <!-- Ajaxchimp Min JS -->
 <script src="assets/js/ajaxchimp.min.js"></script>
 <!-- Form Validator Min JS -->
 <script src="assets/js/form-validator.min.js"></script>
 <!-- Contact Form JS -->
 <script src="assets/js/contact-form-script.js"></script>

 <script src="assets/flatpickr/flatpickr.js"></script>

 <!-- Custom  JS -->
 <script src="assets/js/custom.js"></script>

 <script src="assets/tel-input/js/intlTelInput.js"></script>

 <script>
     var input = document.querySelector("#phone");
     window.intlTelInput(input, {
         // allowDropdown: true,
         // autoInsertDialCode: true,
         // autoPlaceholder: "on",
         // dropdownContainer: document.body,
         // excludeCountries: ["us"],
         // formatOnDisplay: false,
         // geoIpLookup: function(callback) {
         //   fetch("https://ipapi.co/json")
         //     .then(function(res) { return res.json(); })
         //     .then(function(data) { callback(data.country_code); })
         //     .catch(function() { callback("us"); });
         // },
         // hiddenInput: "full_number",
         // initialCountry: "auto",
         // localizedCountries: { 'de': 'Deutschland' },
         // nationalMode: false,
         // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
         // placeholderNumberType: "MOBILE",
         // preferredCountries: ['ksa', 'jp'],
         // separateDialCode: true,
         // showFlags: false,
         utilsScript: "assets/tel-input/js/utils.js"
     });
 </script>



 </body>

 </html>