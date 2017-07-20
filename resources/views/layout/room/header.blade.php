<!-- Fixed navbar -->
<div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i
                        class="fa fa-ellipsis-v"></i></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-nav-bordered navbar-left">
                <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                    <img src="/assets/base/img/layout/logos/logo-1.png" alt="Bill" class="img-circle" />
                </a>
            </ul>
            @if (Auth::check())
            <ul class="nav navbar-nav navbar-nav-bordered navbar-right">

                <!-- notifications -->
                <!--<li class="dropdown notifications updates">
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
                    </ul>-->
                </li>
                <!-- // END notifications -->

                <!-- User -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                            <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40"/> {{auth()->user()->last_name }},  {{auth()->user()->first_name }} <span
                                    class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('user/profile') }}">My Profile</a></li>
                            <li><a href="{{ URL::to('user/reset-password') }}">Password Reset</a></li>
                            <li><a href="{{ URL::to('user/order-history-room') }}">Order History</a></li>
                            <li><a href="/user/logout/{{Auth::user()->id}}">logout<span class="c-arrow c-toggler"></span></a></li>
                        </ul>
                    </li>

            </ul>
            @endif
        </div>
        <!-- /.navbar-collapse -->

    </div>
</div>