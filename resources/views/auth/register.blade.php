@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <div class="reg-form">
        <div class="wrap-form py-5">

            <div class="mx-auto pb-3" style="background-color: rgb(29, 28, 28); width: 500px;">
                <div class="bg-primary px-3 py-2">
                    <img src="img/images.png" alt="" srcset="" style="width: 20px;">
                    <span class="text-white">Registration</span>
                </div>
                <div class="d-flex justify-content-center py-3">
                    <a href="#" class="d-flex social-item">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="d-flex social-item">
                        <i class="fa fa-google"></i>
                    </a>

                    <a href="#" class="d-flex social-item">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
                <hr class="mx-2 my-0" style="background-color:  #333333;">

                <div class="mx-2 mt-5">
                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        @error('name')
                            <p class="text-danger mb-0" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <input type="text" placeholder="Name" class="reg-input" name="name" value="{{ old('name') }}">

                        @error('email')
                            <p class="text-danger mb-0" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                            @enderror
                        <input type="email" placeholder="Email" class="reg-input" name="email" value="{{ old('email') }}">


                        @error('password')
                            <p class="text-danger mb-0" role="alert">
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


                        @error ('password_confirmation')
                            <p class="text-danger mb-0" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <div class="input-group">
                                <span class="btn-show-pass" id="btn-show-pass-2">
                                    <i class="fa fa-eye"></i>
                                    <!-- <i class="fas fa-eye-slash"></i> -->
                                </span>
                            <input type="password" placeholder="Confirm password" class="reg-input" name="password_confirmation">
                        </div>

                        @if ($errors->has('accept'))
                            <p class="text-danger mb-0" role="alert">
                                <strong>{{ $errors->first('accept') }}</strong>
                            </p>
                        @endif
                        <div class="form-check">
                            <label class="form-check-label" for="check2">
                                <input type="checkbox" class="form-check-input" id="check2" name="accept">
                                <span class="text-secondary">I accept</span>
                                <span><a href="#">Terms of use</a></span>
                                <span class="text-secondary">and</span>
                                <span><a href="#">Privacy policy</a></span>
                            </label>
                        </div>

                        @error ('g-recaptcha-response')
                        <p class="text-danger mb-0" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror
                        <div class="mt-3" id="google-recaptcha"> </div>

                        <div class="mt-3">
                            <input class="btn btn-sm btn-submit px-3" type="submit" value="REGISTER">
                            <a class="float-right" href="#">Already signed up ?</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
