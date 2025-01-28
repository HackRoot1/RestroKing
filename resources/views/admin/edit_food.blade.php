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
                        <h5 class="card-title mb-0">Add Exam Sub-Category</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('update.subcategory') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Exam Category</label>
                                    <select class="form-select" name="examCategory" id="example-select">
                                        <option > -- Select Category --</option>
                                        @foreach ($category as $category)
                                            @if ($category->category === $selectedCategory->categories->category)
                                                <option value="{{ $category->id }}" selected>{{ $category->category }}
                                                </option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('examCategory')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exam-category" class="form-label">Exam Sub-Category</label>
                                    <input type="text" id="exam-category" value="{{ old('examCategory', $selectedCategory->sub_category) }}"
                                        name="examSubCategory" class="form-control" placeholder="Exam Category">
                                    @error('examSubCategory')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="no_of_exams" class="form-label">No of Exams</label>
                                    <input type="number" id="no_of_exams" value="{{ old('no_of_exams', $selectedCategory->no_of_exams) }}"
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
                                    <input type="hidden" name="id" value="{{ $selectedCategory->id }}">
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
