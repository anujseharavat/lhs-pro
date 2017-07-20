@extends('layout.room.master')
@section('content')
    <div class="st-content-inner padding-none">
        <div class="container-fluid">
            <div class="page-section third">
                <div class="tabbable paper-shadow relative" data-z="0.5">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" tabindex="0" style="overflow: hidden; outline: none;">
                        <li class="active"><a href="app-student-profile.html"><i class="fa fa-fw fa-lock"></i> <span
                                        class="hidden-sm hidden-xs">Order History</span></a></li>
                    </ul>
                    <!-- // END Tabs -->
                    <!-- Panes -->
                    <div class="tab-content">
                        @foreach($orders as $order)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>Order Date: {{ $order['created_at'] }}</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" >
                                            <thead>
                                            <tr>
                                                <th>Product Id</th>
                                                <th>Description</th>
                                                <th>Qty</th>
                                                <th>Unit Price</th>
                                                <th>Total</th>
                                                {{--<th>Status</th>--}}
                                            </tr>
                                            </thead>
                                            @foreach($order->cart->items as $item)
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                            {{ $item['item']['id'] }}
                                                        </a>
                                                        <div class="collapse" id="collapseExample">
                                                            <div class="">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" data-toggle="modal" data-target="#signin-form"
                                                           class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold">
                                                            <i class="icon-user"></i>{{ $item['item']['name'] }}</a>
                                                    </td>
                                                    <td>{{ $item['qty'] }}</td>
                                                    <td>{{ $item['item']['price'] }}</td>
                                                    <td>{{ $item['price'] }}</td>
                                                </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <div class="clearfix">
                                    <strong class=" pull-right">Total Price: ${{ $order->cart->totalPrice }}</strong></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('user.partial.signin-modal')