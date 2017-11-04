<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l1 sidebar-r3" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>

    <link href="/user/css/vendor/all.css" rel="stylesheet">
    <link href="/user/css/app/app.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>

<!-- Wrapper required for sidebar transitions -->
<div class="st-container">

@include('layout.room.header')
@include('layout.room.partial.sidebar-left')
@include('layout.room.partial.sidebar-right')

<!-- content push wrapper -->
    <div class="st-pusher" id="content">
        <!-- this is the wrapper for the content -->
        <div class="st-content">
            @yield('content')
        </div>
        <!-- /st-content -->
    </div>
</div>
<!-- /st-pusher -->
@include('layout.room.footer')
@if (!Auth::check())
    @include('user.partial.signin-modal')
@endif
<!-- /st-container -->

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
</script>

<!-- Vendor Scripts Bundle
Includes all of the 3rd party JavaScript libraries above.
The bundle was generated using modern frontend development tools that are provided with the package
To learn more about the development process, please refer to the documentation.
Do not use it simultaneously with the separate bundles above. -->
<script src="/user/js/vendor/all.js"></script>

<!-- App Scripts Bundle
Includes Custom Application JavaScript used for the current theme/module;
Do not use it simultaneously with the standalone modules below. -->
<script src="/user/js/app/app.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>--}}
{{--<script src="/user/js/vendor/forms/select2.js"></script>--}}
<script>
    $(document).ready(function()
    {
        $('.ddlClass').select2({
            placeholder: "Select a Subject",
            allowClear: true,
            minimumSelectionLength:2,
            maximumSelectionLength:2
        });
        var slider = $('.c-layout-revo-slider .tp-banner');
        var cont = $('.c-layout-revo-slider .tp-banner-container');
        var api = slider.show().revolution(
            {
                sliderType: "standard",
                sliderLayout: "fullscreen",
                responsiveLevels: [2048, 1024, 778, 480],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [620, 768, 960, 720],
                delay: 15000,
                startwidth: 1170,
                startheight: 620,
                touchenabled: "on",
                navigation:
                    {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        arrows:
                            {
                                style: "circle",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: '',
                                left:
                                    {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                right:
                                    {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    }
                            }
                    },
                spinner: "spinner2",
                shadow: 0,
                fullWidth: "off",
                forceFullWidth: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "on",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "on",
                hideArrowsOnMobile: "on",
                hideThumbsUnderResolution: 0
            });
        api.bind("revolution.slide.onchange", function(e, data)
        {
            $('.c-layout-header').removeClass('hide');
            setTimeout(function()
            {
                $('.c-singup-form').fadeIn();
            }, 1500);
        });
    }); //ready
</script>

</body>

</html>