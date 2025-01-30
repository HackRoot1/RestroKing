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
                    Exam Sub Categories
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
                                <th scope="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault5">
                                    </div>
                                </th>

                                <th scope="col">Thumbnail Image</th>
                                <th scope="col">Food Name</th>
                                <th scope="col">Food Description</th>
                                <th scope="col">Food Price</th>
                                <th scope="col">Food Category</th>
                                <th scope="col">Food Ingredient</th>
                                <th scope="col">Food Discount</th>
                                <th scope="col">Food Badge</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foods as $food)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td>
                                        <img src=""
                                            alt="" class="avatar-lg rounded-3">
                                    </td>
                                    <td>{{ $food->name }}</td>
                                    <td>{{ $food->description }}</td>
                                    <td>{{ $food->price }}</td>
                                    <td>{{ $food->category }}</td>
                                    <td>{{ $food->ingredients }}</td>
                                    <td>{{ $food->discount }}</td>
                                    <td>{{ $food->badge }}</td>

                                    <td>
                                        <a href="{{ route('update.food.view', $food->id) }}"
                                            class="d-inline btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('delete.food') }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $food->id }}">
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
