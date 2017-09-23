@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-none">
        {{--<div class="container-fluid">--}}
            {{--<div class="page-section third" style="border:1px solid lightgrey;">--}}
                <div class="panel panel-default  curriculum paper-shadow" data-z="0.5">
                    <div class="row" style="background-color:lightgrey; ">
                        <div class="col-md-4"><h5 class="text-subhead-2 text-light">Lesson- {{ $content->lesson->name}}</h5></div>
                    </div>
                    <div class="flowplayer center-block" data-swf="flowplayer.swf" data-ratio="0.4167">
                        <video>
                            {{--<source type="video/webm"--}}
                            {{--src="https://edge.flowplayer.org/bauhaus.webm">--}}
                            <source type="video/mp4"
                                    src="/home/CHEMISTRY LESSON 13_x264.mp4">
                            {{--src="https://edge.flowplayer.org/bauhaus.mp4">--}}
                        </video>
                    </div>
                    <div class="pull-right" style="background-color: red;">
                        <a class="btn btn-primary" href="#collapseExample{{1}}">
                            Complete
                        </a>
                    </div>
                </div>
            {{--</div>--}}
        {{--</div>--}}
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
