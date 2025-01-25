@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Register</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner-2 shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="m-b40 m-md-b20">Create An Account</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-a30 border-1 max-w500 m-auto radius-sm">
                            <div class="tab-content">
                                <form id="login" action="{{ route('register.store') }}" method="POST"
                                    class="tab-pane active">
                                    @csrf
                                    @method('POST')
                                    <h3 class="m-b5">Personal Information</h3>
                                    <p>If you have an account with us, please <a href="{{ route('login.view') }}">log
                                            in</a>.</p>
                                    <div class="form-group">
                                        <label>First Name *</label>
                                        <input name="firstname" value="{{ old('firstname') }}" required=""
                                            class="form-control" placeholder="First Name" type="text">
                                    </div>
                                    @error('firstname')
                                        {{ $message }}
                                    @enderror
                                    <div class="form-group">
                                        <label>Last Name *</label>
                                        <input name="lastname" value="{{ old('lastname') }}" required=""
                                            class="form-control" placeholder="Last Name" type="text">
                                    </div>
                                    @error('lastname')
                                        {{ $message }}
                                    @enderror
                                    <div class="form-group">
                                        <label>E-Mail *</label>
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
                                        <button type="submit" class="btn btnhover">CREATE</button>
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
