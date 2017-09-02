@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-none">
        <div class="container-fluid">
            <div class="page-section third" style="border:1px solid lightgrey;">
                <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                    <div class="row">
                        <div class="col-md-4"><h5 class="text-subhead-2 text-light">{{ $lesson->name }}</h5></div>
                    </div>
                    @foreach($contentTypes as $contentType)
                        <div class="panel-heading panel-heading-gray"
                             data-toggle="collapse"
                             data-target="#contentType-{{$contentType->id}}" aria-expanded="false">
                            <div class="media bg-amber-400">
                                <div class="media-left">
                                            <span class="icon-block img-circle bg-indigo-300 half text-white"><i
                                                        class="fa fa-graduation-cap"></i></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-headline ">{{ $contentType->name }}</h4>
                                    <p>Content description here</p>
                                </div>
                                <div class="media-right">
                                    <a class="btn btn-primary" data-toggle="collapse"
                                       href="#collapseExample{{1}}" aria-expanded="false"
                                       aria-controls="collapseExample">
                                        {{ 'text' }}
                                    </a>
                                </div>
                            </div>
                            {{--Start content in content Type--}}
                            <div class="list-group collapse" id="contentType-{{$contentType->id}}">
                                @foreach($userContents as $userContent)
                                    @if ($userContent->content->lesson_id == $id && $userContent->content->type == $contentType->id )
                                        <div class="list-group-item media" data-target="#">
                                            <div class="media-left">
                                                <div class="text-crt">L.{{ $userContent->content_id }}</div>
                                            </div>
                                            <div class="media-body">
                                                <i class="fa fa-fw fa-circle {{ $userContent->isActive() ? 'text-amber-300' : 'text-grey-300' }} "></i>
                                                {{--<a href="{{ URL::to('/user/lesson-room/'.$userContent->content_id) }}">{{ $userContent->content->path}}</a>--}}
                                                <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
                                                    <video>
                                                        {{--<source type="video/webm"--}}
                                                                {{--src="https://edge.flowplayer.org/bauhaus.webm">--}}
                                                        <source type="video/mp4"
                                                                src="https://edge.flowplayer.org/bauhaus.mp4">
                                                    </video>
                                                </div>
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
                            {{--End content in content Type--}}
                        </div>
                    @endforeach
                </div>
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
