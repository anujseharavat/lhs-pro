@extends('layout.shop.master')
@section('title')
    LHS Shopping Cart
@endsection

<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
@section('cart-title')
    Shopping Cart
@endsection
@section('cart-subtitle')
    Shopping cart item list
@endsection
@section('cart-level-1')
    Shop
@endsection
@section('cart-level-2')
    Shopping Cart
@endsection
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
@section ('content')
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
    <div class="c-content-box c-size-lg">
        <div class="container">
            <div class="c-shop-cart-page-1">
                @if (Session::has('cart'))
                    <div class="row c-cart-table-title">
                        <div class="col-md-2 c-cart-image">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">S.No</h3>
                        </div>
                        <div class="col-md-4 c-cart-desc">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Description</h3>
                        </div>
                        <div class="col-md-1 c-cart-ref">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Product ID</h3>
                        </div>
                        <div class="col-md-1 c-cart-qty">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Qty</h3>
                        </div>
                        <div class="col-md-2 c-cart-price">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Unit Price</h3>
                        </div>
                        <div class="col-md-1 c-cart-total">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total</h3>
                        </div>
                        {{--<div class="col-md-1 c-cart-remove"></div>--}}
                    </div>
                    <!-- BEGIN: SHOPPING CART ITEM ROW -->
                    <?php $index = 1 ?>
                    @foreach($courses as $course)
                        <div class="row c-cart-table-row">
                            <div class="col-md-2 c-cart-image">
                                <p>{{$index}}</p>
                            </div>
                            <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                                <h3>
                                    <a href="shop-product-details-2.html"
                                       class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $course['item']->name }}</a>
                                </h3>
                                <p>{{ $course['item']->description }}</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p>{{ $course['item']->id }}</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
                                <p>{{ $course['qty'] }}</p>
                            </div>
                            {{--<div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">--}}
                            {{--<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>--}}
                            {{--<div class="c-input-group c-spinner">--}}
                            {{--<input type="text" class="form-control c-item-1" value="{{ $course['qty'] }}">--}}
                            {{--<div class="c-input-group-btn-vertical">--}}
                            {{--<button class="btn btn-default" type="button" data_input="c-item-1">--}}
                            {{--<i class="fa fa-caret-up"></i>--}}
                            {{--</button>--}}
                            {{--<button class="btn btn-default" type="button" data_input="c-item-1">--}}
                            {{--<i class="fa fa-caret-down"></i>--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-price c-font-bold">$ {{ $course['item']->price }}</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-price c-font-bold">$ {{ $course['price'] }}</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                                <a href="{{ URL::to('shop/remove-from-cart/'.$course['item']->id) }}"
                                   class="c-cart-price c-font-bold">X</a>
                            </div>
                        </div>
                        <?php $index++ ?>
                    @endforeach
                    <div class="row">
                        <div class="c-cart-subtotal-row">
                            <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Grand
                                    Total</h3>
                            </div>
                            <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                <h3 class="c-font-bold c-font-16">{{ $totalPrice }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- END: SUBTOTAL ITEM ROW -->
                @else
                    <div class="row c-cart-table-title">
                        <div class="row c-cart-table-title">No Item</div>
                    </div>
                @endif
                <div class="c-cart-buttons">
                    <a href="/"
                       class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Continue
                        Shopping</a>
                    @if (Session::has('cart'))
                        <a href="{{ URL::to('shop/checkout') }}"
                           class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/SHOPS/SHOP-CART-1 -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->

    <!-- END: CONTENT/SHOPS/SHOP-2-2 -->
    <!-- BEGIN: CONTENT/STEPS/STEPS-3 -->
    <div class="c-content-box c-size-md c-theme-bg">
        <div class="container">
            <div class="c-content-step-3 c-font-white">
                <div class="row">
                    <div class="col-md-4 c-steps-3-block">
                        <i class="fa fa-truck"></i>
                        <div class="c-steps-3-title">
                            <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Get Your Licence</h2>
                            <em>activate with your licence key</em>
                        </div>
                        <span>&nbsp;</span>
                    </div>
                    <div class="col-md-4 c-steps-3-block">
                        <i class="fa fa-gift"></i>
                        <div class="c-steps-3-title">
                            <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Scholorships</h2>
                            <em>Amazing opprtunities for Internationl Studies</em>
                        </div>
                        <span>&nbsp;</span>
                    </div>
                    <div class="col-md-4 c-steps-3-block">
                        <i class="fa fa-phone"></i>
                        <div class="c-steps-3-title">
                            <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">477 505 8877</h2>
                            <em>24/7 customer care available</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/STEPS/STEPS-3 -->
    <!-- END: PAGE CONTENT -->

@endsection