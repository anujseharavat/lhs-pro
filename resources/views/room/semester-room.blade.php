@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-none">
        <div class="container-fluid">
            <div class="page-section third">
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">
                    <ul class="nav nav-tabs" tabindex="0" style="overflow: hidden; outline: none;">
                        @foreach($sems as $sem)
                            <li class=" {{ $sem->isActive() ? 'active' : ''}}"><a
                                        href="/user/semester-room"><i class="fa fa-fw fa-lock"></i> <span
                                            class="hidden-sm hidden-xs">{{$sem->semester->name}}</span></a></li>
                        @endforeach
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        @include('layout.success')
                        <h5 class="text-subhead-2 text-light">Curriculum</h5>
                        @foreach($subs as $sub)
                            {{--Subject List--}}
                            <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                                <div class="panel-heading panel-heading-gray"
                                     data-toggle="{{ $sub->isActive($activeSub) ? 'collapse' : '' }}"
                                     data-target="#subject-{{$sub->id}}" aria-expanded="false">
                                    <div class="media {{$sub->isActive($activeSub)  ? 'bg-amber-400' : 'bg-grey-400' }}">
                                        <div class="media-left">
                                            <span class="icon-block img-circle bg-indigo-300 half text-white"><i
                                                        class="fa fa-graduation-cap"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-headline ">{{ $sub->name }}</h4>
                                            <p>Subject description here</p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-primary" data-toggle="collapse"
                                               href="#collapseExample{{1}}" aria-expanded="false"
                                               aria-controls="collapseExample">
                                                Start
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--Lesson List--}}
                                <div class="panel-heading" aria-expanded="false">
                                    @if ($sub->isActive($activeSub))
                                        <div class="list-group collapse" id="subject-{{$sub->id}}">
                                            @foreach($lessons as $lesson)
                                                <div class="list-group-item media" data-target="#">
                                                    <div class="media-left">
                                                        <div class="text-crt">L.{{ $lesson->id }}</div>
                                                    </div>
                                                    <div class="media-body"
                                                         data-toggle="{{ $lesson->isActive($activeLesson) ? 'collapse' : '' }}"
                                                         data-target="#lesson-{{ $lesson->id }}">
                                                        <i class="fa fa-fw fa-circle {{ $lesson->isActive($activeLesson) ? 'text-amber-300' : 'text-grey-300' }} "></i> {{ $lesson->name }}
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="width-100 text-right text-caption">2:03 min lesson
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-heading panel-heading-gray"
                                                     data-toggle="collapse"
                                                     data-target="#" aria-expanded="false">
                                                    @if ($lesson->isActive($activeLesson))
                                                        <div class="list-group collapse" id="lesson-{{ $lesson->id }}"
                                                             aria-expanded="false" style="height: 0px;">
                                                            @foreach($contentTypes as $contentType)
                                                                <div class="list-group-item media"
                                                                     data-target="#contentType-{{$contentType->id}}">
                                                                    <div class="media-left">
                                                                        <div class="text-crt">T.{{ $contentType->id }}</div>
                                                                    </div>
                                                                    <div class="media-body"
                                                                         data-toggle="collapse"
                                                                         data-target="#contentType-{{ $contentType->id }}">
                                                                        <i class="fa fa-fw fa-circle text-grey-300"></i> {{ $contentType->name }}
                                                                    </div>
                                                                    <div class="media-right">
                                                                        <div class="width-100 text-right text-caption">
                                                                            3:03
                                                                            min
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-heading" aria-expanded="false">
                                                                    <div class="list-group collapse"
                                                                         id="contentType-{{ $contentType->id }}"
                                                                         aria-expanded="false" style="height: 0px;">
                                                                        @foreach($contents as $content)
                                                                            @if($content->type == $contentType->id)
                                                                            <div class="list-group-item media"
                                                                                 data-target="#">
                                                                                <div class="media-left">
                                                                                    <div class="text-crt">C.{{$content->id}}</div>
                                                                                </div>
                                                                                <div class="media-body"
                                                                                     data-toggle=""
                                                                                     data-target="#">
                                                                                    <i class="fa fa-fw fa-circle text-grey-300"></i> {{ $content->path }}
                                                                                    <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
                                                                                        <video>
                                                                                            <source type="video/webm"
                                                                                                    src="https://edge.flowplayer.org/bauhaus.webm">
                                                                                            <source type="video/mp4"
                                                                                                    src="https://edge.flowplayer.org/bauhaus.mp4">
                                                                                        </video>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="media-right">
                                                                                    {{--<a href=""--}}
                                                                                       {{--class="btn btn-md c-btn-square c-btn-green c-btn-uppercase c-btn-bold">Start</a>--}}
                                                                                    <a class="btn btn-primary" data-toggle="collapse"
                                                                                       href="#collapseExample{{1}}" aria-expanded="false"
                                                                                       aria-controls="collapseExample">
                                                                                        {{ $activeContent->statusName->Name }}
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            {{--<!-- extra div for emulating position:fixed of the menu -->--}}
                                                            {{--<!----}}
                                                            {{--<div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">--}}
                                                            {{--<video>--}}
                                                            {{--<source type="video/webm"--}}
                                                            {{--src="https://edge.flowplayer.org/bauhaus.webm">--}}
                                                            {{--<source type="video/mp4"--}}
                                                            {{--src="https://edge.flowplayer.org/bauhaus.mp4">--}}
                                                            {{--</video>--}}
                                                            {{--</div>--}}
                                                            {{--                                                {{ $lesson->desc}}--}}
                                                            {{---->--}}
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- // END Panes -->
                </div>
                <!-- // END Tabbable Widget -->
            </div>
        </div>
    </div>
@endsection



<link rel="stylesheet" href="/user/skin/skin.css">
<!-- site specific styling -->
<style>
    /*body { font: 12px , sans-serif; text-align: center; padding-top: 15%; }*/
    .flowplayer {
        width: 60%;
    }
</style>

<!-- for video tag based installs flowplayer depends on jQuery 1.7.2+ -->
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<!-- include flowplayer -->
<script src="/user/js/flowplayer.min.js"></script>
