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
                        <form action="{{ route('store.subcategory') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Exam Category</label>
                                    <select class="form-select" name="examCategory" id="example-select">
                                        @foreach ($exams as $category)
                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                    @error('examCategory')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exam-category" class="form-label">Exam Sub-Category</label>
                                    <input type="text" id="exam-category" value="{{ old('examCategory') }}"
                                        name="examSubCategory" class="form-control" placeholder="Exam Category">
                                    @error('examSubCategory')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="no_of_exams" class="form-label">No of Exams</label>
                                    <input type="number" id="no_of_exams" value="{{ old('no_of_exams') }}"
                                        name="no_of_exams" class="form-control" placeholder="No of Exams">
                                    @error('no_of_exams')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sub-category-image" class="form-label">Upload Sub Category Image</label>
                                    <input type="file" id="sub-category-image" value="{{ old('subCategoryImage') }}"
                                        name="subCategoryImage" class="form-control">
                                    @error('subCategoryImage')
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
