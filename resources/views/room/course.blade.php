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
                            <h5 class="text-subhead-2 text-light">Curriculum</h5>
                            <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                                <div class="panel-heading panel-heading-gray collapsed" data-toggle="collapse" data-target="#curriculum-1" aria-expanded="false">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-headline">Chapter 1</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                        </div>
                                    </div>
                                    <span class="collapse-status collapse-open">Open</span>
                                    <span class="collapse-status collapse-close">Close</span>
                                </div>
                                <div class="list-group collapse" id="curriculum-1" aria-expanded="false" style="height: 0px;">
                                    <div class="list-group-item media" data-target="app-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">1.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-green-300"></i> Installation
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">2:03 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media active" data-target="app-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">2.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-blue-300"></i> The MVC architectural pattern
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">25:01 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="app-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">3.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">12:10 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="app-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">4.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">1:25 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="app-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">5.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">22:30 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="app-take-quiz.html">
                                        <div class="media-left">
                                            <div class="text-crt">6.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">10:00 min</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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