<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy Tech</title>
    <!-- favion -->
    <!-- <link rel="icon" type="/image/png" sizes="16x16" href="/img/favicon-16x16.png"> -->
    <!-- link to font awesome -->
    <link media="all" rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.css">
    <!-- link to custom icomoon fonts -->
    <link rel="stylesheet" type="text/css" href="/css/fonts/icomoon/icomoon.css">
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="/vendors/animate/animate.css">
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="/css/bootstrap.css">
    <!-- include owl css -->
    <link media="all" rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.css">
    <link media="all" rel="stylesheet" href="/vendors/owl-carousel/owl.theme.css">
    <!-- link to revolution css  -->
    <link rel="stylesheet" type="text/css" href="/vendors/revolution/css/settings.css">
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="/css/main.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        #header {
            border: none !important;
            /* color: #252525 !important; */
            font-weight: bolder;
            /* background-color: #2525252f; */
        }

        #header * {
            color: whitesmoke !important;
            border: none !important;
        }

        #header li:hover {
            background-color: #252525;
        }
        .swal-button--confirm{
        background-color: #9a8c5a !important;
    }

    </style>
</head>

<body>
    <div class="preloader" id="pageLoad">
        <div class="holder">
            <div class="coffee_cup"></div>
        </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <header id="header">
                <div class="container-fluid">
                    <!-- logo -->
                    <div style="padding: 0;" class="logo">
                        <a style="margin-top: 10px;" href="/">
                            <img style="height:60px ; width:60px"  src="/img/banner/logo.svg" alt="Entrada">
                            <!-- <img class="gray-logo" src="img/banner/logo-gray.svg" alt="Entrada"> -->
                        </a>
                    </div>
                    <!-- main navigation -->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle nav-opener" data-toggle="collapse"
                                data-target="#nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- main menu items and drop for mobile -->
                        <div class="collapse navbar-collapse" id="nav">
                            <!-- main navbar -->
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="/" class="dropdown-toggle">Home <b class="icon-angle-down"></b></a>

                                </li>
                                <li class="dropdown">
                                    <a href="/categories" class="dropdown-toggle">Shop <b
                                            class="icon-angle-down"></b></a>

                                </li>
                                @guest
                                <li class="dropdown">
                                    <a href="/login" class="dropdown-toggle">Login <b class="icon-angle-down"></b></a>

                                </li>
                                <li class="dropdown">
                                    <a href="/register" class="dropdown-toggle">Register <b
                                            class="icon-angle-down"></b></a>

                                </li>


                                @else
                                <li class="hidden-xs hidden-sm v-divider">
                                    <a href="/profile">
                                        <span class="icon icon-user"></span>
                                    </a>
                                </li>
								<li>

									<a href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
									@csrf
                                </form>
							</li>

                                @endguest








                                <li class="visible-xs visible-sm nav-visible ">
                                    <a href="/cart">
                                        <span class="icon icon-cart"></span>
                                        <span class="text hidden-md hidden-lg">Cart</span>
                                        <span id="cartnumber"
                                            class="text hidden-xs hidden-sm">{{(Session::get('cart.teams')) !==null ? count(Session::get('cart.teams')) : 0}}</span>
                                    </a>

                                </li>

                                <li class="visible-md visible-lg nav-visible v-divider"><a href="#"
                                        class="search-opener"><span class="icon icon-search"></span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <form class="search-form" action="#">
                    <fieldset>
                        <a href="#" class="search-opener hidden-md hidden-lg">
                            <span class="icon-search"></span>
                        </a>
                        <div class="search-wrap">
                            <a href="#" class="search-opener close">
                                <span class="icon-cross"></span>
                            </a>
                            <div class="trip-form trip-form-v2 trip-search-main">
                                <div class="trip-form-wrap">
                                    <div class="holder">
                                        <label>Departing</label>
                                        <div class='select-holder'>
                                            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label>Returning</label>
                                        <div class='select-holder'>
                                            <div id="datepicker1" class="input-group date"
                                                data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-region">Select Region</label>
                                        <div class='select-holder'>
                                            <select class="trip-select trip-select-v2 region" name="region"
                                                id="select-region">
                                                <option value="select">Africa</option>
                                                <option value="select">Arctic</option>
                                                <option value="select">Asia</option>
                                                <option value="select">Europe</option>
                                                <option value="select">Oceanaia</option>
                                                <option value="select">Polar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-activity">Select Activity</label>
                                        <div class='select-holder'>
                                            <select class="trip-select trip-select-v2 acitvity" name="activity"
                                                id="select-activity">
                                                <option value="Holiday Type">Holiday Type</option>
                                                <option value="Holiday Type">Beach Holidays</option>
                                                <option value="Holiday Type">Weekend Trips</option>
                                                <option value="Holiday Type">Summer and Sun</option>
                                                <option value="Holiday Type">Water Sports</option>
                                                <option value="Holiday Type">Scuba Diving</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="price-range">Price Range</label>
                                        <div class='select-holder'>
                                            <select class="trip-select trip-select-v2 price" name="activity"
                                                id="price-range">
                                                <option value="Price Range">Price Range</option>
                                                <option value="Price Range">$1 - $499</option>
                                                <option value="Price Range">$500 - $999</option>
                                                <option value="Price Range">$1000 - $1499</option>
                                                <option value="Price Range">$1500 - $2999</option>
                                                <option value="Price Range">$3000+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <button class="btn btn-trip btn-trip-v2" type="submit">Find Tours</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </header>

        </div>
        @yield('content')
        @yield('main')


        <footer id="footer">
            <div class="container">
                <!-- newsletter form -->
                <form action="php/subscribe.html" id="signup" method="post" class="newsletter-form">
                    <fieldset>
                        <div class="input-holder">
                            <input type="email" class="form-control" placeholder="Email Address" name="subscriber_email"
                                id="subscriber_email">
                            <input type="submit" value="GO">
                        </div>
                        <span class="info" id="subscribe_message">To receive news, updates and tour packages via
                            email.</span>
                    </fieldset>
                </form>
                <!-- footer links -->
                <div class="row footer-holder">
                    <nav class="col-sm-4 col-lg-2 footer-nav active">
                        <h3>About Entrada</h3>
                        <ul class="slide">
                            <li><a href="#">The Company</a></li>
                            <li><a href="#">Our Values</a></li>
                            <li><a href="#">Responsiblity</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Opportunity</a></li>
                            <li><a href="#">Safety Concerns</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>Destinations</h3>
                        <ul class="slide">
                            <li><a href="#">Nepal</a></li>
                            <li><a href="#">Thailand</a></li>
                            <li><a href="#">Vietnam</a></li>
                            <li><a href="#">Fiji Island</a></li>
                            <li><a href="#">United States</a></li>
                            <li><a href="#">Australia</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>themes</h3>
                        <ul class="slide">
                            <li><a href="#">Hiking and Camping</a></li>
                            <li><a href="#">Trekking Tours</a></li>
                            <li><a href="#">Jungle Safaris</a></li>
                            <li><a href="#">Bungee Jumping</a></li>
                            <li><a href="#">Wildlife &amp; Polar</a></li>
                            <li><a href="#">Peak Climbing</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>reservation</h3>
                        <ul class="slide">
                            <li><a href="#">Booking Conditions</a></li>
                            <li><a href="#">My Bookings</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Includes &amp; Excludes</a></li>
                            <li><a href="#">Your Responsibilities</a></li>
                            <li><a href="#">Order a Brochure</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>ask Entrada</h3>
                        <ul class="slide">
                            <li><a href="#">Why Entrada?</a></li>
                            <li><a href="#">Ask an Expert</a></li>
                            <li><a href="#">Safety Updates</a></li>
                            <li><a href="#">We Help When...</a></li>
                            <li><a href="#">Personal Matters</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav last">
                        <h3>contact Entrada</h3>
                        <ul class="slide address-block">
                            <li class="wrap-text"><span class="icon-tel"></span> <a href="tel:02072077878">(020)
                                    72077878</a></li>
                            <li class="wrap-text"><span class="icon-fax"></span> <a href="tel:02088828282">(020)
                                    88828282</a></li>
                            <li class="wrap-text"><span class="icon-email"></span> <a
                                    href="mailto:info@entrada.com">info@entrada.com</a></li>
                            <li><span class="icon-home"></span>
                                <address>707 London Road Isleworth, Middx TW7 7QD</address>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- social wrap -->
                <ul class="social-wrap">
                    <li class="facebook"><a href="#">
                            <span class="icon-facebook"></span>
                            <strong class="txt">Like Us</strong>
                        </a></li>
                    <li class="twitter"><a href="#">
                            <span class="icon-twitter"></span>
                            <strong class="txt">Follow On</strong>
                        </a></li>
                    <li class="google-plus"><a href="#">
                            <span class="icon-google-plus"></span>
                            <strong class="txt">+1 On Google</strong>
                        </a></li>
                    <li class="vimeo"><a href="#">
                            <span class="icon-vimeo"></span>
                            <strong class="txt">Share At</strong>
                        </a></li>
                    <li class="pin"><a href="#">
                            <span class="icon-pin"></span>
                            <strong class="txt">Pin It</strong>
                        </a></li>
                    <li class="dribble"><a href="#">
                            <span class="icon-dribble"></span>
                            <strong class="txt">Dribbble</strong>
                        </a></li>
                </ul>
            </div>
           
        </footer>
    </div>
    <div class="scroll-holder text-center">
        <a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        $('.js-addcart-detail').each(function () {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            var id = $(this).parent().parent().parent().parent().find('.js-name-detail-price').attr('id');
            $(this).on('click', function () {
                var qty = $('#qty').val();

                $.get("/cart/" + id + "-" + qty, function (data) {

                    swal(nameProduct, "is added to cart ! Qty = " + data.qty, "success");
                    $('#cartnumber').html( (parseInt($('#cartnumber').html()) + 1));
                })


            });
        });

    </script>





    <script>
        function removeFromCart(id, key) {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {


                        $.ajax({
                            url: "/cart/" + key,
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (data) {
                                $("#" + key).remove();
                                $("#cart_total_price_of_shipping").html(parseInt($(
                                    "#cart_total_price_of_shipping").html()) - id);
                                $('#cartnumber').html( (parseInt($('#cartnumber').html()) - 1));

                                swal("Item is deleted !!", {
                                    icon: "success",
                                })
                            }
                        });

                    } else {
                        swal("Canceled");
                    }
                });


        }

    </script>

    <!-- scroll to top -->

    <!-- jquery library -->
    <script src="/vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="/vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="/vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="/vendors/match-height/jquery.matchHeight.js"></script>
    <script src="/vendors/wow/wow.min.js"></script>
    <script src="/vendors/stellar/jquery.stellar.min.js"></script>
    <script src="/vendors/validate/jquery.validate.js"></script>
    <script src="/vendors/waypoint/waypoints.min.js"></script>
    <script src="/vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="/vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="/vendors/fancybox/jquery.fancybox.js"></script>
    <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/vendors/jcf/js/jcf.js"></script>
    <script src="/vendors/jcf/js/jcf.select.js"></script>
    <script src="/js/mailchimp.js"></script>
    <!-- <script src="/vendors/retina/retina.min.js"></script> -->
    <script src="/vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <!-- custom jquery script -->
    <script src="/js/jquery.main.js"></script>
    <!-- revolution slider plugin -->
    <script type="text/javascript" src="/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- rs5.0 core files -->
    <script type="text/javascript" src="/vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="/vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script type="text/javascript" src="/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript" src="/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="/vendors/revolution/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script type="text/javascript" src="/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="/vendors/revolution/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript" src="/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <!-- revolutions slider script -->
    <script src="/js/revolution.js"></script>

</body>

</html>
