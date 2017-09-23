<!DOCTYPE html>

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

@include('layout.home.header')
<!-- Mirrored from themehats.com/themes/letshomestudy.com/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:27:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
@include('layout.home.partial.forgot-password')
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
@include('user.partial.signin-modal')
<!-- END: CONTENT/USER/SIGNUP-FORM -->
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
@include('user.partial.signup-modal')

<!-- END: CONTENT/USER/LOGIN-FORM -->
<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->

<!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<!-- BEGIN: PAGE CONTAINER -->
@include('layout.home.partial.container');
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
@include('layout.home.footer');
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
<script src="/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
<script src="/assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src="/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
<script src="/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="/assets/base/js/components.js" type="text/javascript"></script>
<script src="/assets/base/js/components-shop.js" type="text/javascript"></script>
<script src="/assets/base/js/app.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function()
    {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script>
    @if (count($errors) > 0)

    //alert(javaScriptVar);
        @foreach($errors->all() as $error)
            var err = "<?php echo $error; ?>";
            if (err.indexOf('Please check your credentials') >= 0) {
                $('#signin-form').modal('show');
            }else {
                $('#signup-form').modal('show');
            }
        @endforeach
    @endif
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
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','home/js/analytics.js','ga');
    ga('create', 'UA-64667612-1', 'themehats.com');
    ga('send', 'pageview');
</script>
</body>



<!-- Mirrored from themehats.com/themes/letshomestudy.com/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2016 11:29:54 GMT -->
</html>