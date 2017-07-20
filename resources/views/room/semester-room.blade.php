@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-none">
        <div class="container-fluid">
            <div class="page-section third">
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">
                    <ul class="nav nav-tabs" tabindex="0" style="overflow: hidden; outline: none;">
                        @foreach($sems as $sem)
                            <li class=" {{ $sem->semester_id == $activeSem->semester_id ? 'active' : ''}}"><a href="/user/semester-room"><i class="fa fa-fw fa-lock"></i> <span
                                            class="hidden-sm hidden-xs">{{$sem->semester->name}}</span></a></li>
                        @endforeach
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        @include('layout.success')
                        <h5 class="text-subhead-2 text-light">Curriculum</h5>

                        @foreach($subs as $sub)
                            <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                                <div class="panel-heading panel-heading-gray collapsed" data-toggle="" data-target="#curriculum-1" aria-expanded="false">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-headline">{{ $sub->name }}</h4>
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
                        @endforeach


                        <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                            <div class="panel-heading panel-heading-gray collapsed" data-toggle="collapse" data-target="#curriculum-1" aria-expanded="false">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-headline">Chapter 2</h4>
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
                    <!-- // END Panes -->
                </div>
                <!-- // END Tabbable Widget -->
            </div>
        </div>
    </div>
@endsection




