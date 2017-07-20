@extends('layout.shop.master')
@section('title')
    LHS Checkout
@endsection

@section ('content')
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    @section('cart-title')
        Shopping Cart
    @endsection
    @section('cart-subtitle')
        Checkout
    @endsection
    @section('cart-level-1')
        Shop
    @endsection
    @section('cart-level-2')
        Checkout
    @endsection
    <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: ${{ $total  }}</h4>
            <form action="{{route('checkout')}}" method="post" id="checkout-form">
                @if (Session::has('error'))
                    <div id="charge-error" class="alert alert-danger {{ !Session::has('error') }}  ? 'hidden': '' ">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <lablel for="name">Name</lablel>
                            <input type="text" id="name" name="name" class="form-control" required value="anuj">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <lablel for="address">Address</lablel>
                            <input type="text" id="address" name="address" class="form-control" required value="address anuj">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <lablel for="card-name">Card Name</lablel>
                            <input type="text" id="card-name" class="form-control" required value="anuj card name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <lablel for="card-number">Card Number</lablel>
                            <input type="text" id="card-number" class="form-control" required value="0123 1234 2345 3456">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <lablel for="card-expiry-month">Expiration Month</lablel>
                                    <input type="text" id="card-expiry-month" class="form-control" required value="08">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <lablel for="card-expiry-year">Expiration Year</lablel>
                                    <input type="text" id="card-expiry-year" class="form-control" required value="21">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <lablel for="card-cvc">CVC</lablel>
                            <input type="text" id="card-cvc" class="form-control" required value="066">
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
        </div>
    </div>
@endsection
