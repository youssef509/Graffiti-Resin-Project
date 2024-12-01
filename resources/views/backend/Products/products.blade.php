@extends('backend.partials.layout')

@section('title')
    المنتجات
@endsection

@section('css')
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection

@section('page-content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">المنتجات</h4>
                                <p class="card-title-desc">اضافة منتج جديد</p>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#arabic-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">العربية</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" href="{{route('admin.products-En')}}" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">English</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="card-body p-4">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="arabic-1" role="tabpanel">
                                        <form method="POST" action="{{route('admin.products-store-Ar')}}"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">اسم المنتج</label>
                                                            <input name="product_name" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">ملف TDS</label>
                                                            <input name="product_pdf" class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">وصف المنتج</label>
                                                        <input  name="product_description" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">الصورة</label>
                                                        <input name="image" class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">إضافة</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if(session('success-update'))
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            Swal.fire({
                                                title: "نجاح!",
                                                text: "{{ session('success-update') }}",
                                                icon: "success",
                                                confirmButtonText: "حسناً"
                                            });
                                        });
                                    </script>
                                @endif
                                @if(session('success-create'))
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            Swal.fire({
                                                title: "نجاح!",
                                                text: "{{ session('success-create') }}",
                                                icon: "success",
                                                confirmButtonText: "حسناً"
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">قائمة المنتجات</h4>
                                <p class="card-title-desc">تعديل محتويات المنتجات النصوص,زر,الصورة </p>
                            </div>
                            <div class="card-body p-4">
                                <div class="container text-center">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            <div class="col-4">
                                                <!-- Simple card -->
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ $product->image_url }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$product->product_name}}</h4>
                                                        <a href="{{route('admin.products-edit-En', $product->id)}}" class="btn btn-success waves-effect waves-light">تعديل</a>
                                                        <form method="POST" action="{{route('admin.products-destroy-En', $product->id)}}" class="delete-form" style="display: inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger waves-effect waves-light sa-warning">حذف</button>
                                                        </form>
                                                    </div>
                                                    @if(session('success'))
                                                        <script>
                                                            document.addEventListener("DOMContentLoaded", function() {
                                                                Swal.fire({
                                                                    title: "نجاح!",
                                                                    text: "{{ session('success') }}",
                                                                    icon: "success",
                                                                    confirmButtonText: "حسناً"
                                                                });
                                                            });
                                                        </script>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @endsection
        @section('js')
            <script src="{{ asset('backend/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
            <!-- Sweet Alerts js -->
            <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
            <!-- Sweet alert init js-->
            <script src="{{ asset('backend/assets/js/pages/custom-alerts.js')}}"></script>
            <script src="{{ asset('backend/assets/js/pages/alert.init.js')}}"></script>
@endsection
