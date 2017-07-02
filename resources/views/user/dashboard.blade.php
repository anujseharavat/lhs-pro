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
                        <a href="/user/order-history">Order History</a>
                    </li>
                    <li class="">
                        <a href="shop-customer-addresses">My Addresses</a>
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
        <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
        <div class="c-content-title-1">
            <h3 class="c-font-uppercase c-font-bold">My Dashboard</h3>
            <div class="c-line-left"></div>
            <p class=""> Hello
                <a href="#" class="c-theme-link">Drake Hiro</a> (not
                <a href="#" class="c-theme-link">Drake Hiro</a>?
                <a href="#" class="c-theme-link">Sign out</a>).
                <br/></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 c-margin-b-20">
                <h3 class="c-font-uppercase c-font-bold">Drake Hiro</h3>
                <ul class="list-unstyled">
                    <li>25, Lorem Lis Street, Orange C, California, US</li>
                    <li>Phone: 800 123 3456</li>
                    <li>Fax: 800 123 3456</li>
                    <li>Email:
                        <a href="mailto:Lets Home Study@themehats.com" class="c-theme-link">Lets Home Study@themehats
                            .com</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
        <!-- END: PAGE CONTENT -->
    </div>
</div>
@endsection