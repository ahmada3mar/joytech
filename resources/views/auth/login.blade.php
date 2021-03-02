@extends('header')

@section('content')
<div class="inner-main common-spacing fluid-container" style="display: flex; justify-content:center; background-image: url('{{asset("/images/camping.jpg")}}'); background-size:cover">
        <!-- form -->
        <form class="twocol-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="top-box">
                        <h3 class="holder height" style="color: white">Login</h3>
                    </div>
                    <div class="form-holder" style="opacity: 0.8">
                        <div class="wrap">
                            <div class="hold">
                                <label for="uname">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="hold">
                                <label for="pass">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="hold">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="hold">
                                <button type="submit" class="btn btn-default">
                                    {{ __('Login') }}
                                </button>
                                
                                
                            </div>
                            <button type="button" class="btn btn-info-sub btn-md btn-google-login no-border"><span class="icon-google-plus"></span> Google</button>
                            <button type="button" class="btn btn-primary btn-md btn-fb-login no-border"><span class="icon-facebook"></span> facebook</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
