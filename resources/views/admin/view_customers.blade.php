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
                    Customers
                </h5>
                <p class="card-subtitle">
                    A list of all the users in your account including their name, title, email
                    and role.
                </p>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-centered">
                        <thead class="table-light">
                            <tr>

                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->firstname . ' ' . $customer->lastname }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->contact_no }}</td>
                                    <td>address</td>
                                    <td>
                                        <a href="{{ route('view.customer.details', $customer->id) }}"
                                            class="d-inline btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
