<head>
    <meta charset="utf-8"/>
    <title>Lets Home Study</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all'
          rel='stylesheet' type='text/css'>
    <link href="/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/base/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="/assets/base/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-2 c-layout-header-dark-mobile c-header-transparent-dark" data-minimize-offset="80">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="index-2.html" class="c-logo">
                        <img src="assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo">
                        <img src="assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo-inverse">
                        <img src="assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-mobile-logo"> </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    {{--<button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i>
                        <span class="c-cart-number c-theme-bg">2</span>
                    </button>--}}
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li class="c-active">
                            <a href="{{route('home')}}" class="c-link dropdown-toggle">Home
                                <span class="c-arrow c-toggler"></span>
                            </a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a href="{{route('features')}}" class="c-link dropdown-toggle">Features
                                <span class="c-arrow c-toggler"></span>
                            </a>
                            {{--<ul class="dropdown-menu c-menu-type-classic c-pull-left">--}}
                                {{--<li class="dropdown-submenu">--}}
                                    {{--<a href="javascript:;">Feature 1--}}
                                        {{--<span class="c-arrow c-toggler"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="dropdown-submenu">--}}
                                    {{--<a href="#">Feature 2--}}
                                        {{--<span class="c-arrow c-toggler"></span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        <li>
                            <a href="javascript:;" class="c-link dropdown-toggle">About
                                <span class="c-arrow c-toggler"></span>
                            </a>
                        </li>
                        <li>
                        @php
                            $class = "display:none";
                            $count = 0;
                            if(Session::has('cart')){
                              $class = 'display:block';
                              $count = Session::get('cart')->totalQty;
                            }
                        @endphp
                        <li style="{{$class}}" class="c-search-toggler-wrapper cart_icon">
                            <a href="/shop/shop-cart" class="c-link dropdown-toggle">
                                <i class="fa fa-shopping-cart" area-hidden="true"></i>
                                <span class="badge cart_icon_count"> {{ $count }} </span>
                            </a>
                        </li>
                        <li class="c-active">
                        @if (Auth::check())
                            <a href="javascript:;" class="c-link dropdown-toggle">
                                <i class="icon-user"></i> {{ Auth::user()->last_name }}, {{ Auth::user()->first_name }}
                                <span class="c-arrow c-toggler"></span>
                            </a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="user/profile">My Room
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="/user/logout/{{Auth::user()->id}}">logout
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                            </ul>

                            {{--<a href="javascript:;" class="c-link dropdown-toggle">
                                <i class="icon-user"></i> {{ Auth::user()->last_name }}, {{ Auth::user()->first_name }}
                            </a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="user/profile/{{Auth::user()->id}}">My Room
                                    <a href="/user/profile">My Room
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="/user/logout/{{Auth::user()->id}}">logout
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                            </ul>--}}
                        @else
                            <a href="javascript:;" data-toggle="modal" data-target="#signin-form"
                               class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold">
                                <i class="icon-user"></i> Sign In</a>
                        @endif
                        </li>
                        {{--<li>
                            <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold">
                                <i class="icon-user"></i> Sign In</a>
                        </li>
                        <li class="c-quick-sidebar-toggler-wrapper">
                            <a href="#" class="c-quick-sidebar-toggler">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </a>
                        </li>--}}
                    </ul>
                </nav>
                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
            <!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
</header>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->