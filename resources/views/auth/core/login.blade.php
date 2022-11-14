@extends("auth.layout")
@section("content")
    <div class="user_card">
        <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
            </div>
        </div>
        <div class="d-flex justify-content-center form_container">
            <form method="POST" id="login-form" data-url="{{ route("authAdmin.authenticate") }}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control input_user" value="" placeholder="email">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember_token" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="submit" class="btn login_btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@stop
