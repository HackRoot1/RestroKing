<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/darkone/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jan 2025 15:51:40 GMT -->

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Sign In | Darkone - Dark Admin & UI Kit Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Darkone: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />
    <meta name="author" content="StackBros" />
    <meta name="keywords"
        content="Darkone, admin dashboard, responsive template, analytics, modern UI, management tools" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#ffffff">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font Family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

</head>

<body class="authentication-bg">

    @include('layouts.popups')
    <div class="account-pages py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="mx-auto mb-4 text-center auth-logo">
                                    <a href="index.html" class="logo-dark">
                                        <img src="{{ asset('assets/images/logo-dark.png') }}" height="32"
                                            alt="logo dark">
                                    </a>

                                    <a href="index.html" class="logo-light">
                                        <img src="{{ asset('assets/images/logo-light.png') }}" height="28"
                                            alt="logo light">
                                    </a>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Welcome Back!</h3>
                                    <p class="text-muted">Sign in to your account to continue</p>
                            </div>
                            <form action="{{ route('admin.login.auth') }}" class="mt-4">
                                @csrf
                                @method('GET')
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Enter your email">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label">Password</label>
                                        <a href="auth-password.html"
                                            class="text-decoration-none small text-muted">Forgot password?</a>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Enter your password">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Remember me</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-dark btn-lg fw-medium" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor Javascript -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App Javascript -->
    <script src="{{ asset('assets/js/app.js') }}"></script>


</body>


<!-- Mirrored from stackbros.in/darkone/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jan 2025 15:51:40 GMT -->

</html>
