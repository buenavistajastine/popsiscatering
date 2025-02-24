<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/finalcroplogo1.png">
    <title>Popsi's | Login</title>
	
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			<div class="container-fluid px-0">
				<div class="row">
				
					<!-- Login logo -->
					<div class="col-lg-6 login-wrap">
						<div class="login-sec">
							<div class="log-img">
								<img class="img-fluid" src="assets/img/popsislogo.png" alt="Logo">
							</div>
						</div>
					</div>
					<!-- /Login logo -->
					
					<!-- Login Content -->
					<div class="col-lg-6 login-wrap-bg">
						<div class="login-wrapper">
							<div class="loginbox">								
								<div class="login-right">
									<div class="login-right-wrap">
										{{-- <div class="account-logo">
											<a href="index.html"><img src="assets/img/login-logo.png" alt=""></a>
										</div> --}}
										<h2>Login</h2>
										<!-- Form -->
										<form method="POST" action="{{ route('login') }}">
                                            @csrf

											<div class="form-group local-forms">
												<label >Email <span class="login-danger">*</span></label>
												<input class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="email">
                                                
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                               
											</div>
											<div class="form-group local-forms">
												<label >Password <span class="login-danger">*</span></label>
												<input class="form-control pass-input" type="password"
                                                name="password"
                                                required autocomplete="current-password">
												<span class="profile-views feather-eye-off toggle-password"></span>
                                                <div class="invalid-feedback">
                                                    @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
											</div>
											<div class="forgotpass">
												<div class="remember-me">
													<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
													<input type="checkbox" name="radio">
													<span class="checkmark"></span>
													</label>
												</div>
												<a href="forgot-password.html">Forgot Password?</a>
											</div>
											<div class="input-block login-btn">
												<button class="btn btn-primary btn-block" type="submit">Login</button>
											</div>
										</form>
										<!-- /Form -->
										  
										{{-- <div class="next-sign">
											<p class="account-subtitle">Need an account?  <a href="register.html">Sign Up</a></p>
											
											<!-- Social Login -->
											<div class="social-login">
												<a href="javascript:;" ><img src="assets/img/icons/login-icon-01.svg" alt=""></a>
												<a href="javascript:;" ><img src="assets/img/icons/login-icon-02.svg" alt=""></a>
												<a href="javascript:;" ><img src="assets/img/icons/login-icon-03.svg" alt=""></a>
											</div>
											<!-- /Social Login -->
											
										</div> --}}
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- /Login Content -->
					
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
		
        <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
		
    </body>
</html>