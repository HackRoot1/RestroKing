@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        @include('layouts.banner', ['title' => 'Profile', 'image' => 'bnr1.jpg'])
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner-2 contact-form bg-white"
                style="background-image:url(images/background/bg5.jpg); background-size:100%;">
                <div class="container">
                    <div class="row">

                        <!-- right part start -->
                        <div class="col-6 m-md-b30 m-lg-b30">
                            <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm bg-white">
                                <h3 class="m-b5">Profile Summary</h3>
                                <ul class="py-4 no-margin">
                                    <li class="icon-bx-wraper left m-b30">
                                        @isset($user->userImage->image)
                                            <img src="{{ asset('/images/user/' . $user->userImage->image) }}" alt="">
                                        @else
                                            <img src="{{ asset('/images/product/item1.jpg') }}" alt="">
                                        @endisset
                                    </li>
                                    <li class="icon-bx-wraper left m-b30">
                                        <div class="icon-bx-xs border-1 text-primary"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="ti-user"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Name:</h6>
                                            <p>{{ $user->firstname . ' ' . $user->lastname }}</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left  m-b30">
                                        <div class="icon-bx-xs border-1 text-primary"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="ti-email"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                            <p>{{ $user->email }}</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left">
                                        <div class="icon-bx-xs border-1 text-primary"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                            <p>{{ $user->contact_no }}</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="m-t20">
                                    <a href="{{ route('update.profile.view') }}" class="btn btn-hover">Update</a>
                                </div>
                            </div>
                        </div>
                        <!-- right part END -->
                        <!-- left part start -->
                        <div class="col-6 m-md-b30 m-lg-b30">
                            <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm bg-white">
                                <h3 class="m-b5">Contact Details</h3>
                                <ul class="py-4 no-margin">
                                    <li class="icon-bx-wraper left m-b30">
                                        <div class="icon-bx-xs border-1 text-primary"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Street:</h6>
                                            <p>XYZ</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left m-b30">
                                        <div class="icon-bx-xs border-1 text-primary"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">City:</h6>
                                            <p>Shahapur</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left m-b30">
                                        <div class="icon-bx-xs border-1 text-primary"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">State:</h6>
                                            <p>Maharashtra</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left m-b30">
                                        <div class="icon-bx-xs border-1 text-primary"> <a href="javascript:void(0);"
                                                class="icon-cell"><i class="ti-location-pin"></i></a></div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Pin:</h6>
                                            <p>400 001</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- left part END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END -->
@endsection
