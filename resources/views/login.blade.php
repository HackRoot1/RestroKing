@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Login', 'image' => 'bnr3.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="m-t0 m-b40 m-md-b20">Already Registered?</h2>
                    </div>
                </div>
                <div class="row align-content-stretch">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="p-a30 border-1 h100 radius-sm">
                            <div class="tab-content">
                                <h3 class="m-b10">New Customer</h3>
                                <p class="m-b15">By creating an account with our store, you will be able to move through
                                    the checkout process faster, store multiple shipping addresses, view and track your
                                    orders in your account and more.</p>
                                <a class="btn btnhover" href="{{ route('register.view') }}">Create An Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="p-a30 border-1 radius-sm">
                            <div class="tab-content tab-form nav">
                                <form id="login" action="{{ route('login.auth') }}" method="POST"
                                    class="tab-pane active col-12 p-a0 ">
                                    @csrf
                                    @method('POST')
                                    <h3 class="m-b5">Login</h3>
                                    <p>If you have an account with us, please log in.</p>
                                    <div class="form-group">
                                        <label>E-MAIL *</label>
                                        <input name="email" value="{{ old('email') }}" required=""
                                            class="form-control" placeholder="Your Email Id" type="email">
                                    </div>
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input name="password" required="" class="form-control "
                                            placeholder="Type Password" type="password">
                                    </div>
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                    <div class="text-left">
                                        <button type="submit" class="btn btnhover m-r5">Login</button>
                                        <a data-toggle="tab" href="#forgot-password" class="m-l5"><i
                                                class="fa fa-unlock-alt"></i> Forgot Password</a>
                                    </div>
                                </form>
                                <form id="forgot-password" class="tab-pane fade col-12 p-a0">
                                    <h4>Forget Password ?</h4>
                                    <p>We will send you an email to reset your password. </p>
                                    <div class="form-group">
                                        <label>E-Mail *</label>
                                        <input name="dzName" required="" class="form-control"
                                            placeholder="Your Email Id" type="email">
                                    </div>
                                    <div class="text-left">
                                        <a class="btn outline gray" data-toggle="tab" href="#login">Back</a>
                                        <button class="btn btnhover pull-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </div>

    </div>
    <!-- Content END-->
@endsection
