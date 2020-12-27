@extends('layout.empty')

@section('title', 'Login')

@section('content')
    <!-- BEGIN login -->
    <div class="login">
        <!-- BEGIN login-content -->
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}" name="login_form">
                @csrf

                <h1 class="text-center">Vrem</h1>
                <br>
                <h3 class="text-center">Sign In</h3>
                <div class="text-muted text-center mb-4">
                    For your protection, please verify your identity.
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" id="email" name="email" inputmode="email" class="form-control @error('email') is-invalid @enderror form-control-lg fs-15px" value="{{ old('email') }}" placeholder="username@address.com" autocomplete="off" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <div class="d-flex">
                        <label>Password</label>
                    </div>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-lg fs-15px" value="" placeholder="Enter your password" autocomplete="off" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label fw-500" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg btn-block fw-500 mb-3">Sign In</button>
                
                <div class="text-center text-muted">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>
            </form>
        </div>
        <!-- END login-content -->
    </div>
    <!-- END login -->
@endsection