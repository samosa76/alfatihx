<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al-Fatih</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tooplate-infinite-loop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-5.5/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>

<body>

    <section id="home" class="text-white tm-font-big tm-parallax">
        @include('public.includes.navbar')
    </section>

    <div>
        @yield('content')
    </div>

    <div>
        @yield('footer')
    </div>

    <script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/expand-bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.singlePageNav.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script>
        function getOffSet() {
            var _offset = 450;
            var windowHeight = window.innerHeight;

            if (windowHeight > 500) {
                _offset = 400;
            }
            if (windowHeight > 680) {
                _offset = 300
            }
            if (windowHeight > 830) {
                _offset = 210;
            }

            return _offset;
        }

        function setParallaxPosition($doc, multiplier, $object) {
            var offset = getOffSet();
            var from_top = $doc.scrollTop(),
                bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
            $object.css({
                "background-position": bg_css
            });
        }

        // Parallax function
        // Adapted based on https://codepen.io/roborich/pen/wpAsm        
        var background_image_parallax = function($object, multiplier, forceSet) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            // $object.css({"background-attatchment" : "fixed"});

            if (forceSet) {
                setParallaxPosition($doc, multiplier, $object);
            } else {
                $(window).scroll(function() {
                    setParallaxPosition($doc, multiplier, $object);
                });
            }
        };

        var background_image_parallax_2 = function($object, multiplier) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            $object.css({
                "background-attachment": "fixed"
            });

            $(window).scroll(function() {
                if ($(window).width() > 768) {
                    var firstTop = $object.offset().top,
                        pos = $(window).scrollTop(),
                        yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                    var bg_css = 'center ' + yPos + 'px';

                    $object.css({
                        "background-position": bg_css
                    });
                } else {
                    $object.css({
                        "background-position": "center"
                    });
                }
            });
        };

        $(function() {
            // Hero Section - Background Parallax
            background_image_parallax($(".tm-parallax"), 0.30, false);

            

            // Handle window resize
            window.addEventListener('resize', function() {
                background_image_parallax($(".tm-parallax"), 0.30, true);
            }, true);

            // Detect window scroll and update navbar
            $(window).scroll(function(e) {
                if ($(document).scrollTop() > 120) {
                    $('.tm-navbar').addClass("scroll");
                } else {
                    $('.tm-navbar').removeClass("scroll");
                }
            });

            // Close mobile menu after click 
            $('#tmNav a').on('click', function() {
                $('.navbar-collapse').removeClass('show');
            })

            // Scroll to corresponding section with animation
            // $('#tmNav').singlePageNav({
            //     'easing': 'easeInOutExpo',
            //     'speed': 600
            // });

            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 600, 'easeInOutExpo', function() {
                        window.location.hash = hash;
                    });
                } // End if
            });
            // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp

            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            $('.tm-testimonials-carousel').slick({
                dots: true,
                prevArrow: false,
                nextArrow: false,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Gallery
            $('.tm-gallery').slick({
                dots: true,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 2,
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>
