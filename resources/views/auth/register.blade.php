@extends('header')

@section('content')
<div class="inner-main common-spacing fluid-container" style="display: flex; justify-content:center; background-image: url('{{asset("/images/scubadiving.jpg")}}'); background-size:cover">
    <!-- form -->
    <form class="twocol-form"  method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="top-box">
                    <h3 class="holder height" style="color: #2d2e26">Register</h3>
                </div>
                <div class="form-holder" style="opacity: 0.85">
                    <div class="wrap">
                        <div class="hold">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="hold">
                            <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="hold">
                            <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="hold">
                            <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="btn-hold">
                            <button type="submit" class="btn btn-default">{{ __('Register') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
