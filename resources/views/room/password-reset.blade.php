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
                                        class="hidden-sm hidden-xs">Password Reset</span></a></li>
                    </ul>
                    <!-- // END Tabs -->

                    <!-- Panes -->
                    <div class="tab-content">
                        @include('layout.success')
                        <div id="account" class="tab-pane active">
                            @include('layout.errors')
                            <form class="form-horizontal" method="POST" action="/user/reset-password">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="old_password" class="col-md-2 control-label">Old Password</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input type="password" class="form-control" id="old_password" name="old_password"
                                                   placeholder="Type Your Old Password"><span
                                                    class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                                            <label for="inputPassword3">Old Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="new_password" class="col-md-2 control-label">New Password</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input type="password" class="form-control" id="new_password" name="new_password"
                                                   placeholder="Type Your New Password"><span
                                                    class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                                            <label for="inputPassword3">New Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="new_password_confirmation" class="col-md-2 control-label">Confirm Password</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation"
                                                   pla ceholder="Type Your Confirm Password"><span
                                                    class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                                            <label for="new_password_confirmation">Confirm Password</label>
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