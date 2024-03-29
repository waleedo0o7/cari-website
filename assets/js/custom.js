(function ($) {
    'use strict';

    let isRTL = false;
    let map;
    let marker;
    let lng;
    let lat;
    let populate = function () { }; // DOM inputs

    function initMap() {

        navigator.geolocation.getCurrentPosition(currentLocation => {

            lng = currentLocation.coords.longitude;
            lat = currentLocation.coords.latitude;

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                scrollwheel: true,
                center: new google.maps.LatLng(lat, lng),
            });



            marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, lng),
                map: map,
                draggable: true
            });


            populate = (lat, lng, addr) => {
                document.querySelector('input[id="address"]').value = addr;
                document.querySelector('input[id="latitude"]').value = lat.toFixed(6);
                document.querySelector('input[id="longitude"]').value = lng.toFixed(6);
            };

            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();

            const findlocation = (e) => {
                geocoder.geocode({
                    'location': e.latLng
                }, (results, status) => {
                    return evtcallback(results, status, e.latLng);
                });
            };

            const mapclickhandler = function (e) {
                findlocation.call(this, e);
            };


            // respond to clicks on the marker
            const markerclickhandler = function (e) {
                infowindow.open(map, this);
                infowindow.setContent(e.latLng.lat() + ', ' + e.latLng.lng());
                if (this.hasOwnProperty('address')) infowindow.setContent(this.address);
            };

            const draghandler = function (e) {
                findlocation.call(this, e);
                map.panTo(e.latLng);

            };


            const evtcallback = function (results, status) {
                let _address, _location;
                if (status == google.maps.GeocoderStatus.OK) {
                    _address = results[0].formatted_address;
                    _location = results[0].geometry.location;

                    // set custom properties for the marker 
                    // which are used to populate infowindow
                    marker.address = _address;
                    marker.location = _location;

                    // populate the HTML form elements
                    populate(_location.lat(), _location.lng(), _address);

                    // open and set content for the infowindow
                    infowindow.open(map, marker);
                    infowindow.setContent(_address);


                    let latlng = new google.maps.LatLng(_location.lat(), _location.lng());
                    marker.setPosition(latlng);
                    map.setCenter(latlng);
                    return true;
                }

                console.warn(status);
            };


            google.maps.event.addListener(map, 'click', mapclickhandler);
            google.maps.event.addListener(marker, 'click', markerclickhandler);
            google.maps.event.addListener(marker, 'dragend', draghandler);
            map.setCenter(marker.position);

        })
    }

    function getMyCurrentLocation() {
        let currentLocation = new google.maps.LatLng(lat, lng);
        map.setCenter(currentLocation);
        marker.setPosition(currentLocation);
        map.setZoom(12);
        populate(lat, lng, "");
    }

    function editMapLocation(dbLat, dbLng) {
        let currentLocation = new google.maps.LatLng(dbLat, dbLng);
        map.setCenter(currentLocation);
        marker.setPosition(currentLocation);
        map.setZoom(12);
        populate(dbLat, dbLng, "");
    }



    (function ($) {




        $(".update-delivery-address-btn").on("click", function () {
            setTimeout(() => {
                editMapLocation(24.088938, 32.899830);
            }, 200);
        })

        if ($("#get-current-location-button").length) {

            setTimeout(() => {
                populate(lat, lng, "");
            }, 1000);

            $("#get-current-location-button").on("click", function () {
                getMyCurrentLocation();
            })
        }

        if ($("#map").length) {
            initMap();
        }


    })($);


    if ($(".customize-your-plan").length) {

        let checkedInputs = $(".customize-your-plan .attributes-options.default .option-container input");

        function checkAllInputs() {
            checkedInputs.each(function (index) {

                checkedInputs[index].checked = true

            });
        }

        function preventUncheckInputs() {

            $(".customize-your-plan .attributes-options.default .option-container input").addClass("prevented");

            checkedInputs.each(function (e) {

                console.log($(this));


                $(this).click(function (event) {
                    if ($(this).hasClass('prevented')) {
                        event.preventDefault();
                    }
                });


            });

        }

        function removePreventedClass() {
            $(".customize-your-plan .attributes-options.default .option-container input").removeClass("prevented");
        }

        $(".flexible-plans-card").on("click", function () {

            setTimeout(() => {

                if ($('.three-meals-plan input').is(":checked")) {

                    checkAllInputs();

                    preventUncheckInputs();

                } else {

                    removePreventedClass();

                }

            }, 50);

        })

        $(".flexible-plans-card").on("click", function () {
            $(".flexible-plans-card").removeClass("selected");
            $(this).addClass("selected");
        })

    }

    if ($(".flatpickr").length) {

        let date;

        $('.flatpickr').flatpickr(
            {
                enable: [
                    // Disable weekends
                    function (date) {
                        return (date.getDay() === 0);
                    },
                ]
            }
        );

    }


    if ($("html").attr("dir") === 'rtl') {
        isRTL = true
    }





    if ($(".banner-area-for").length && $("html").attr("dir") === 'rtl') {
        $(".cari-delivery-wrapper img").attr("src", "assets/images/cari-delivery-ar.png")
    }



    
    //////////// Activate page start

    $(document).on("click", ".activate-inputs input", function () {
        $(this).select();
    })

    $(".activate-inputs input").on("keyup", function () {
        if ($(this).val()) {
            $(this).next().focus();
            $(this).next().select();
        }
        if ($(this).index() == 3) {
            $(this).blur();

            let activateCode = '';

            $(".activate-inputs input").each(function () {
                activateCode += $(this).val();
            });

            $("#activate-code-input").val(activateCode);

            setTimeout(() => {
                $("#activate-code").submit();
            }, 200);

        }
    })

    // Resend Code
    let counterDownTwoMinutes = () => {

        let minutesLabel = document.getElementById("minutes");
        let secondsLabel = document.getElementById("seconds");
        let totalSeconds = 120;

        setInterval(setTime, 1000);

        function setTime() {
            if (totalSeconds > 0) {

                // console.log(totalSeconds);
                --totalSeconds;
                secondsLabel.innerHTML = pad(totalSeconds % 60);
                minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));

                if (totalSeconds == 0) {
                    $(".count-down-numbers-wrapper").html(`<a href="#" class="default-btn one " id="resend-code" > Resend New Code </a>`);
                }
            }
        }

        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }



    }

    if ($("#minutes").length) {

        counterDownTwoMinutes();

    }

    //////////// Activate page end

    function createWeek() {

        let weekInDays = [];

        let weekFullHTML = ''

        function getdayName(date = new Date()) {
            return date.toLocaleDateString('en-US', { weekday: 'long' });
        }

        function getMonthName(monthNumber) {

            const date = new Date();

            return date.toLocaleString('en-US', {
                month: 'long',
            });
        }

        for (let i = 0; i < 5; i++) {

            let toDay = new Date();

            let loopDay = new Date(toDay.getTime() + i * 24 * 60 * 60 * 1000);

            let dayInObj = {
                'month': getMonthName(loopDay.getMonth()),
                'dayNum': loopDay.getDate(),
                'dayName': getdayName(loopDay)
            }

            weekInDays.push(dayInObj);

            let formatedDate = `${loopDay.getDate()}-${loopDay.getMonth() + 1}-${loopDay.getFullYear()}`

            let html = `
            <div class="one-day" data-day="${formatedDate}">
                <p class="day-name"> ${getdayName(loopDay)} </p>
                <p class="date">  ${getMonthName(loopDay.getMonth())}  ${loopDay.getDate()} </p>
            </div>
            `
            weekFullHTML += html;

        }

        $(".days-wrapper").html(weekFullHTML);

        $(".days-wrapper .one-day:first").addClass("active");
    }


    createWeek();



    $(document).on("click", ".one-day", function () {

        $(".one-day").removeClass("active");
        $(this).addClass("active");

        alert($(this).attr("data-day"))


    })

    // Mean Menu
    $('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    // Header Sticky
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 120) {
            $('.navbar-area').addClass("is-sticky");
        }
        else {
            $('.navbar-area').removeClass("is-sticky");
        }
    });

    // Language-switcher
    $(".language-option").each(function () {
        var each = $(this)
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children('a');
        each.find(".language-dropdown-menu").on("click", "a", function () {
            allOptions.removeClass('selected');
            $(this).addClass('selected');
            $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    })

    // Testimonials Slider
    $('.testimonials-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        items: 1,
        autoplay: true,
        autoHeight: true,
        autoplayHoverPause: true,
        mouseDrag: false,
        touchDrag: false,
    })

    // Banner Slider
    $('.banner-slider').owlCarousel({
        loop: true,
        margin: 0,
        autoHeight: true,
        nav: false,
        items: 1,
        dots: true,
        center: true,
        autoplay: true,
        autoplayHoverPause: true,
    })

    // Choose Slider
    $('.choose-slider').owlCarousel({
        loop: true,
        margin: 30,
        autoHeight: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        navText: [
            "<i class='bx bx-left-arrow-alt'></i>",
            "<i class='bx bx-right-arrow-alt'></i>"
        ],
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
                center: false,
            },
            1000: {
                items: 4,
            },
        }
    })

    // Service Preview Slider
    $('.service-preview-slider').owlCarousel({
        loop: true,
        margin: 30,
        autoHeight: true,
        nav: true,
        items: 1,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        navText: [
            "<i class='bx bx-left-arrow-alt'></i>",
            "<i class='bx bx-right-arrow-alt'></i>"
        ],
    })


    // Recipe Slider
    $('.recipe-slider').owlCarousel({
        loop: true,
        margin: 30,
        autoHeight: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        }
    })

    // Gallery Slider
    $('.gallery-slider').owlCarousel({
        loop: true,
        margin: 25,
        autoHeight: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
                center: false,
            },
            1000: {
                items: 5,
            },
        }
    })









    // Choose Slider
    $('.products-slider').owlCarousel({
        loop: true,
        margin: 30,
        autoHeight: true,
        nav: false,
        dots: true,

        autoplay: true,
        autoplayTimeout: 2000,

        autoplayHoverPause: false,
        rtl: isRTL,
        navText: [
            "<i class='bx bx-left-arrow-alt'></i>",
            "<i class='bx bx-right-arrow-alt'></i>"
        ],
        responsive: {
            0: {
                items: 1.8,
                center: true,
            },
            768: {
                items: 3.8,
                center: true,
            },
            1200: {
                items: 3.8,
                center: true,
            },
        }
    })



    // Choose Slider
    $('.plans-slider').owlCarousel({
        loop: true,
        margin: 40,
        autoHeight: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: false,
        rtl: isRTL,
        navText: [
            "<i class='bx bx-left-arrow-alt'></i>",
            "<i class='bx bx-right-arrow-alt'></i>"
        ],
        responsive: {
            0: {
                items: 1.4,
                center: true,
            },
            768: {
                items: 1.4,
                center: true,
            },
            1200: {
                items: 3,
            },
        }
    })





    // Popup Gallery 
    $('.gallery-view').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        }
    });

    // Popup Video 
    $('.play-btn').magnificPopup({
        disableOn: 0,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Popup Video Two
    $('.btn-play').magnificPopup({
        disableOn: 0,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Datetimepicker
    $('#datetimepicker').datepicker();

    // Tabs Single Page
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li').on('click', function (g) {
        var tab = $(this).closest('.tab'),
            index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
    });

    // FAQ Accordion JS
    $('.accordion').find('.accordion-title').on('click', function () {
        // Adds Active Class
        $(this).toggleClass('active');
        // Expand or Collapse This Panel
        $(this).next().slideToggle('fast');
        // Hide The Other Panels
        $('.accordion-content').not($(this).next()).slideUp('fast');
        // Removes Active Class From Other Titles
        $('.accordion-title').not($(this)).removeClass('active');
    });

    // Input Plus & Minus Number JS
    $('.input-counter').each(function () {
        var spinner = jQuery(this),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.plus-btn'),
            btnDown = spinner.find('.minus-btn'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.on('click', function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.on('click', function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });

    // Count Time JS
    // function makeTimer() {
    //     var endTime = new Date("October 30, 2022 17:00:00 PDT");
    //     var endTime = (Date.parse(endTime)) / 1000;
    //     var now = new Date();
    //     var now = (Date.parse(now) / 1000);
    //     var timeLeft = endTime - now;
    //     var days = Math.floor(timeLeft / 86400);
    //     var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    //     var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
    //     var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
    //     if (hours < "10") { hours = "0" + hours; }
    //     if (minutes < "10") { minutes = "0" + minutes; }
    //     if (seconds < "10") { seconds = "0" + seconds; }
    //     $("#days").html(days + "<span>Days</span>");
    //     $("#hours").html(hours + "<span>Hours</span>");
    //     $("#minutes").html(minutes + "<span>Minutes</span>");
    //     $("#seconds").html(seconds + "<span>Seconds</span>");
    // }
    // setInterval(function () { makeTimer(); }, 300);

    // Subscribe form
    $(".newsletter-form").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // Handle The Invalid Form...
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly");
        } else {
            // Everything Looks Good!
            event.preventDefault();
        }
    });


    function callbackFunction(resp) {
        if (resp.result === "success") {
            formSuccessSub();
        }
        else {
            formErrorSub();
        }
    }


    function formSuccessSub() {
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function () {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }


    function formErrorSub() {
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function () {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }


    function submitMSGSub(valid, msg) {
        if (valid) {
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }

    // AJAX MailChimp
    $(".newsletter-form").ajaxChimp({
        url: "https://envyTheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
        callback: callbackFunction
    });

    // Back To Top
    $('body').append("<div class='go-top'><i class='bx bx-chevrons-up'></i></div>");
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $('.go-top').addClass('active');
        if (scrolled < 600) $('.go-top').removeClass('active');
    });
    $('.go-top').on('click', function () {
        $('html, body').animate({
            scrollTop: '0',
        }, 500);
    });

    // Preloader JS
    $(window).on('load', function () {
        $(".preloader").fadeOut(500);
    });

    //WOW JS
    new WOW().init();

    // Switch Btn
    $('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");
})($);

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('arrola_theme', themeName);
    document.documentElement.className = themeName;
}

// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('arrola_theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}
























// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('arrola_theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
        document.getElementById('slider').checked = true;
    }
})();
