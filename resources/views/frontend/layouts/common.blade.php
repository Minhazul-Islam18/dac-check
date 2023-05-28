<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
    <!-- <meta name="description" content=""> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />

    <!-- CSS  -->

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"
        integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/rs-plugin/css/settings.css') }}" media="screen" />

    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">

    <!-- owl.theme CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.css') }}">

    <!-- owl.transitions CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.transitions.css') }}">

    <!-- jquery.sidr.dark CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.sidr.dark.css') }}">

    <!-- font-awesome.min CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}"> -->

    <!-- linea CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/linea.css') }}">

    <!-- jquery.fancybox CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fancb/jquery.fancybox.css') }}">

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">

    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/normalize.css') }}">

    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">

    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <script src="{{ asset('assets/frontend/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css') }}">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet">

    <style>
        .CTD {
            width: 30rem;
            margin: 0 5px;
            box-shadow: 0px 0px 15px 0px #00000021;
            transition: .5s;
            cursor: pointer;
            /* position: relative; */
        }

        .CTD .c-head {
            background: #2c78ff;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            padding: .6em 0;
        }

        .c-body .row span {
            font-size: 1.35em;
            text-transform: uppercase;
            color: #1abc9c;
            font-weight: 600;
        }

        .c-body {
            height: 23rem;
            padding: 1em .8em;
            background: #ffffff;
        }

        .c-footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: .5em 0;
            background: #1abc9c;
        }

        /* .slick-horizontal .slick-active .CTD:nth-child(1) {
            margin-right: 2px;
        } 

        /* .CTD ul {
            display: flex;
            justify-content: space-evenly;
            opacity: 0;
            transition: .5s ease-in-out;
        }

        .CTD:hover.CTD ul {
            opacity: 1;
        }

        .CTD ul li {
            background: #1abc9c;
            padding: .7rem .8rem;
            font-size: 1.8rem;
            border-radius: 50%;
            box-shadow: 0px 0px 18px 4px #3939393d;
            width: 4rem;
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .CTD ul li a {
            color: #000;
            transition: .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .CTD ul li a:hover {
            color: rgb(255, 255, 255);
        } */

        .fa-regular,
        .far {
            font-family: "Font Awesome 6 Free";
            font-weight: 600 !important;
        }


        .view-modal,
        .popup-share {
            /* position: absolute;
            left: 50%; */
        }

        button {
            outline: none;
            cursor: pointer;
            font-weight: 500;
            border-radius: 4px;
            border: 2px solid transparent;
            transition: background 0.1s linear, border-color 0.1s linear, color 0.1s linear;
        }

        /* New to this page */
        .card {
            background: transparent;
            border: none;
        }
    </style>
    <script>
        function mth() {
            if (document.getElementById('optionone').checked) {
                window.location.replace("/");
            } else if (document.getElementById('optiontwo').checked) {
                window.location.replace("./po/dashboard.html");
            };

        };
    </script>
</head>

