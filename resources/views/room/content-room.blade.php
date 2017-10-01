@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-none">
        {{--<div class="container-fluid">--}}
        {{--<div class="page-section third" style="border:1px solid lightgrey;">--}}
        @if ($content->status)
            <div class="panel panel-default  curriculum paper-shadow" data-z="0.5">
                <div class="row" style="background-color:lightgrey; ">

                    <div class="col-md-4"><h5 class="text-subhead-2 text-light">
                            Lesson- {{ $content->content->lesson->name}}</h5></div>
                    {{--<div class="pull-right"><div class="col-md-4"><a  href="{{ route('lesson-room',["id" => $content->content->lesson_id])}}" class="btn btn-info">Back</a></div></div>--}}
                </div>

                <div class="flowplayer center-block" data-swf="flowplayer.swf" data-ratio="0.4167">
                    <video>
                        {{--<source type="video/webm"--}}
                        {{--src="https://edge.flowplayer.org/bauhaus.webm">--}}
                        <source type="video/mp4"
                                src="/home/CHEMISTRY LESSON 13_x264.mp4">
                        {{--{{$content->path}}--}}
                        {{--src="https://edge.flowplayer.org/bauhaus.mp4">--}}
                    </video>
                </div>
                <div class="pull-right">
                    <a id="btnCompelete" class="btn btn-primary {{$content->status == 1 ? 'active' : 'disabled'}} "
                       href="#collapseExample{{1}}" onclick="updateContentStatus(this)" data-content-id="{{$content->content_id}}">
                        {{$content->status == 1 ? 'Complete' : $content->statusName->name}}
                    </a>
                    <a  href="{{ route('lesson-room',["id" => $content->content->lesson_id])}}" class="btn btn-info">Back</a>
                    {{--<a  class="btn btn-primary active" id="btnCompelete2"> test</a>--}}
                    {{--{{ URL::to('/user/lesson-room/'.$lesson->lesson_id) }}"--}}
{{--                    <a  href="{{ route('lesson-room', ['id'=> $content->content->lesson->id]) }}" class="btn btn-primary">back</a>--}}
                    {{--<a  href="{{ route('user-content-status2', ['content_id'=> $content->content_id]) }}" class="btn btn-primary">test</a>--}}
                </div>
            </div>
        @else
            <div class="col-md-4 "><h5 class="text-subhead-2 text-light">
                    Content Locked</h5></div>
        @endif
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
<script type="text/javascript">
    function updateContentStatus(self) {
        var content_id = $(self).data('content-id');
//        alert(content_id);
        $.ajax({
            type: "POST",
            url: "{{route('user-content-status')}}", // This is what I have updated
            data: {'_token': "{{csrf_token()}}", 'content_id': content_id}
        }).success(function (status) {
//            alert('Status is: '+status);
            $('#btnCompelete').html('Completed').prop('disabled', true);
            $('#btnCompelete2').show().html('Activated').prop('disabled', true);
//            $('#btnCompelete').prop('disabled', true);
//            $('.cart_icon').show();
//            $('.cart_icon_count').html(total_cart_items);
        });
    }
</script>