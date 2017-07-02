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
        <div class="c-content-title-1">
            <h3 class="c-font-uppercase c-font-bold">Order History</h3>
        </div>
        <div class="row c-margin-b-40 c-order-history-2">
            <div class="row c-cart-table-title">
                <div class="col-md-2 c-cart-image">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Image</h3>
                </div>
                <div class="col-md-1 c-cart-ref">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Order</h3>
                </div>
                <div class="col-md-2 c-cart-desc">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Description</h3>
                </div>
                <div class="col-md-2 c-cart-price">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Price</h3>
                </div>
                <div class="col-md-3 c-cart-total">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Payment Method</h3>
                </div>
                <div class="col-md-2 c-cart-qty">
                    <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Date</h3>
                </div>
            </div>
            <!-- BEGIN: ORDER HISTORY ITEM ROW -->
            <div class="row c-cart-table-row">
                <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">Item 1</h2>
                <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                    <img src="/assets/base/img/content/shop3/20.jpg" /> </div>
                <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Order</p>
                    <p>#1103</p>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Description</p>
                    <p>
                        <a href="shop-product-details-2.html" class="c-font-bold c-theme-link c-font-dark">Camera</a>
                    </p>
                </div>
                <div class="clearfix col-md-2 col-sm-3 col-xs-6 c-cart-price">
                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Price</p>
                    <p class="c-cart-price c-font-bold">$147.00</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 c-cart-total">
                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Payment Method</p>
                    <p class="c-cart-price c-font-bold">Credit Cart (MasterCard)</p>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Date</p>
                    <p>2 Sep 2015</p>
                </div>
            </div>
            <!-- END: ORDER HISTORY ITEM ROW -->
        </div>
        <!-- END: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
        <!-- END: PAGE CONTENT -->
    </div>
</div>
@endsection