
<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l1 sidebar-r3" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>

    <!-- Vendor CSS BUNDLE
      Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
      TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
    <link href="/user/css/vendor/all.css" rel="stylesheet">

    <!-- Vendor CSS Standalone Libraries
          NOTE: Some of these may have been customized (for example, Bootstrap).
          See: src/less/themes/{theme_name}/vendor/ directory -->
    <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->
    <!-- <link href="css/vendor/jquery.countdown.css" rel="stylesheet"> -->

    <!-- APP CSS BUNDLE [css/app/app.css]
  INCLUDES:
      - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
      - The APP CSS STANDALONE modules required by the "html" module;
  NOTE:
      - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
        It was optimised to load only what is actually used by the "html" module;
        Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
        See src/less/themes/html/app.less
  TIP:
      - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
    <link href="/user/css/app/app.css" rel="stylesheet">

    <!-- App CSS CORE
  This variant is to be used when loading the separate styling modules -->
    <!-- <link href="css/app/main.css" rel="stylesheet"> -->

    <!-- App CSS Standalone Modules
      As a convenience, we provide the entire UI framework broke down in separate modules
      Some of the standalone modules may have not been used with the current theme/module
      but ALL modules are 100% compatible -->

    <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/material.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/messages.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
    <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
  WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/user/skin/skin.css">
    <!-- site specific styling -->
    <style>
        body { font: 12px , sans-serif; text-align: center; padding-top: 15%; }
        .flowplayer { width: 60%; }
    </style>

    <!-- for video tag based installs flowplayer depends on jQuery 1.7.2+ -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <!-- include flowplayer -->
    <script src="/user/js/flowplayer.min.js"></script>

</head>

<body>

<!-- Wrapper required for sidebar transitions -->
<div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">

                <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
                    <!-- notifications -->
                    <li class="dropdown notifications updates">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-primary">4</span>
                        </a>
                        <ul class="dropdown-menu" role="notification">
                            <li class="dropdown-header">Notifications</li>
                            <li class="media">
                                <div class="pull-right">
                                    <span class="label label-success">New</span>
                                </div>
                                <div class="media-left">
                                    <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                                </div>
                                <div class="media-body">
                                    <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                                    <br/>
                                    <span class="text-caption text-muted">5 mins ago</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-right">
                                    <span class="label label-success">New</span>
                                </div>
                                <div class="media-left">
                                    <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                                </div>
                                <div class="media-body">
                                    <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                                    <br/>
                                    <span class="text-caption text-muted">3 hrs ago</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="media-body">
                                    <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                                    <p>
                                        <span class="text-caption text-muted">1 day ago</span>
                                    </p>
                                    <a href="">
                                        <img class="width-30 img-circle" src="images/people/50/woman-6.jpg" alt="people">
                                    </a>
                                    <a href="">
                                        <img class="width-30 img-circle" src="images/people/50/woman-3.jpg" alt="people">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- // END notifications -->
                    <!-- User -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                            <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> Bill <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="app-student-profile.html">My Profile</a></li>
                            <li><a href="app-student-billing.html">My Wishlist</a></li>
                            <li><a href="login.html">Account Settings</a></li>
                            <li><a href="login.html">Purchase History</a></li>
                            <li><a href="login.html">Help</a></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
        <div data-scrollable>

            <ul class="sidebar-menu sm-icons-right">
                <li><a href="app-student-dashboard.html"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>
                <li class="hasSubmenu active open">
                    <a href="#course-menu"><i class="fa fa-mortar-board"></i><span>Intractive Board</span></a>
                    <ul id="course-menu" class="in">
                        <li class="active"><a href="acadamic_room.html"><span>Acadamic Room</span></a></li>
                        <li><a href="Extra-curriculam-room.html"><span>ExtraCurriculamRoom</span></a></li>
                        <li><a href="e_library.html"><span>E-library</span></a></li>
                        <li><a href="student_room.html"><span>Student Room</span></a></li>
                        <li><a href="league_room.html"><span>League Room</span></a></li>
                        <li><a href="progress_report_room.html"><span>ProgressReport Room</span></a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#forum-menu"><i class="fa fa-file-text-o"></i><span>Forum</span></a>
                    <ul id="forum-menu">
                        <li><a href="app-forum.html"><span>Forum Home</span></a></li>
                        <li><a href="app-forum-category.html"><span>Forum Category</span></a></li>
                        <li><a href="app-forum-thread.html"><span>Forum Thread</span></a></li>
                    </ul>
                </li>
                <li class="hasSubmenu">
                    <a href="#account-menu"><i class="fa fa-user"></i><span>Account</span></a>
                    <ul id="account-menu">
                        <li><a href="app-student-profile.html">My Profile</a></li>
                        <li><a href="app-student-billing.html">My Wishlist</a></li>
                        <li><a href="login.html">Account Settings</a></li>
                        <li><a href="login.html">Purchase History</a></li>
                        <li><a href="login.html">Help</a></li>
                    </ul>
                </li>
                <li><a href="app-student-messages.html"><i class="fa fa-comments"></i><span>Messages</span></a></li>
                <li><a href="login.html"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
            </ul>
        </div>
    </div>

    <div class="sidebar right sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-skin-white" id="sidebar-library">
        <div data-scrollable>
            <h4 class="category">Category</h4>
            <ul class="sidebar-block list-group list-group-menu list-group-minimal">
                <li class="list-group-item active"><a href="#"><span class="badge pull-right"></span> POP QUIZ</a></li>
                <li class="list-group-item"><a href="#"><span class="badge pull-right"></span>Formative Exam</a></li>
                <li class="list-group-item"><a href="#"><span class="badge pull-right"></span> Submissive Exam</a></li>
                <li class="list-group-item"><a href="#"><span class="badge pull-right"></span> Mock Exam</a></li>

            </ul>

        </div>
    </div>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher" id="content">

        <!-- sidebar effects INSIDE of st-pusher: -->
        <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

        <!-- this is the wrapper for the content -->
        <div class="st-content">

            <!-- extra div for emulating position:fixed of the menu -->
            <!-- the player -->
            <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
                <video>
                    <source type="video/webm" src="https://edge.flowplayer.org/bauhaus.webm">
                    <source type="video/mp4" src="https://edge.flowplayer.org/bauhaus.mp4">
                </video>
            </div>

        </div>
        <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

    <!-- Footer -->
    <footer class="footer">
        <strong>LetsHomeStudy</strong> v1.1.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->

