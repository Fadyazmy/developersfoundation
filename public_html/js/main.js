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

$(document).ready(function() {
    // Auto resize input
    function resizeInput() {
        $(this).attr('size', $(this).val().length);
    }

    $('input[type="text"], input[type="email"]')
    // event handler
        .keyup(resizeInput)
        // resize on page load
        .each(resizeInput);
// Adapted from georgepapadakis.me/demo/expanding-textarea.html
    (function(){
        var textareas = document.querySelectorAll('.expanding'),

            resize = function(t) {
                t.style.height = 'auto';
                t.style.overflow = 'hidden'; // Ensure scrollbar doesn't interfere with the true height of the text.
                t.style.height = (t.scrollHeight + t.offset ) + 'px';
                t.style.overflow = '';
            },

            attachResize = function(t) {
                if ( t ) {
                    console.log('t.className',t.className);
                    t.offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

                    resize(t);

                    if ( t.addEventListener ) {
                        t.addEventListener('input', function() { resize(t); });
                        t.addEventListener('mouseup', function() { resize(t); }); // set height after user resize
                    }

                    t['attachEvent'] && t.attachEvent('onkeyup', function() { resize(t); });
                }
            };

        // IE7 support
        if ( !document.querySelectorAll ) {
            function getElementsByClass(searchClass,node,tag) {
                var classElements = new Array();
                node = node || document;
                tag = tag || '*';
                var els = node.getElementsByTagName(tag);
                var elsLen = els.length;
                var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
                for (i = 0, j = 0; i < elsLen; i++) {
                    if ( pattern.test(els[i].className) ) {
                        classElements[j] = els[i];
                        j++;
                    }
                }
                return classElements;
            }
            textareas = getElementsByClass('expanding');
        }

        for (var i = 0; i < textareas.length; i++ ) {
            attachResize(textareas[i]);
        }
    })();

    $('form').submit(function(e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form');

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form
            var sendFrom = document.getElementById("email").value,
                sendTo = "harrison@developersfoundation.ca",
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
            
            var successMsg = thisForm.attr('data-success-msg');
            var errorMsg = thisForm.attr('data-error-msg');
            console.log(successMsg);
            var statusDiv = $(".form-status")[0];

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
                    var returnData = data;
                    if (returnData.success) {
                        // Throw success msg
                        document.getElementById("submit").disabled = false;
                        statusDiv.innerHTML = successMsg;
                    } else {
                        // Throw error message
                        document.getElementById("submit").disabled = false;
                        statusDiv.innerHTML = errorMsg;
                    }
                    statusDiv.style = "";
                    //statusDiv.toggle("slow");
                    document.getElementById("email").value = "";
                    document.getElementById("your-message").value = "";
                    document.getElementById("your-name").value = "";
                },
                error: function (error) {
                    console.log(error);
                    // Throw error message
                    statusDiv.innerHTML = errorMsg;
                    statusDiv.style = "";
                    //statusDiv.toggle("slow");
                    document.getElementById("email").value = "";
                    document.getElementById("your-message").value = "";
                    document.getElementById("your-name").value = "";
                }
            });
        }
    });
});