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
                        <h5 class="card-title mb-0">Add Food Item</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('store.food') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div>

                                <div class="mb-3">
                                    <label for="foodName" class="form-label">Food Name</label>
                                    <input type="text" id="foodName" value="{{ old('foodName') }}" name="foodName"
                                        class="form-control" placeholder="Food Name">
                                    @error('foodName')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="foodDescription" class="form-label">Food Description</label>
                                    <input type="text" id="foodDescription" value="{{ old('foodDescription') }}"
                                        name="foodDescription" class="form-control" placeholder="Food Name">
                                    @error('foodDescription')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category-select" class="form-label">Food Category</label>
                                    <select class="form-select" name="foodCategory" id="category-select">
                                        @foreach ($foodCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->food_category }}</option>
                                        @endforeach
                                    </select>
                                    @error('foodCategory')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="foodIngredients" class="form-label">Food Ingredient</label>
                                    <input type="text" id="foodIngredients" value="{{ old('foodIngredients') }}"
                                        name="foodIngredients" class="form-control" placeholder="Food Ingredient">
                                    @error('foodIngredients')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" id="price" value="{{ old('price') }}"
                                        name="price" class="form-control" placeholder="Food Price">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="discount" class="form-label">Discount</label>
                                    <input type="number" id="discount" value="{{ old('discount') }}"
                                        name="discount" class="form-control" placeholder="Food Discount">
                                    @error('discount')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="badge-select" class="form-label">Food Badge</label>
                                    <select class="form-select" name="badge" id="badge-select">
                                        <option value="{{ $category->id }}">{{ $category->food_category }}</option>
                                    </select>
                                    @error('badge')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="food-image" class="form-label">Upload Sub Category Image</label>
                                    <input type="file" id="food-image" value="{{ old('foodImage') }}"
                                        name="foodImage" class="form-control">
                                    @error('foodImage')
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
