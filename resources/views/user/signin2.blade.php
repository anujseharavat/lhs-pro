@extends('layout.shop.master')
@section ('content')
<div style="padding-top:10px; text-align: center; height:450px;">
    <div class="tab-content" style="display: inline-block; margin: 0 auto; border: 1px solid black;">
        @include('user.partial.signin-input')
    </div>
</div>
@include('user.partial.signup-modal')
<!-- /st-container -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.c-subtitle').hide();
    });

</script>