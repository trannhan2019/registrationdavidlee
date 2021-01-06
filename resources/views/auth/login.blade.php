@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    <div class="reg-form">
        <div class="wrap-form py-5">

            <div class="mx-auto pb-3" style="background-color: rgb(29, 28, 28); width: 500px;">
                <div class="bg-primary px-3 py-2">
                    <img src="img/images.png" alt="" srcset="" style="width: 20px;">
                    <span class="text-white">Login</span>
                </div>

                <div class="mx-2 mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @error('email')
                            <p class="text-danger mb-0 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <input type="email" placeholder="Email" class="reg-input" name="email" value="{{ old('email') }}">


                        @error('password')
                            <p class="text-danger mb-0 invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <div class="input-group">
                                <span class="btn-show-pass" id="btn-show-pass-1">
                                    <i class="fa fa-eye"></i>
                                    <!-- <i class="fas fa-eye-slash"></i> -->
                                </span>
                            <input type="password" placeholder="Password" class="reg-input" name="password">
                        </div>


                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-secondary" for="check2">{{ __('Remember Me') }}</label>
                        </div>


                        <div class="mt-3">
                            <input class="btn btn-sm btn-submit px-3" type="submit" value=" {{ __('Login') }}">
                            @if(Route::has('password.request'))
                                <a class="float-right" href="{{route('password.request')}}">{{ __('Forgot Your Password?') }}</a>
                            @endif
                        </div>

                        <p><a class="float-right" href="{{route('register')}}">Already signed up ?</a> </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
