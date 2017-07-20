@extends('layout.shop.master')
@section('title')
    LHS Dashboard
@endsection

@section ('content')
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
@section('cart-title')
    My Dashboard
@endsection
@section('cart-subtitle')
    dashboard
@endsection
@section('cart-level-1')
    User
@endsection
@section('cart-level-2')
    Dashboard
@endsection
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="container">
@section ('content')
@section ('content')
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    @section('cart-title')
        User Order History
    @endsection
    @section('cart-subtitle')
        Orderes
    @endsection
    @section('cart-level-1')
        User
    @endsection
    @section('cart-level-2')
        Order-History
@endsection
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="c-layout-sidebar-menu c-theme ">
        <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
        <div class="c-sidebar-menu-toggler">
            <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
            <a href="javascript:;" class="c-content-toggler" data-toggle="collapse"
               data-target="#sidebar-menu-1">
                <span class="c-line"></span>
                <span class="c-line"></span>
                <span class="c-line"></span>
            </a>
        </div>
        <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
            <li class="c-dropdown c-open">
                <a href="javascript:;" class="c-toggler">My Profile
                    <span class="c-arrow"></span>
                </a>
                <ul class="c-dropdown-menu">
                    <li class="c-active">
                        <a href="shop-customer-dashboard.html">My Dashbord</a>
                    </li>
                    <li class="">
                        <a href="shop-customer-profile.html">Edit Profile</a>
                    </li>
                    <li class="">
                        <a href="shop-order-history.html">Order History</a>
                    </li>
                    <li class="">
                        <a href="shop-customer-addresses.html">My Addresses</a>
                    </li>
                    <li class="">
                        <a href="shop-product-wishlist.html">My Wishlist</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
    </div>
    <div class="c-layout-sidebar-content ">
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
        <div class="col-md-8 col-md-offset-2">
            <h1>My Orders</h1>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge"> ${{ $item['price'] }}</span>
                                    {{ $item['item']['name'] }} | {{ $item['qty'] }} Units
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Price: ${{ $order->cart->totalPrice }} </strong>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- END: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
        <!-- END: PAGE CONTENT -->
    </div>
</div>
@endsection