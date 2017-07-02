<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                <p>Please fill in below form to create an account with us</p>
                <form method="post" action="/register">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="firstName" class="hide">First Name</label>
                        <input type="text" class="form-control input-lg c-square" id="firstName" name="firstName" placeholder="First Name" value="a"> </div>
                    <div class="form-group">
                        <label for="lastName" class="hide">Last Name</label>
                        <input type="text" class="form-control input-lg c-square" id="lastName" name="lastName" placeholder="Last Name" value="a"> </div>
                    <div class="form-group">
                        <label for="signup-country" class="hide">Country</label>
                        <select class="form-control input-lg c-square" id="country" name="country">
                            <option value="1">India</option>
                            <option value="2">Malaysia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="signup-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email" value="a@a.a"> </div>
                    <div class="form-group">
                        <label for="password" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="password" name ="password" value="a" placeholder="Password" required> </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
                @include('layout.errors')
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/SIGNUP-FORM -->