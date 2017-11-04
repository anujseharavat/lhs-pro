@extends('layout.room.master')
<style>
    .select_row{border:1px solid lightgrey;padding:5px;}
    .sub_row1{line-height: 35px;}
    .sub_row2{width: 100%; border:1px solid lightgrey;}
</style>
@section('content')
    <div class="st-content-inner">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="panel panel-default">
            <div class="row select_row" >
                <div class="col-md-3 sub_row1">Languages</div>
                <div class="col-md-4">
                    <select class="ddlClass sub_row2" id="ddlClass_1"
                            multiple="multiple">
                        @foreach($subjects as $sub)
                            {{--<option selected value="Accord">Physics</option>--}}
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row select_row" >
                <div class="col-md-3 sub_row1">Humanities and Social Sciences</div>
                <div class="col-md-4">
                    <select class="ddlClass sub_row2" id="ddlClass_1"
                            multiple="multiple">
                        @foreach($subjects as $sub)
                            {{--<option selected value="Accord">Physics</option>--}}
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row select_row" >
                <div class="col-md-3 sub_row1">Sciences</div>
                <div class="col-md-4">
                    <select class="ddlClass sub_row2" id="ddlClass_1"
                            multiple="multiple">
                        @foreach($subjects as $sub)
                            {{--<option selected value="Accord">Physics</option>--}}
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row select_row" >
                <div class="col-md-3 sub_row1">Mathematics</div>
                <div class="col-md-4">
                    <select class="ddlClass sub_row2" id="ddlClass_1"
                            multiple="multiple">
                        @foreach($subjects as $sub)
                            {{--<option selected value="Accord">Physics</option>--}}
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row select_row" >
                <div class="col-md-3 sub_row1">Professional and Creative</div>
                <div class="col-md-4">
                    <select class="ddlClass sub_row2" id="ddlClass_1"
                            multiple="multiple">
                        @foreach($subjects as $sub)
                            {{--<option selected value="Accord">Physics</option>--}}
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--<script type="text/javascript" src="/user/bootstrap-multiselect.js"></script>--}}
{{--<link rel="stylesheet" href="/user/bootstrap-multiselect.css" type="text/css"/>--}}
