@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Profile', 'image' => 'bnr1.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner-2 shop-account">
                <!-- Product -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="m-b40 m-md-b20">Update Profile Details</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-a30 border-1 max-w500 m-auto radius-sm">
                                <div class="tab-content">
                                    <form action="{{ route('update.profile') }}" method="POST" class="tab-pane active" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <h3 class="m-b5">Personal Information</h3>
                                        <div class="mb-3">
                                            <label for="user-image" class="form-label">Profile Image</label>
                                            <input type="file" id="user-image" value="{{ old('profileImage') }}"
                                                name="profileImage" class="form-control">
                                            @error('profileImage')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>First Name *</label>
                                            <input name="firstname" value="{{ old('firstname', $user->firstname) }}"
                                                required="" class="form-control" placeholder="First Name" type="text">
                                        </div>
                                        @error('firstname')
                                            {{ $message }}
                                        @enderror
                                        <div class="form-group">
                                            <label>Last Name *</label>
                                            <input name="lastname" value="{{ old('lastname', $user->lastname) }}"
                                                required="" class="form-control" placeholder="Last Name" type="text">
                                        </div>
                                        @error('lastname')
                                            {{ $message }}
                                        @enderror
                                        <div class="form-group">
                                            <label>E-Mail *</label>
                                            <input name="email" value="{{ old('email', $user->email) }}" required=""
                                                class="form-control" placeholder="Your Email Id" type="email">
                                        </div>
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                        <div class="form-group">
                                            <label>Contact No *</label>
                                            <input name="contact_no" value="{{ old('contact_no', $user->contact_no) }}"
                                                required="" class="form-control" placeholder="Your Contact No"
                                                type="contact_no">
                                        </div>
                                        @error('contact_no')
                                            {{ $message }}
                                        @enderror
                                        <div class="text-left">
                                            <button type="submit" class="btn btnhover">Update</button>
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

        <!-- contact area END -->
    </div>
    <!-- Content END -->
@endsection
