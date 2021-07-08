<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Invoice Builder</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('assets/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('assets/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark bg-indigo navbar-static">
    <div class="navbar-brand ml-2 ml-lg-0">
        <a href="index.html" class="d-inline-block">
            <img src="{{asset('assets/global_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-flex justify-content-end align-items-center ml-auto">
        <ul class="navbar-nav flex-row">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-lifebuoy"></i>
                    <span class="d-none d-lg-inline-block ml-2">Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-user-plus"></i>
                    <span class="d-none d-lg-inline-block ml-2">Register</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-user-lock"></i>
                    <span class="d-none d-lg-inline-block ml-2">Login</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->

                <div class="card mb-0">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login_user') }}">
                                @csrf
                            <div class="text-center mb-3">
                                <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Login to your account</h5>
                                <span class="d-block text-muted">Your credentials</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group d-flex align-items-center">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" checked>
                                    <span class="custom-control-label">Remember</span>
                                </label>

                                <a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </form>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Don't have an account?</span>
                            </div>

                            <div class="form-group">
                                <a href="#" class="btn btn-light btn-block">Sign up</a>
                            </div>

                            <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                        </div>
                    </div>

                <!-- /login form -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="https://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
						</span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                        <li class="nav-item"><a href="https://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                        <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
