<!-- BEGIN: CONTENT/PRICING/PRICING-5 -->
<div class="c-content-box c-size-md">
    <div class="container">
        <div class="row c-margin-t-10 c-margin-b-10">
            <div class="col-md-12">
                <div class="c-content-title-1 c-title-pricing-1">
                    <h3 class="c-font-uppercase c-font-bold">Purchase a Package</h3>
                    {{--<div class="c-row c-try">--}}
                        {{--<button class="btn btn-md c-btn-square c-btn-red c-btn-uppercase c-btn-bold">TRY IT FOR--}}
                            {{--FREE--}}
                        {{--</button>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="c-content-pricing-1 c-opt-1">
                <div class="col-md-2 c-sm-hidden">
                    <div class="c-content">
                        <?php $colIndex = 0; ?>
                        @foreach ($columns as $column => $name)
                            @if ($colIndex == 0)
                                <div class="c-row c-type c-font-20 c-align-left">{{ $name }}</div>
                                <?php $colIndex = 1; ?>
                            @else
                                <div class="c-row c-title c-font-17">{{ $name }}</div>
                            @endif
                        @endforeach
                        <div class="c-row c-empty">&nbsp;</div>
                        <div class="c-row c-empty">&nbsp;</div>
                    </div>
                </div>
                {{--@foreach ($products as $product)--}}
                {{--{{ $product->name }}--}}
                {{--@endforeach--}}
                @foreach ($products as $product)
                    <div class="col-md-5 col-sm-3">
                        <div class="c-content c-column-odd">
                            <?php $colIndex = 0;?>
                            @foreach ($columns as $column => $name)
                                @if ($colIndex == 0)
                                    <div class="c-row c-type c-font-20 c-align-left">{{ $product->$name }}</div>
                                    <?php $colIndex = 1; ?>
                                @else
                                    <div class="c-row c-title c-font-17">
                                        @if ($name == 'price')
                                            <span class="c-dollar c-font-20">$</span>
                                        @endif
                                        {{ $product[$name] }}</div>
                                @endif
                            @endforeach
                        </div>
                        <div class="c-row c-purchase">
                            <a href="{{ route('product.addToCart', ['id'=> $product['id']]) }}"
                               class="btn btn-md c-btn-square c-btn-green c-btn-uppercase c-btn-bold">Add to
                                Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/PRICING/PRICING-5 -->