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
                <div class="alert alert-success" style="display:none;" id="add_to_cart_msg"></div>
                {{--<div class="" >this is success message</div>--}}
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
                        <?php $index = 0; ?>
                        @foreach($courses as $course)
                            <?php $index += 1; ?>
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
                                        <div class="row">
                                        <div class="col-md-9">
                                        <select class="ddlClass" id="ddlClass_{{$course['id']}}" style="width: 100%" multiple="multiple">
                                        <option selected value="Accord">Physics</option>
                                        <option selected value="Duster">Chemistry</option>
                                        <option value="Esteem">Maths</option>
                                        <option value="Fiero">Enligsh</option>
                                        <option value="Lancer">French</option>
                                        <option value="Phantom">German</option>
                                        </select>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td>${{$course['price']}}</td>
                                <td>
                                    {{--{{$userCourses->contains($course['id']) ? 'y':'n'}}--}}
                                    @if ($userCourses->contains($course['id']))
                                        <button id="btnaddtocart{{$course['id']}}" type="button"
                                                data-course-name="{{$course['name']}}"
                                                data-course-id="{{$course['id']}}"
                                                class="btn c-btn-green disabled">Purchased
                                        </button>
                                    @else
                                        <?php
                                        $cartStatus = 0;
                                        if (Session::has('cart')) {
                                            $cart = Session::get('cart');
//                                        echo $cart->find($course['id']) ? 'dsdsds' : 'asaasas';
                                            $cartStatus = $cart->find($course['id']);
                                        }
                                        ?>

                                        @if ($cartStatus)
                                            <button id="btnaddtocart{{$course['id']}}" type="button"
                                                    {{--onclick="callAddToCart(this)"--}}
                                                    data-course-name="{{$course['name']}}"
                                                    data-course-id="{{$course['id']}}"
                                                    class="btn c-btn-green disabled">Added to Cart
                                            </button>
                                        @else
                                            <button id="btnaddtocart{{$course['id']}}" type="button"
                                                    onclick="callAddToCart(this)"
                                                    data-course-name="{{$course['name']}}"
                                                    data-course-id="{{$course['id']}}"
                                                    class="btn c-btn-green active"> Add to Cart
                                            </button>
                                        @endif
                                    @endif
                                </td>
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
<script type="text/javascript">

    function callAddToCart(self) {
        var course_id = $(self).data('course-id');
        var course_name = $(self).data('course-name');

//        alert($('.ddlClass').val());
//        var aj = $(self).data('test-name');

//        if(!selected_items || selected_items.length < 2){
//            alert('Please select atleast 2 subjects');
//            return false;
//        }
        $.ajax({
            type: "POST",
            url: "{{route('add_to_cart')}}", // This is what I have updated
            data: {'_token': "{{csrf_token()}}", 'course_id': course_id}
        }).success(function (total_cart_items) {
            $('#add_to_cart_msg').show().html(course_name + ' has been added to your cart.');
            $('.cart_icon').show();
            $('.cart_icon_count').html(total_cart_items);
            $('#btnaddtocart' + course_id).show().html('Added to Cart').prop('disabled', true);
        });
    }
</script>
{{--<script type="javascript">--}}
{{--$(document).ready(function() {--}}
{{--alert('anuj');--}}
{{--$('#ddlCars').multiselect();--}}
{{--});--}}
{{--</script>--}}
<!-- Include the plugin's CSS and JS: -->
{{--<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>--}}
{{--<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>--}}


