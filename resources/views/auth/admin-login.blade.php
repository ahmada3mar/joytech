@extends('header')

@section('content')
<div class="inner-main common-spacing fluid-container" style="display: flex; justify-content:center; background-image: url('{{asset("/images/adminbg.jpg")}}'); background-size:cover">
    <!-- form -->
    <form class="twocol-form" role="form" method="POST" action="{{ route('admin.login.submit') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="top-box">
                    <h3 class="holder height" style="color: white">ADMIN Login</h3>
                </div>
                <div class="form-holder" style="opacity: 0.8">
                    <div class="wrap">
                        <div class="hold {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-6 control-label">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="hold {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-6 control-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="hold">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="hold">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
