@extends('layouts.master')

@section('title')
    Reset Password
@endsection

@section('content')
    <div class="reg-form">
        <div class="wrap-form py-5">

            <div class="mx-auto pb-3" style="background-color: rgb(29, 28, 28); width: 500px;">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="bg-primary px-3 py-2">
                    <img src="img/images.png" alt="" srcset="" style="width: 20px;">
                    <span class="text-white">{{ __('Reset Password') }}</span>
                </div>

                <div class="mx-2 mt-5">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        @error('email')
                        <p class="text-danger mb-0 invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror
                        <input type="email" placeholder="Email" class="reg-input" name="email" value="{{ old('email') }}">


                        <div class="mt-3">
                            <input class="btn btn-sm btn-submit px-3" type="submit" value=" {{ __('Send Password Reset Link') }}">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
