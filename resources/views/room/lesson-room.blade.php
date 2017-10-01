@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-none">
        <div class="container-fluid">
            <div class="page-section third">
                <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                    <div class="row">
                        <div class="col-md-4"><h5 class="text-subhead-2 text-light"> {{ $lesson->desc  }} : {{ $lesson->name  }} </h5></div>
                        <div class="pull-right"><div class="col-md-4"><a  href="{{ route('semester-room',["id" => $lesson->subject->semester_id])}}" class="btn btn-info">Back</a></div></div>
                    </div>
                    @foreach($userContents as $userContent)
                        @if ($userContent->content->lesson_id == $lesson->id )
                            <div class="list-group-item media" data-target="#">
                                <div class="media-left">
                                    <div class="text-crt">L.{{ $userContent->content_id }}</div>
                                </div>
                                <div class="media-body">
                                    @if ($userContent->status == 0)
                                        <i class="fa fa-fw fa-circle text-grey-300"></i>
                                    @elseif($userContent->status == 1)
                                        <i class="fa fa-fw fa-circle text-amber-300"></i>
                                    @elseif($userContent->status == 2)
                                        <i class="fa fa-fw fa-circle text-green-300"></i>
                                    @endif

                                        @if ($userContent->status == 0)
                                            <span>{{ $userContent->content->details}}</span>
                                        @else
                                            <a href="{{ URL::to('/user/content-room/'.$userContent->content_id) }}">{{ $userContent->content->details}}</a>
                                        @endif

                                </div>
                                <div class="media-right">
                                    {{--<div class="width-100 text-right text-caption">{{ $userContent->content->details}}--}}
                                        {{--2:03 min lesson--}}
                                    {{--</div>--}}
                                    {{--<a  href="{{ route('user-content-status2', ['content_id'=> $userContent->content_id]) }}" class="btn btn-primary">Done</a>--}}
                                </div>
                            </div>
                        @endif
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
