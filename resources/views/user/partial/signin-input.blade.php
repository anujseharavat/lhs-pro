<div class="modal-body">
    <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
    <p>Let's make today a great day!</p>
    @include('layout.errors')
    <form method="post" action="/user/login">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email" class="hide">Email</label>
            <input type="email" class="form-control input-lg c-square" id="email" name="email"
                   placeholder="Email"></div>
        <div class="form-group">
            <label for="login-password" class="hide">Password</label>
            <input type="password" class="form-control input-lg c-square" id="password" name="password"
                   placeholder="Password"></div>
        <div class="form-group">
            <div class="c-checkbox">
                <input type="checkbox" id="login-rememberme" class="c-check">
                <label for="login-rememberme" class="c-font-thin c-font-17">
                    <span></span>
                    <span class="check"></span>
                    <span class="box"></span> Remember Me </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit"
                    class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login
            </button>
            <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form"
               data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
        </div>
        <div class="clearfix">
            {{--<div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">--}}
            {{--<span>or signup with</span>--}}
            {{--</div>--}}
            {{--<ul class="c-content-list-adjusted">--}}
            {{--<li>--}}
            {{--<a class="btn btn-block c-btn-square btn-social btn-twitter">--}}
            {{--<i class="fa fa-twitter"></i> Twitter </a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a class="btn btn-block c-btn-square btn-social btn-facebook">--}}
            {{--<i class="fa fa-facebook"></i> Facebook </a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a class="btn btn-block c-btn-square btn-social btn-google">--}}
            {{--<i class="fa fa-google"></i> Google </a>--}}
            {{--</li>--}}
            {{--</ul>--}}
        </div>
    </form>
</div>
<div class="modal-footer c-no-border">
    <span class="c-text-account">Don't Have An Account Yet ?</span>
    <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal"
       class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
</div>
