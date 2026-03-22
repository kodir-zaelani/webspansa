@extends('layouts.appguest')
@section('content')
   <div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Get started with Us</h2>
								<p class="mb-0">Register a new membership</p>
							</div>
							<div class="p-40">
								<form action="{{ route('register') }}" method="POST">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" name="name" value="{{old('name')}}" class="form-control ps-15 bg-transparent" placeholder="{{__('Name')}}">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="email" name="email" value="{{old('email')}}" class="form-control ps-15 bg-transparent" placeholder="{{__('Email')}}">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password" value="{{old('password')}}" id="password" class="form-control ps-15 bg-transparent" placeholder="{{__('Password')}}">
                                            <span class="input-group-text" id="togglePassword">
                                                <i class="bi bi-eye-slash" id="eyeIcon"></i>
                                            </span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password_confirmation" id="password_confirmation" class="form-control ps-15 bg-transparent" placeholder="{{__('Confirm Password')}}">
                                            <span class="input-group-text" id="toggleconfirmationPassword">
                                                <i class="bi bi-eye-slash" id="eyeIconconfirmation"></i>
                                            </span>
										</div>
									</div>
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">{{ __('Register') }}</button>
										</div>
									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="{{ route('login') }}" class="text-danger ms-5">{{ __('Sign In') }}</a></p>
								</div>
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

        const toggleConfirmationPassword = document.querySelector("#toggleconfirmationPassword");
        const confirmationPassword = document.querySelector("#password_confirmation");
        const eyeIconConfirmation = document.querySelector("#eyeIconconfirmation");

        toggleConfirmationPassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = confirmationPassword.getAttribute("type") === "password" ? "text" : "password";
            confirmationPassword.setAttribute("type", type);

            // toggle the eye icon
            eyeIconConfirmation.classList.toggle('bi-eye');
            eyeIconConfirmation.classList.toggle('bi-eye-slash');
        });
    </script>
@endpush
