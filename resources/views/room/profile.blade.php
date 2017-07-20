@extends('layout.room.master')
@section('content')
    <!-- extra div for emulating position:fixed of the menu -->
    <div class="st-content-inner padding-none">

        <div class="container-fluid">

            <div class="page-section third">
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">

                    <!-- Tabs -->
                    <ul class="nav nav-tabs" tabindex="0" style="overflow: hidden; outline: none;">
                        <li class="active"><a href="app-student-profile.html"><i class="fa fa-fw fa-lock"></i> <span
                                        class="hidden-sm hidden-xs">Manage Account</span></a></li>
                    </ul>
                    <!-- // END Tabs -->

                    <!-- Panes -->
                    <div class="tab-content">
                        @include('layout.success')
                        <div id="account" class="tab-pane active">
                            <form class="form-horizontal" method="POST" action="/user/profile">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">{{ Auth::user()->last_name }}, {{ Auth::user()->first_name }}</label>
                                    <div class="col-md-6">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block width-100 bg-grey-100">
                                                    <i class="fa fa-photo text-light"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="btn btn-white btn-sm paper-shadow relative"
                                                   data-z="0.5" data-hover-z="1" data-animated=""> Add Image<i
                                                            class="fa fa-upl"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <input type="text" class="form-control" id="first_name" name="first_name" required
                                                           placeholder="Your first name" value="{{ Auth::user()->first_name }}"><span
                                                            class="ma-form-highlight"></span><span
                                                            class="ma-form-bar"></span>
                                                    <label for="exampleInputFirstName"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <input type="text" class="form-control" id="last_name" name="last_name" required
                                                           placeholder="Your last name" value="{{ Auth::user()->last_name }}"><span
                                                            class="ma-form-highlight"></span><span
                                                            class="ma-form-bar"></span>
                                                    <label for="exampleInputLastName"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="email" class="form-control" id="email" name="email" required
                                                       placeholder="Email" value="{{ Auth::user()->email}}"><span class="ma-form-highlight"></span><span
                                                        class="ma-form-bar"></span>
                                                <label for="inputEmail3"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group margin-none">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5"
                                                data-hover-z="1" data-animated="">Save Changes
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- // END Panes -->
                </div>
                <!-- // END Tabbable Widget -->
            </div>
        </div>

        <div id="ascrail2000" class="nicescroll-rails"
             style="width: 5px; z-index: 1; cursor: default; position: absolute; top: 24px; left: 1005px; height: 39px; display: none; opacity: 1;">
            <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(66, 165, 245); border: 0px; background-clip: padding-box; border-radius: 5px;"></div>
        </div>
        <div id="ascrail2000-hr" class="nicescroll-rails"
             style="height: 5px; z-index: 1; top: 58px; left: 20px; position: absolute; cursor: default; display: none; opacity: 1;">
            <div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(66, 165, 245); border: 0px; background-clip: padding-box; border-radius: 5px; left: 0px;"></div>
        </div>
    </div>
@endsection