@extends('backend.partials.layout')

@section('title')
    المشاريع
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
                                <h4 class="card-title">المشاريع</h4>
                                <p class="card-title-desc">اضافة مشروع جديد</p>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link"  href="{{route('admin.projects-Ar')}}" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">العربية</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" href="" role="tab">
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
                                        <form method="POST" action="{{route('admin.projects-store-En')}}"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">اسم المشروع</label>
                                                            <input name="project_name" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">فئة المشروع</label>
                                                            <select name="project_category" class="form-select" aria-label="Default select example">
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->category_id}}">{{$category->ar_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">التاريخ</label>
                                                            <input  name="project_date" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">الوصف الاول</label>
                                                            <input  name="project_description1" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">العميل</label>
                                                        <input  name="project_customer" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">موقع المشروع</label>
                                                        <input  name="project_location" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الوصف الثاني</label>
                                                        <input  name="project_description2" class="form-control" type="text">
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
                                <h4 class="card-title">قائمة المشاريع</h4>
                                <p class="card-title-desc">تعديل محتويات المشاريع النصوص,الصورة </p>
                            </div>
                            <div class="card-body p-4">
                                <div class="container text-center">
                                    <div class="row">
                                        @foreach ($projects as $project)
                                            <div class="col-4">
                                                <!-- Simple card -->
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ $project->image_url }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$project->project_name}}</h4>
                                                        <a href="{{route('admin.projects-edit-En', $project->id)}}" class="btn btn-success waves-effect waves-light">تعديل</a>
                                                        <form method="POST" action="{{route('admin.projects-destroy-En', $project->id)}}" class="delete-form" style="display: inline">
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
