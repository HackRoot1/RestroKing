@extends('admin.layout.main')

@section('content')
    <!-- Start Container Fluid -->
    <div class="container-fluid">

        <!-- ========== Page Title Start ========== -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="mb-0">Form Basics</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
                        <li class="breadcrumb-item active">Form Basics</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== Page Title End ========== -->

        <div class="row row-cols-lg-1 gx-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add Food Item Catetgory</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('store.food.category') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Food Category</label>
                                    <input type="text" id="category" value="{{ old('category') }}"
                                        name="category" class="form-control" placeholder="Exam Category">
                                    @error('category')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Container Fluid -->
@endsection
