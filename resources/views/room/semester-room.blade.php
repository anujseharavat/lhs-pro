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
                            <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                                <div class="panel-heading panel-heading-gray"
                                     data-toggle="{{ $sub->id == $activeSub->subject_id  ? 'collapse' : '' }}"
                                     data-target="#subject-1" aria-expanded="false">
                                    <div class="media {{ $sub->id == $activeSub->subject_id  ? 'bg-amber-400' : 'bg-grey-400' }}">
                                        <div class="media-left">
                                            <span class="icon-block img-circle bg-indigo-300 half text-white"><i
                                                        class="fa fa-graduation-cap"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-headline ">{{ $sub->name }}</h4>
                                            <p>Subject description here</p>
                                        </div>
                                    </div>
                                </div>
                                @if ($sub->id == $activeSub->subject_id)
                                    <div class="list-group collapse" id="subject-{{$sub->id}}">
                                        @foreach($lessons as $lesson)
                                        <div class="list-group-item media" data-target="#">
                                            <div class="media-left">
                                                <div class="text-crt">1.</div>
                                            </div>
                                            <div class="media-body" data-toggle="{{ $lesson->id == $activeLesson->lesson_id  ? 'collapse' : '' }}" data-target="#lesson-{{ $lesson->id }}">
                                                <i class="fa fa-fw fa-circle {{ $lesson->id == $activeLesson->lesson_id  ? 'text-amber-300' : 'text-grey-300' }} "></i> {{ $lesson->name }}
                                            </div>
                                            <div class="media-right">
                                                <div class="width-100 text-right text-caption">2:03 min</div>
                                            </div>
                                        </div>
                                            <div class="list-group collapse" id="lesson-{{ $lesson->id }}" aria-expanded="false"
                                                 style="height: 0px;">
                                                <!-- extra div for emulating position:fixed of the menu -->
                                                <!-- the player -->
                                                <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
                                                    <video>
                                                        <source type="video/webm" src="https://edge.flowplayer.org/bauhaus.webm">
                                                        <source type="video/mp4" src="https://edge.flowplayer.org/bauhaus.mp4">
                                                    </video>
                                                </div>
                                                {{ $lesson->content}}
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
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
    .flowplayer { width: 60%; }
</style>

<!-- for video tag based installs flowplayer depends on jQuery 1.7.2+ -->
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<!-- include flowplayer -->
<script src="/user/js/flowplayer.min.js"></script>
