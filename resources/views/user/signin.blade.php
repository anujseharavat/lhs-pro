@extends('layout.shop.master')
@section('title')
    LHS Sign in
@endsection
@section ('content')
@section ('content')
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
@section('cart-title')
    User Signin
@endsection
@section('cart-subtitle')
    signin
@endsection
@section('cart-level-1')
    User
@endsection
@section('cart-level-2')
    Signin
@endsection
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            @include('user.partial.signin-modal')
        </div>
    </div>
@endsection