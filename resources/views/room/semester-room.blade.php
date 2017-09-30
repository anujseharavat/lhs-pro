@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-top-none">
        <div class="container-fluid">
            <div class="page-section third">
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">
                    <ul class="nav nav-tabs" tabindex="0" style="overflow: hidden; outline: none;">
                        @foreach($sems as $sem)
                            <li class=" {{ $sem->semester_id == $id ? 'active' : ''}}"><a
                                        href="{{ route('semester-room', ['id' => $sem->semester_id]) }}"><i class="fa fa-fw fa-lock"></i> <span
                                            class="hidden-sm hidden-xs">{{$sem->semester->name}}</span></a></li>
                        @endforeach
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        @include('layout.success')
                        <h5 class="text-subhead-2 text-light">{{ $activeSem == null ? 'No Course Activated - You can activate from your order history' : 'Curriculum' }}</h5>
                        @if($activeSem)
                            @foreach($subs as $sub)
                                {{--Subject List--}}
                                {{--@if ($sub->subject->semester_id == $activeSem->semester_id)--}}
                                    <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                                        <div class="panel-heading panel-heading-gray"
                                             data-toggle="{{ $sub->isActive() ? 'collapse' : '' }}"
                                             data-target="#subject-{{$sub->subject_id}}" aria-expanded="false">
                                            <div class="media {{ $sub->status < 1 ? 'bg-grey-300' :  ($sub->status == 1 ? 'bg-amber-300': 'bg-green-300') }}">
                                                <div class="media-left">
                                            <span class="icon-block img-circle bg-indigo-300 half text-white"><i
                                                        class="fa fa-graduation-cap"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="text-headline ">{{ $sub->subject->name }}</h4>
                                                    <p>Subject description here</p>
                                                </div>
                                                <div class="media-right">
                                                    <a class="btn btn-primary" data-toggle="collapse"
                                                       href="#collapseExample{{1}}" aria-expanded="false"
                                                       aria-controls="collapseExample">
                                                        {{ $sub->statusName->name}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{--Lesson List--}}
                                        @if ($sub->isActive())
                                            {{--<div class="panel-heading" aria-expanded="false">--}}
                                            <div class="list-group collapse" id="subject-{{$sub->subject_id}}">
                                                @foreach($lessons as $lesson)
                                                    @if ($lesson->lesson->subject_id == $sub->subject_id )
                                                        <div class="list-group-item media" data-target="#">
                                                            <div class="media-left">
                                                                <div class="text-crt">L.{{ $lesson->lesson_id }}</div>
                                                            </div>
                                                            <div class="media-body">
                                                                <i class="fa fa-fw fa-circle {{ $lesson->status < 1 ? 'text-grey-300' :  ($lesson->status == 1 ? 'text-amber-300': 'text-green-300') }} ">
                                                                </i> <a href="{{ URL::to('/user/lesson-room/'.$lesson->lesson_id) }}">{{ $lesson->lesson->name }}</a>
                                                            </div>
                                                            <div class="media-right">
                                                                <div class="width-100 text-right text-caption">2:03 min
                                                                    lesson
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            {{--</div>--}}
                                        @endif
                                        {{--endd lesson--}}
                                    </div>
                                {{--@endif--}}
                            @endforeach
                        @endif
                    </div>
                    <!-- // END Panes -->
                </div>
                <!-- // END Tabbable Widget -->
            </div>
        </div>
    </div>
@endsection