</div>
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

<!-- Vendor Scripts Standalone Libraries -->
<!-- <script src="js/vendor/core/all.js"></script> -->
<!-- <script src="js/vendor/core/jquery.js"></script> -->
<!-- <script src="js/vendor/core/bootstrap.js"></script> -->
<!-- <script src="js/vendor/core/breakpoints.js"></script> -->
<!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
<!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
<!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
<!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
<!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
<!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
<!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
<!-- <script src="js/vendor/core/handlebars.js"></script> -->
<!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
<!-- <script src="js/vendor/core/load_image.js"></script> -->
<!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
<!-- <script src="js/vendor/core/modernizr.js"></script> -->
<!-- <script src="js/vendor/core/velocity.js"></script> -->
<!-- <script src="js/vendor/tables/all.js"></script> -->
<!-- <script src="js/vendor/forms/all.js"></script> -->
<!-- <script src="js/vendor/media/slick.js"></script> -->
<!-- <script src="js/vendor/charts/flot/all.js"></script> -->
<!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
<!-- <script src="js/vendor/countdown/all.js"></script> -->
<!-- <script src="js/vendor/angular/all.js"></script> -->

<!-- App Scripts Bundle
  Includes Custom Application JavaScript used for the current theme/module;
  Do not use it simultaneously with the standalone modules below. -->
<script src="/user/js/app/app.js"></script>

<!-- App Scripts Standalone Modules
  As a convenience, we provide the entire UI framework broke down in separate modules
  Some of the standalone modules may have not been used with the current theme/module
  but ALL the modules are 100% compatible -->

<!-- <script src="js/app/essentials.js"></script> -->
<!-- <script src="js/app/material.js"></script> -->
<!-- <script src="js/app/layout.js"></script> -->
<!-- <script src="js/app/sidebar.js"></script> -->
<!-- <script src="js/app/media.js"></script> -->
<!-- <script src="js/app/messages.js"></script> -->
<!-- <script src="js/app/maps.js"></script> -->
<!-- <script src="js/app/charts.js"></script> -->

<!-- App Scripts CORE [html]:
      Includes the custom JavaScript for this theme/module;
      The file has to be loaded in addition to the UI modules above;
      app.js already includes main.js so this should be loaded
      ONLY when using the standalone modules; -->
<!-- <script src="js/app/main.js"></script> -->

</body>

</html>