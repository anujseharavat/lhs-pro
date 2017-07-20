<div class="modal-body">
    <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
    <p>Please fill in below form to create an account with us</p>
    @include('layout.errors')
    <form method="post" action="/user/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="first_name" class="hide">First Name</label>
            <input type="text" class="form-control input-lg c-square" id="first_name" name="first_name"
                   placeholder="First Name" value="a" required></div>
        <div class="form-group">
            <label for="last_name" class="hide">Last Name</label>
            <input type="text" class="form-control input-lg c-square" id="last_name" name="last_Name"
                   placeholder="Last Name" value="a" required></div>
        <div class="form-group">
            <label for="country" class="hide">Country</label>
            <select class="form-control input-lg c-square" id="country" name="country" required>
                <option value="1">India</option>
                <option value="2">Malaysia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email" class="hide">Email</label>
            <input type="email" class="form-control input-lg c-square" id="email" name="email"
                   placeholder="Email" value="a@a.a" required></div>
        <div class="form-group">
            <label for="password" class="hide">Password</label>
            <input type="password" class="form-control input-lg c-square" id="password" name="password"
                   value="a" placeholder="Password" required></div>
        <div class="form-group">
            <button type="submit"
                    class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
                Signup
            </button>
            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form"
               data-dismiss="modal">Back To Login</a>
        </div>
    </form>
</div>