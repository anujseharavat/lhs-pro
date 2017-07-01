
<!DOCTYPE html>
<!--
Theme: Lets Home Study - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.5
Version: 1.3.5
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/Lets Home Study-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from themehats.com/themes/Lets Home Study/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:47:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="/assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="/assets/base/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
@include('layout.shop.header')
@include('shop.forgot-password')
@include('layout.shop.partial.signin-modal')
@include('layout.shop.partial.signup-modal')

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">Cart</h3>
                <h4 class="">Page Sub Title Goes Here</h4>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li>
                    <a href="#">Shop</a>
                </li>
                <li>/</li>
                <li>
                    <a href="shop-cart.html">Shopping Cart</a>
                </li>
                <li>/</li>
                <li class="c-state_active">Lets Home Study Components</li>
            </ul>
        </div>
    </div>
    <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    @yield('content')
</div>
<!-- END: PAGE CONTAINER -->
@include('layout.shop.footer')
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
<script src="/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
<script src="/assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="/assets/base/js/components.js" type="text/javascript"></script>
<script src="/assets/base/js/components-shop.js" type="text/javascript"></script>
<script src="/assets/base/js/app.js" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-64667612-1', 'themehats.com');
    ga('send', 'pageview');
</script>
</body>



<!-- Mirrored from themehats.com/themes/Lets Home Study/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:47:49 GMT -->
</html>