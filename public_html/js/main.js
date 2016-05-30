// Hello.
//
// This is The Scripts used for ___________ Theme
//
//

function main() {
    (function () {
        'use strict';

        /* ==============================================
         Testimonial Slider
         =============================================== */
        $('a.page-scroll').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 40
                    }, 900);
                    return false;
                }
            }
        });

        /*====================================
         Show Menu on Book
         ======================================*/
        $(window).bind('scroll', function () {
            var navHeight = $(window).height() - 100;
            if ($(window).scrollTop() > navHeight) {
                $('.navbar-default').addClass('on');
            } else {
                $('.navbar-default').removeClass('on');
            }
        });

        $('body').scrollspy({
            target: '.navbar-default',
            offset: 80
        })

        $(document).ready(function () {
            $("#team").owlCarousel({

                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                autoHeight: true,
                itemsCustom: [
                    [0, 1],
                    [450, 2],
                    [600, 2],
                    [700, 2],
                    [1000, 4],
                    [1200, 4],
                    [1400, 4],
                    [1600, 4]
                ],
            });

            $("#clients").owlCarousel({

                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                autoHeight: true,
                itemsCustom: [
                    [0, 1],
                    [450, 2],
                    [600, 2],
                    [700, 2],
                    [1000, 4],
                    [1200, 5],
                    [1400, 5],
                    [1600, 5]
                ],
            });

            $("#testimonial").owlCarousel({
                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });

        });

        /*====================================
         Portfolio Isotope Filter
         ======================================*/
        $(window).load(function () {
            var $container = $('#lightbox');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            $('.cat a').click(function () {
                $('.cat .active').removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        });
    }());
}
main();

var http = require("http");
setInterval(function() {
    http.get("http://developersfoundation.ca");
}, 300000); // every 5 minutes (300000)

$(document).ready(function() {
    $('form.form-email').submit(function(e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form.form-email');

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form

            // document.getElements
            var sendFrom = document.getElementById("email").value,
                sendTo = "fadi@developersfoundation.ca",
                subject = "Message from " + sendFrom,
                msg = document.getElementById("your-message").value,
                msgHTML = "<em>" + document.getElementById("your-message").value + "<em>",
                fromName = document.getElementById("your-name").value,
                toName = "Developers' Foundation";

            var sendData = JSON.stringify({
                'sendFrom': sendFrom,
                'fromName': fromName,
                'sendTo': sendTo,
                'toName': toName,
                'subject': subject,
                'msg': msg,
                'msgHTML': msgHTML
            });

            $.ajax({
                url: 'mail/mailer.php',
                crossDomain: false,
                data: sendData,
                method: "POST",
                cache: false,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    // Deal with JSON
                    console.log(data);
                    var returnData = JSON.parse(data);
                    if (returnData.success) {
                        // Throw success msg
                        document.getElementById("submit").disabled = false;

                    } else {
                        // Throw error message
                        document.getElementById("submit").disabled = false;
                    }
                },
                error: function (error) {
                    console.log(error);
                    // Throw error message
                }
            });
        }
    });
});