@extends('layout.room.master')
@section('content')
<div class="st-content-inner">
    <!-- extra div for emulating position:fixed of the menu -->
    <div class="panel panel-default">
        <!-- Progress table -->
        <div class="table-responsive">
            @if ($progress_data)
            <table class="table v-middle">
                <thead>
                {{--@php dd($progress_data)@endphp--}}
                <tr>
                    <th width="20">

                    </th>
                    @foreach(array_keys($progress_data[0]) as $table_head)
                    <th>{{($table_head == 'status') ? 'Progress bar' : $table_head}}</th>
                    @endforeach

                </tr>
                </thead>
                <tbody id="responsive-table-body">
                @foreach($progress_data as $table_data)
                <tr>
                    <td></td>
                    @foreach($table_data as $head => $table_values)
                        @if($head == 'status')
                            @php
                                switch($table_values){
                                    case 1: $class_name = 'progress-bar-warning'; break;
                                    case 2: $class_name = 'progress-bar-success'; break;
                                    default: $class_name = 'progress-bar-not-added'; break;
                                }
                            @endphp
                            <td>
                                <div class="progress" style="width: 50%">
                                    <div class="progress-bar {{$class_name}}" role="progressbar" aria-valuenow="100"
                                         aria-valuemin="0" aria-valuemax="100" style="width:100%;">
                                    </div>
                                </div>
                            </td>
                            @continue;
                        @endif
                        <td>{{$table_values}}</td>
                    @endforeach
                </tr>
                @endforeach
                {{--<tr>
                    <td>

                    </td>
                    <td><span class="label label-primary">19/09/2014</span></td>
                    <td>

                        <img src="images/people/110/woman-4.jpg" width="40" class="img-circle"> Michelle Smith

                    </td>
                    <td><a href="#">contact@letshomestudy.com</a></td>
                    <td>#IDnumber</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="43"
                                 aria-valuemin="0" aria-valuemax="100" style="width:43%;">
                            </div>
                        </div>
                    </td>
                    <td class="text-right">

                        <label for="checkbox1">123456</label>
                    </td>
                </tr>--}}
                </tbody>
            </table>
                @else
                <p>No Record found</p>
                @endif
        </div>
        <!-- // Progress table -->

        {{--<div class="panel-footer padding-none text-center">--}}
            {{--<ul class="pagination">--}}
                {{--<li class="disabled"><a href="#">«</a></li>--}}
                {{--<li class="active"><a href="#">1</a></li>--}}
                {{--<li><a href="#">2</a></li>--}}
                {{--<li><a href="#">3</a></li>--}}
                {{--<li><a href="#">4</a></li>--}}
                {{--<li><a href="#">5</a></li>--}}
                {{--<li><a href="#">»</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>

</div>
@endsection