@extends('layouts.appguest')
@section('content')
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white shadow-lg rounded10">
                            <div class="p-20 pb-0 content-top-agile">
                                <h2 class="text-primary">Let's Get Started</h2>
                                <p class="mb-0">Sign in to continue to WebkitX.</p>
                            </div>
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <div class="p-40">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3 input-group">
                                            <span class="bg-transparent input-group-text"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent @error('login') is-invalid @enderror" placeholder="{{ __("Username/Email/No Celuller") }}" name="login" :value="old('login')"  autofocus>
                                            @error('login')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 input-group">
                                            <span class="bg-transparent input-group-text"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent @error('password') is-invalid @enderror" placeholder="{{ __("Password") }}" name="password" id="password" autocomplete="current-password">
                                            <span class="input-group-text" id="togglePassword">
                                                <i class="bi bi-eye-slash" id="eyeIcon"></i>
                                            </span>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                                <label for="basic_checkbox_1">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            @if (Route::has('password.request'))
                                            <div class="fog-pwd text-end">
                                                <a href="{{ route('password.request') }}" class="hover-warning"><i class="ion ion-locked"></i> {{ __('Forgot Your Password?') }}</a><br>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="gap-0 d-grid column-gap-4" style="grid-template-columns: 1fr 1fr;">
                                        <div class="p-2 text-start">
                                            <button type="submit" class="mt-10 btn btn-danger ">{{ __('Sign In') }}</button>
                                        </div>
                                        <div class="p-2 text-end">
                                            <a href="{{route('root')}}"  class="mt-10 btn btn-info">{{ __('Beranda') }}</a>
                                        </div>
                                    </div>

                                    </div>
                                </form>
                                @if (Route::has('register'))
                                <div class="text-center">
                                    <p class="mb-0 mt-15">{{ __("Don't have an account?") }} <a href="{{ route('register') }}" class="text-warning ms-5">{{ __('Register') }}</a></p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");
        const eyeIcon = document.querySelector("#eyeIcon");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the eye icon
            eyeIcon.classList.toggle('bi-eye');
            eyeIcon.classList.toggle('bi-eye-slash');
        });
    </script>
@endpush
