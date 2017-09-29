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

<!-- /st-pusher -->
@include('layout.room.footer')

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

</body>

</html>