<body class="home-4">
    <div class="switch">
        <input name="radio" type="radio" value="optionone" id="optionone" onclick="mth()" checked>
        <label for="optionone">Business</label>

        <input name="radio" type="radio" value="optiontwo" onclick="mth()" id="optiontwo">
        <label for="optiontwo" class="right">Public Officer</label>

        <span aria-hidden="true"></span>
    </div>
    <!-- Start header -->
    <header class="main-header">
        <div class="logo col-md-2 col-sm-2 col-xs-6">
            <a href="#"><img src="../img/home4/logo_turquoise.svg" alt=""></a>
        </div>
        <div class="d-md-none d-xs-block col-xs-6" style="position: absolute;right: 0;top: 0;">
            <div>
                <input type="checkbox" class="menu-btn" id="menu-btn">
                <label for="menu-btn" class="menu-icon">
                    <span class="menu-icon__line"></span>
                </label>

                <ul class="nav-links">
                    <li class="nav-link animated-link">
                        <a href="/online.html">CTD Online</a>
                    </li>
                    <li class="nav-link animated-link">
                        <a href="/cc/create.html">Buy/Sell a CTD</a>
                    </li>
                    <li class="nav-link animated-link">
                        <a href="/blogPage.html">Blog</a>
                    </li>
                    <li class="nav-link animated-link">
                        <a href="/faq.html">FAQ</a>
                    </li>
                    <li class="nav-link animated-link">
                        <a href="/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="col-md-7 col-sm-7 col-xs-1 d-flex d-xs-none justify-content-md-center justify-content-sm-center justify-content-lg-center justify-content-xs-center align-items-center">
            <!-- <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="menu-icon__line"></span>
            </label>
                    -->
            <ul class="main-nav-links d-none d-md-flex d-lg-flex">
                <li class="nav-link animated-link">
                    <a href="/online.html">CTD Online</a>
                </li>
                <li class="nav-link animated-link">
                    <a href="/cc/create.html">Buy/Sell a CTD</a>
                </li>
                <li class="nav-link animated-link">
                    <a href="/blogPage.html">Blog</a>
                </li>
                <li class="nav-link animated-link">
                    <a href="/faq.html">FAQ</a>
                </li>
                <li class="nav-link animated-link">
                    <a href="/contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="row">
                <div class="col-12 d-flex gap-5 justify-content-center">
                    <ul class="mb-0 d-flex gap-5 align-items-center icon-set">
                        <li style="position: relative;">
                            <div id="cart">
                                <i class="fa-regular fa-cart-shopping"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">3</span>
                            </div>
                            <div class="shopping-cart" style="display: none;">
                                <div class="shopping-cart-header">
                                    <img src="../img/home4/shopping-carts.png" alt=""><span
                                        class="badge bg-success">3</span>
                                    <div class="shopping-cart-total">
                                        <span class="lighter-text">Total:</span>
                                        <span class="main-color-text">150,000 F CFA</span>
                                    </div>
                                </div>
                                <!--end shopping-cart-header -->
                                <ul class="shopping-cart-items">
                                    <li class="row">
                                        <div class="col-2 d-flex align-items-center">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve">
                                                <circle style="fill:#88C5CC;" cx="256" cy="256" r="256" />
                                                <path style="fill:#F5F5F5;"
                                                    d="M196,76h176c4.4,0,8,3.6,8,8v328c0,4.4-3.6,8-8,8H124c-4.4,0-8-3.6-8-8V160L196,76z" />
                                                <path style="fill:#E6E6E6;"
                                                    d="M188,160c4.4,0,8-3.6,8-8V76l-80,84H188z" />
                                                <path style="fill:#2179A6;"
                                                    d="M428,368c0,8.8-7.2,16-16,16H268c-8.8,0-16-7.2-16-16v-64c0-8.8,7.2-16,16-16h144c8.8,0,16,7.2,16,16  V368z" />
                                                <g>
                                                    <path style="fill:#F5F5F5;"
                                                        d="M291.504,321.272h12.816c2.892,0,5.092,0.224,6.608,0.664c2.036,0.596,3.776,1.664,5.236,3.196   c1.452,1.528,2.564,3.408,3.316,5.624c0.752,2.224,1.136,4.952,1.136,8.212c0,2.856-0.36,5.324-1.064,7.392   c-0.872,2.532-2.108,4.572-3.724,6.136c-1.216,1.184-2.86,2.104-4.924,2.768c-1.548,0.492-3.616,0.736-6.204,0.736h-13.192   L291.504,321.272L291.504,321.272z M298.516,327.148v23h5.236c1.96,0,3.376-0.108,4.244-0.332c1.136-0.284,2.08-0.768,2.832-1.444   c0.752-0.68,1.364-1.792,1.836-3.352c0.476-1.556,0.712-3.676,0.712-6.36s-0.236-4.748-0.712-6.18   c-0.472-1.436-1.136-2.56-1.988-3.364c-0.852-0.808-1.936-1.352-3.252-1.636c-0.976-0.224-2.9-0.332-5.752-0.332L298.516,327.148   L298.516,327.148z" />
                                                    <path style="fill:#F5F5F5;"
                                                        d="M325.14,338.848c0-3.536,0.528-6.504,1.584-8.912c0.788-1.764,1.868-3.352,3.236-4.756   s2.864-2.444,4.492-3.124c2.164-0.916,4.656-1.376,7.484-1.376c5.116,0,9.212,1.584,12.28,4.756   c3.076,3.172,4.608,7.588,4.608,13.244c0,5.608-1.524,9.996-4.572,13.16c-3.052,3.168-7.124,4.748-12.228,4.748   c-5.164,0-9.272-1.576-12.32-4.724C326.664,348.72,325.14,344.376,325.14,338.848z M332.364,338.608   c0,3.932,0.912,6.916,2.724,8.944c1.82,2.024,4.12,3.04,6.916,3.04s5.088-1.008,6.88-3.016c1.792-2.016,2.688-5.036,2.688-9.064   c0-3.98-0.872-6.944-2.616-8.908c-1.744-1.956-4.064-2.936-6.948-2.936c-2.896,0-5.224,0.992-6.988,2.972   C333.252,331.628,332.364,334.616,332.364,338.608z" />
                                                    <path style="fill:#F5F5F5;"
                                                        d="M386.516,343.236l6.8,2.156c-1.044,3.784-2.776,6.6-5.2,8.44s-5.5,2.76-9.228,2.76   c-4.616,0-8.404-1.58-11.372-4.728c-2.972-3.148-4.456-7.46-4.456-12.92c0-5.776,1.492-10.264,4.484-13.464   c2.98-3.2,6.908-4.796,11.768-4.796c4.248,0,7.7,1.252,10.352,3.76c1.584,1.484,2.76,3.616,3.552,6.4l-6.936,1.66   c-0.416-1.8-1.268-3.224-2.576-4.26c-1.3-1.048-2.888-1.568-4.752-1.568c-2.572,0-4.66,0.924-6.26,2.768   c-1.596,1.852-2.404,4.844-2.404,8.984c0,4.392,0.788,7.516,2.368,9.38s3.632,2.792,6.16,2.792c1.864,0,3.464-0.588,4.808-1.772   C384.968,347.64,385.928,345.772,386.516,343.236z" />
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="col-8">
                                            <div class="flex-fill">
                                                <span class="item-name">Internation cal for tenders for acquisation
                                                    of
                                                    labratory
                                                    equipment for benefit of university of Ouagadougou.</span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <a href="#">
                                                    <svg width="22px" height="22px" viewBox="0 0 72 72" id="emoji"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="color">
                                                            <path fill="#FFFFFF" stroke="none"
                                                                d="M51.7598,17H20.1525v37.65c0,4.0593,3.2907,5.6209,7.35,5.6209h16.9073c4.0593,0,7.35-1.5616,7.35-5.6209 V17z" />
                                                            <polyline fill="#FFFFFF" stroke="none"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-miterlimit="10" stroke-width="2"
                                                                points="31,16 31,12 41,12 41,16" />
                                                            <polygon fill="#9b9b9a" stroke="none"
                                                                points="51,37 51,46.5172 51,57.6207 48.3,60 33,60" />
                                                            <rect x="17" y="16" width="38" height="4" fill="#FFFFFF"
                                                                stroke="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                        </g>
                                                        <g id="hair" />
                                                        <g id="skin" />
                                                        <g id="skin-shadow" />
                                                        <g id="line">
                                                            <polyline fill="none" stroke="#000000"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-miterlimit="10" stroke-width="2"
                                                                points="31,16 31,12 41,12 41,16" />
                                                            <path fill="none" stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2"
                                                                d="M51,25v31c0,2.2091-1.7909,4-4,4H25c-2.2091,0-4-1.7909-4-4V25" />
                                                            <rect x="17" y="16" width="38" height="4" fill="none"
                                                                stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                            <line x1="41" x2="41" y1="28.25" y2="55" fill="none"
                                                                stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                            <line x1="31" x2="31" y1="28.25" y2="55" fill="none"
                                                                stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-2 d-flex align-items-center">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve">
                                                <circle style="fill:#88C5CC;" cx="256" cy="256" r="256" />
                                                <path style="fill:#F5F5F5;"
                                                    d="M196,76h176c4.4,0,8,3.6,8,8v328c0,4.4-3.6,8-8,8H124c-4.4,0-8-3.6-8-8V160L196,76z" />
                                                <path style="fill:#E6E6E6;"
                                                    d="M188,160c4.4,0,8-3.6,8-8V76l-80,84H188z" />
                                                <path style="fill:#2179A6;"
                                                    d="M428,368c0,8.8-7.2,16-16,16H268c-8.8,0-16-7.2-16-16v-64c0-8.8,7.2-16,16-16h144c8.8,0,16,7.2,16,16  V368z" />
                                                <g>
                                                    <path style="fill:#F5F5F5;"
                                                        d="M291.504,321.272h12.816c2.892,0,5.092,0.224,6.608,0.664c2.036,0.596,3.776,1.664,5.236,3.196   c1.452,1.528,2.564,3.408,3.316,5.624c0.752,2.224,1.136,4.952,1.136,8.212c0,2.856-0.36,5.324-1.064,7.392   c-0.872,2.532-2.108,4.572-3.724,6.136c-1.216,1.184-2.86,2.104-4.924,2.768c-1.548,0.492-3.616,0.736-6.204,0.736h-13.192   L291.504,321.272L291.504,321.272z M298.516,327.148v23h5.236c1.96,0,3.376-0.108,4.244-0.332c1.136-0.284,2.08-0.768,2.832-1.444   c0.752-0.68,1.364-1.792,1.836-3.352c0.476-1.556,0.712-3.676,0.712-6.36s-0.236-4.748-0.712-6.18   c-0.472-1.436-1.136-2.56-1.988-3.364c-0.852-0.808-1.936-1.352-3.252-1.636c-0.976-0.224-2.9-0.332-5.752-0.332L298.516,327.148   L298.516,327.148z" />
                                                    <path style="fill:#F5F5F5;"
                                                        d="M325.14,338.848c0-3.536,0.528-6.504,1.584-8.912c0.788-1.764,1.868-3.352,3.236-4.756   s2.864-2.444,4.492-3.124c2.164-0.916,4.656-1.376,7.484-1.376c5.116,0,9.212,1.584,12.28,4.756   c3.076,3.172,4.608,7.588,4.608,13.244c0,5.608-1.524,9.996-4.572,13.16c-3.052,3.168-7.124,4.748-12.228,4.748   c-5.164,0-9.272-1.576-12.32-4.724C326.664,348.72,325.14,344.376,325.14,338.848z M332.364,338.608   c0,3.932,0.912,6.916,2.724,8.944c1.82,2.024,4.12,3.04,6.916,3.04s5.088-1.008,6.88-3.016c1.792-2.016,2.688-5.036,2.688-9.064   c0-3.98-0.872-6.944-2.616-8.908c-1.744-1.956-4.064-2.936-6.948-2.936c-2.896,0-5.224,0.992-6.988,2.972   C333.252,331.628,332.364,334.616,332.364,338.608z" />
                                                    <path style="fill:#F5F5F5;"
                                                        d="M386.516,343.236l6.8,2.156c-1.044,3.784-2.776,6.6-5.2,8.44s-5.5,2.76-9.228,2.76   c-4.616,0-8.404-1.58-11.372-4.728c-2.972-3.148-4.456-7.46-4.456-12.92c0-5.776,1.492-10.264,4.484-13.464   c2.98-3.2,6.908-4.796,11.768-4.796c4.248,0,7.7,1.252,10.352,3.76c1.584,1.484,2.76,3.616,3.552,6.4l-6.936,1.66   c-0.416-1.8-1.268-3.224-2.576-4.26c-1.3-1.048-2.888-1.568-4.752-1.568c-2.572,0-4.66,0.924-6.26,2.768   c-1.596,1.852-2.404,4.844-2.404,8.984c0,4.392,0.788,7.516,2.368,9.38s3.632,2.792,6.16,2.792c1.864,0,3.464-0.588,4.808-1.772   C384.968,347.64,385.928,345.772,386.516,343.236z" />
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="col-8">
                                            <div class="flex-fill">
                                                <span class="item-name">Internation cal for tenders for the
                                                    construction
                                                    of a
                                                    cancer intensive care institute.</span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <a href="#">
                                                    <svg width="22px" height="22px" viewBox="0 0 72 72" id="emoji"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="color">
                                                            <path fill="#FFFFFF" stroke="none"
                                                                d="M51.7598,17H20.1525v37.65c0,4.0593,3.2907,5.6209,7.35,5.6209h16.9073c4.0593,0,7.35-1.5616,7.35-5.6209 V17z" />
                                                            <polyline fill="#FFFFFF" stroke="none"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-miterlimit="10" stroke-width="2"
                                                                points="31,16 31,12 41,12 41,16" />
                                                            <polygon fill="#9b9b9a" stroke="none"
                                                                points="51,37 51,46.5172 51,57.6207 48.3,60 33,60" />
                                                            <rect x="17" y="16" width="38" height="4" fill="#FFFFFF"
                                                                stroke="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                        </g>
                                                        <g id="hair" />
                                                        <g id="skin" />
                                                        <g id="skin-shadow" />
                                                        <g id="line">
                                                            <polyline fill="none" stroke="#000000"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-miterlimit="10" stroke-width="2"
                                                                points="31,16 31,12 41,12 41,16" />
                                                            <path fill="none" stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2"
                                                                d="M51,25v31c0,2.2091-1.7909,4-4,4H25c-2.2091,0-4-1.7909-4-4V25" />
                                                            <rect x="17" y="16" width="38" height="4" fill="none"
                                                                stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                            <line x1="41" x2="41" y1="28.25" y2="55" fill="none"
                                                                stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                            <line x1="31" x2="31" y1="28.25" y2="55" fill="none"
                                                                stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                stroke-width="2" />
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="/checkout.html" class="button">Checkout</a>
                            </div>
                            <!--end shopping-cart -->
                        </li>
                        <li style="position: relative;">
                            <a href="/wishlist.html" id="wishlist">
                                <i class="fa-regular fa-heart"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">1</span>
                            </a>
                        </li>
                        <li class="position-relative messageUP">
                            <div style="cursor: pointer" id="message">
                                <i class="fa-regular fa-envelope"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">8</span>
                            </div>
                            <div class="dropdown-menu message" aria-labelledby="alertsDropdown">
                                <a class="dropdown-item notification-msg fw-bold" href="/messages.html"><i
                                        class="fa fa-envelope" aria-hidden="true"></i>
                                    Messages</a>
                                <a class="dropdown-item text-center small text-gray-500" href="javascript:void(0)">No
                                    New
                                    Messages</a>
                            </div>
                        </li>
                        <li class="position-relative notifyUP">
                            <div style="cursor: pointer" id="notification">
                                <i class="fa-regular fa-bell"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">13</span>
                            </div>

                            <div class="dropdown-menu notification" aria-labelledby="alertsDropdown">
                                <a class="dropdown-item notification-msg fw-bold" href="/notifications.html"><i
                                        class="fa fa-envelope" aria-hidden="true"></i>
                                    notifications</a>
                                <a class="dropdown-item text-center small text-gray-500" href="javascript:void(0)">No
                                    New
                                    notifications</a>
                            </div>
                        </li>
                    </ul>
                    <!--end navbar-right -->
                    <ul style="margin: 0;">
                        <li class="prof-container d-flex justify-content-around align-items-center">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.532px"
                                height="35.532px" viewBox="0 0 45.532 45.532"
                                style="enable-background:new 0 0 45.532 45.532;" xml:space="preserve">
                                <g>
                                    <path
                                        d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z" />
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </li>
                        <div class="position-relative">
                            <ul class="prof-set" style="display: none;">
                                <li>
                                    <a href="/dashboard.html">
                                        <i class="fa-regular fa-chart-line"></i>Dashboard
                                    </a>
                                </li>
                                <li><a href="/downloads.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                            text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                            fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 342.06"
                                            width="18px" height="18px">
                                            <path
                                                d="M271.14 2.64c50.45 8.83 86.48 38.5 110.54 83.1l4.51-.45c18.95-1.39 38.61 1.62 56.18 8.84 34.63 14.2 55.57 42.42 64.44 77.79 6.76 26.89 7.34 56.62-.79 83.27-12.47 41.01-42.09 62.32-81.01 75.68l-.42.13c-8.15 2.76-16.46 5.06-24.56 6.93-39.29 6.93-249.08 3.73-296.18.56l-2.4-.26c-8.02-1.07-15.95-2.77-23.54-5.15-35.34-11.01-60.51-35.03-72.13-70.51-7.96-24.36-7.56-50.6.37-74.93 6.68-20.46 16.3-34.33 29.63-44.85 15.76-12.45 37.62-20.69 57.19-26.21C115.68 34.94 187.54-11.94 271.14 2.64zm55.11 186.93c5.19.22 8.87 1.94 11 5.17 5.77 8.66-2.11 17.21-7.58 23.23l-67.7 59.77c-5.8 6.41-14.06 6.41-19.86 0l-61.25-61.4c-5.11-5.77-11.43-13.62-6.12-21.6 2.19-3.23 5.83-4.95 11.01-5.17h34.9v-55.43c0-7.86 6.47-14.37 14.36-14.37h41.98c7.89 0 14.35 6.7 14.35 14.37v55.43h34.91z" />
                                        </svg>
                                        Downloads
                                    </a>

                                </li>
                                <li><a href="/consulted.html">
                                        <svg width="18px" height="18px" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 423.78 423.78" style="enable-background:new 0 0 423.78 423.78;"
                                            xml:space="preserve">
                                            <g id="XMLID_38_">
                                                <path id="XMLID_230_"
                                                    d="M421.223,200.864c-4.927-10.039-19.183-36.183-45.081-62.08c-19.399-19.399-41.442-34.869-65.518-45.982   c-30.065-13.876-63.285-20.912-98.734-20.912c-35.249,0-68.297,6.957-98.225,20.678c-24.012,11.008-46.017,26.348-65.405,45.594   c-26.137,25.949-40.656,52.482-45.685,62.686c-3.428,6.955-3.434,15.107-0.018,22.067c4.927,10.039,19.183,36.183,45.081,62.081   c19.398,19.398,41.442,34.869,65.518,45.982c30.065,13.876,63.285,20.912,98.734,20.912c35.249,0,68.297-6.957,98.225-20.678   c24.012-11.008,46.017-26.348,65.405-45.594c26.137-25.949,40.656-52.482,45.685-62.686   C424.632,215.976,424.639,207.825,421.223,200.864z M332.371,283.307c12.727-21.386,19.519-45.881,19.519-71.417   s-6.792-50.031-19.519-71.417c7.893,5.875,15.426,12.392,22.558,19.523c21.001,21.001,33.164,41.961,38.254,51.879   c-5.187,10.075-17.58,31.385-38.799,52.451C347.413,271.247,340.064,277.581,332.371,283.307z M68.851,263.784   c-21.001-21.001-33.164-41.961-38.254-51.879c5.187-10.075,17.58-31.385,38.799-52.451c6.97-6.919,14.321-13.256,22.013-18.98   C78.682,161.859,71.89,186.354,71.89,211.89s6.792,50.031,19.519,71.417C83.516,277.432,75.983,270.915,68.851,263.784z    M101.89,211.89c0-60.751,49.248-110,110-110s110,49.249,110,110s-49.249,110-110,110S101.89,272.642,101.89,211.89z" />
                                                <path id="XMLID_236_"
                                                    d="M211.89,131.89c-44.183,0-80,35.817-80,80c0,44.183,35.817,80,80,80c44.183,0,80-35.817,80-80   C291.89,167.707,256.073,131.89,211.89,131.89z M211.89,261.89c-27.57,0-50-22.43-50-50s22.43-50,50-50c27.57,0,50,22.43,50,50   S239.46,261.89,211.89,261.89z" />
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                        Consulted CTD's
                                    </a>

                                </li>
                                <li><a href="/wallet.html">
                                        <i class="fa-regular fa-wallet"></i>
                                        <div>Wallet<sup>400 000 F CFA</div></sup>
                                    </a>

                                </li>
                                <li><a href="/messages.html">
                                        <i class="fa-regular fa-envelope"></i>
                                        Message
                                    </a>

                                </li>
                                <li><a href="/settings.html">
                                        <i class="fa-regular fa-gear"></i>
                                        Profile Settings</a>

                                </li>
                                <li><a href="/statistics.html">
                                        <i class="fa-regular fa-chart-column"></i>
                                        Purchase Statistics</a>
                                </li>
                                <li><a href="/reffer.html"><i class="fa-regular fa-share-nodes"></i>Invite Friends</a>
                                </li>
                                <li><a href="/logout"> <svg width="18px" height="18px" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 320.002 320.002"
                                            style="enable-background:new 0 0 320.002 320.002;" xml:space="preserve">
                                            <g id="XMLID_6_">
                                                <path id="XMLID_7_"
                                                    d="M51.213,175.001h173.785c8.284,0,15-6.716,15-15c0-8.284-6.716-15-15-15H51.213l19.394-19.394   c5.858-5.858,5.858-15.355,0-21.213c-5.857-5.858-15.355-5.858-21.213,0L4.396,149.393c-0.351,0.351-0.683,0.719-0.997,1.103   c-0.137,0.167-0.256,0.344-0.385,0.515c-0.165,0.22-0.335,0.435-0.488,0.664c-0.14,0.209-0.261,0.426-0.389,0.64   c-0.123,0.206-0.252,0.407-0.365,0.619c-0.118,0.22-0.217,0.446-0.323,0.67c-0.104,0.219-0.213,0.435-0.306,0.659   c-0.09,0.219-0.164,0.442-0.243,0.664c-0.087,0.24-0.179,0.477-0.253,0.722c-0.067,0.222-0.116,0.447-0.172,0.672   c-0.063,0.249-0.133,0.497-0.183,0.751c-0.051,0.259-0.082,0.521-0.119,0.782c-0.032,0.223-0.075,0.443-0.097,0.669   c-0.048,0.484-0.073,0.971-0.074,1.457c0,0.007-0.001,0.015-0.001,0.022c0,0.007,0.001,0.015,0.001,0.022   c0.001,0.487,0.026,0.973,0.074,1.458c0.022,0.223,0.064,0.44,0.095,0.661c0.038,0.264,0.069,0.528,0.121,0.79   c0.05,0.252,0.119,0.496,0.182,0.743c0.057,0.227,0.107,0.456,0.175,0.681c0.073,0.241,0.164,0.474,0.248,0.71   c0.081,0.226,0.155,0.453,0.247,0.675c0.091,0.22,0.198,0.431,0.3,0.646c0.108,0.229,0.21,0.46,0.33,0.685   c0.11,0.205,0.235,0.4,0.354,0.599c0.131,0.221,0.256,0.444,0.4,0.659c0.146,0.219,0.309,0.424,0.466,0.635   c0.136,0.181,0.262,0.368,0.407,0.544c0.299,0.364,0.616,0.713,0.947,1.048c0.016,0.016,0.029,0.034,0.045,0.05l45,45.001   c2.93,2.929,6.768,4.394,10.607,4.394c3.838-0.001,7.678-1.465,10.606-4.393c5.858-5.858,5.858-15.355,0.001-21.213L51.213,175.001   z" />
                                                <path id="XMLID_8_"
                                                    d="M305.002,25h-190c-8.284,0-15,6.716-15,15v60c0,8.284,6.716,15,15,15s15-6.716,15-15V55h160v210.001h-160   v-45.001c0-8.284-6.716-15-15-15s-15,6.716-15,15v60.001c0,8.284,6.716,15,15,15h190c8.284,0,15-6.716,15-15V40   C320.002,31.716,313.286,25,305.002,25z" />
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Langcontainer" lang="ja">
            <ul class="lang-picker">
                <li class="language">
                    <a href="example.com" lang="ja">
                        <img src="https://cdn0.iconfinder.com/data/icons/world-flags-1/100/Japan-2-128.png" alt=""
                            width="16px">
                        日本語</a></li>
                <li class="language">
                    <a href="example.com" lang="en"> <img
                            src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"
                            alt="" width="16px">
                        English
                    </a>
                </li>
                <li class="language"><a href="example.com" lang="fr">
                        <img src="https://cdn0.iconfinder.com/data/icons/world-flags-1/100/France-2-128.png" alt=""
                            width="16px">
                        Français</a></li>
            </ul>
        </div>
    </header>
    <!-- End header -->
   @yield('content')
    <!-- Start footer -->
    <footer class="footer-section">
        <div class="bg-adjuster"></div>
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-30">
                        <div class="single-cta d-flex align-items-center">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, Dhaka, Bangladesh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+880 1627788543</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Legal</h3>
                            </div>
                            <ul class="d-flex flex-column">
                                <li><a href="#">Privacy Statment</a></li>
                                <li><a href="#">Terms of services.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Partners</h3>
                            </div>
                            <ul>
                                <li><a href="#">Partners 1</a></li>
                                <li><a href="#">Partners 2</a></li>
                                <li><a href="#">Partners 3</a></li>
                                <li><a href="#">Partners 4</a></li>
                                <li><a href="#">Partners 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 py-sm-3 py-3 py-lg-0 py-md-0">
                        <div class="footer-widget">
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/home4/logo_turquoise.svg" class="img-fluid"
                                        alt="logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022, All Right Reserved <a href="#">DAC-Rapide</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
    </script>
    <script type="module">
        import ScrollTop from 'https://cdn.skypack.dev/smooth-scroll-top';
        const scrollTop = new ScrollTop();
        scrollTop.init();
    </script>
    <!-- ===================jquery========================= -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.4/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://bfintal.github.io/Counter-Up/jquery.counterup.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
        integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                itemsDesktop: [1000, 1],
                itemsDesktopSmall: [980, 1],
                itemsTablet: [768, 1],
                itemsMobile: [650, 1],
                autoPlay: true,
                autoPlaySpeed: 5000,
                autoPlayTimeout: 5000,
                autoplayHoverPause: true
            });
            $(".to-signin").on("click", function () {
                $(this)
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                $(".form-signup").slideUp(500);
                $(".form-signin").slideDown(500);
            });

            $(".to-signup").on("click", function () {
                $(this)
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                $(".form-signin").slideUp(500);
                $(".form-signup").slideDown(500);
            });

            $(".to-signin-link").on("click", function () {
                $(".to-signin")
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                $(".form-signup").slideUp(200);
                $(".form-signin").slideDown(200);
            });

            $(".to-signup-link").on("click", function () {
                $(".to-signup")
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                $(".form-signin").slideUp(200);
                $(".form-signup").slideDown(200);
            });
            $('.previewCTD').on('click', function (e) {
                e.preventDefault();
                // console.log('hi');
                $('body').removeClass('overflow-auto');
                $('.preview-popup-modal').addClass('is-visible');

                if ($('.preview-popup-modal').hasClass('is-visible')) {
                    $('body').css('overflow', 'hidden');
                } else {
                    $('body').css('overflow-x', 'none');
                }

            });
            $('.PreviewCTDclose').on('click', function (e) {
                e.preventDefault();
                $('body').addClass('overflow-auto');
                $('.preview-popup-modal').removeClass('is-visible');
            });
            $('.shareTo').on('click', function (e) {
                e.preventDefault();
                $('body').removeClass('overflow-auto');
                $('.share-popup-modal').addClass('is-visible');

                if ($('.share-popup-modal').hasClass('is-visible')) {
                    $('body').css('overflow', 'hidden');
                } else {
                    $('body').css('overflow-x', 'none');
                }
            });
            $('.modal-close').on('click', function (e) {
                e.preventDefault();
                $('body').addClass('overflow-auto');
                $('.share-popup-modal').removeClass('is-visible');
            });



            $('.multi-lot').on('click', function (e) {
                e.preventDefault();
                $('body').removeClass('overflow-auto');
                $('.MultiLotCTD-modal').addClass('is-visible');

                if ($('.MultiLotCTD-modal').hasClass('is-visible')) {
                    $('body').css('overflow', 'hidden');
                } else {
                    $('body').css('overflow-x', 'none');
                }
            });
            $('.MultiLotCTDclose').on('click', function (e) {
                e.preventDefault();
                $('body').addClass('overflow-auto');
                $('.MultiLotCTD-modal').removeClass('is-visible');
            });



            $('.cart-modal-toggle').on('click', function (e) {
                e.preventDefault();
                $('body').removeClass('overflow-auto');
                $('.SingleLot-AddToCart-modal').addClass('is-visible');

                if ($('.SingleLot-AddToCart-modal').hasClass('is-visible')) {
                    $('body').css('overflow', 'hidden');
                } else {
                    $('body').css('overflow-x', 'none');
                }
            });
            $('.modal-close').on('click', function (e) {
                e.preventDefault();
                $('body').addClass('overflow-auto');
                $('.SingleLot-AddToCart-modal').removeClass('is-visible');
            });
        });
    </script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <!-- bootstrap js
		============================================ -->
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery REVOLUTION Slider  -->
    <script src="{{ asset('assets/frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/rs-plugin/js/rs.home.js') }}"></script>

    <!-- owl.carousel.min js
		============================================ -->
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sidr.min js
        ============================================ -->
    <script src="{{ asset('assets/frontend/js/jquery.sidr.min.js') }}"></script>

    <!-- jflickrfeed.min js
        ============================================ -->
    <script src="{{ asset('assets/frontend/js/jflickrfeed.min.js') }}"></script>

    <!-- jqueryui js
        ============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- jquery.mixitup.min js
        ============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"
        integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- countown js
        ============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"
        integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- counterup min js
        ============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- wow js
		============================================ -->
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- plugins js
		============================================ -->
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>

    <!-- main js
		============================================ -->

</body>

</html>