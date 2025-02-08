@extends('admin.layout.main')

@section('content')
    <!-- Start Container Fluid -->
    <div class="container-fluid">

        <!-- ========== Page Title Start ========== -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="mb-0">Basic Tables</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== Page Title End ========== -->


        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Customer Details
                </h5>
                <p class="card-subtitle">
                    A list of all the users in your account including their name, title, email
                    and role.
                </p>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <div class="container">
                        <div class="row">
                            <div class="mb-3 d-flex w-100">
                                <div class="w-25">Name</div>
                                <div class="w-50">{{ $order->userData->firstname . ' ' . $order->userData->lastname }}
                                </div>
                            </div>
                            <div class="mb-3 d-flex w-100">
                                <div class="w-25">Email</div>
                                <div class="w-50">{{ $order->userData->email }}</div>
                            </div>
                            <div class="mb-3 d-flex w-100">
                                <div class="w-25">Contact No</div>
                                <div class="w-50">{{ $order->userData->contact_no }}</div>
                            </div>
                            <div class="mb-3 d-flex w-100">
                                <div class="w-25">Address</div>
                                <div class="w-50">address</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
