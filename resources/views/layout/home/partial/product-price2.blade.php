<div class="c-content-box c-size-md c-overflow-hide c-bg-grey-1">
    <div class="c-container">
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
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Product List</strong>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-md-2">Product Id</th>
                            <th class="col-md-6">Name</th>
                            <th class="col-md-2">Price ($)</th>
                            <th class="col-md-2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index=0; ?>
                        @foreach($courses as $course)
                            <?php $index +=1; ?>
                            <tr>
                                <td>{{$course['id']}}</td>
                                <td>
                                    {{--<a href="javascript:;" data-toggle="modal" data-target="#product-info">{{ $course['name']}}</a>--}}
                                    <a class="btn btn-primary" data-toggle="collapse"
                                       href="#collapseExample{{$index}}" aria-expanded="false"
                                       aria-controls="collapseExample">
                                        {{$course['name']}}
                                    </a>
                                    <div class="collapse" id="collapseExample{{$index}}">
                                        <div class="row">
                                            <div class="col-md-2"><strong>Description</strong></div>
                                            <div class="col-md-10">{{ $course['desc'] }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"><strong>Addons</strong></div>
                                            <div class="col-md-10">{{ $course['addons'] }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"><strong>Duration</strong></div>
                                            <div class="col-md-10">{{ $course['duration'] }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>${{$course['price']}}</td>
                                <td><a href="{{ route('product.addToCart', ['id'=> $course['id']]) }}"
                                       class="btn btn-md c-btn-square c-btn-green c-btn-uppercase c-btn-bold">Add to
                                        Cart</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

            {{--<div class="panel-footer">--}}
            {{--<div class="clearfix">--}}

            {{--<strong class=" pull-right">Total Price: ${{ $course['price']}}</strong></div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>