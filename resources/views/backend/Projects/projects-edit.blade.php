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
                                        <form method="POST" action="{{route('admin.projects-update-Ar',$project->id )}}"  enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">اسم المشروع</label>
                                                            <input name="project_name" value="{{$project->project_name}}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">فئة المشروع</label>
                                                            <select name="project_category" class="form-select" aria-label="Default select example">
                                                                @foreach($categories as $category)
                                                                    <option value="{{ $category->category_id }}" @selected($project->project_category == $category->category_id)>
                                                                        {{ $category->ar_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">التاريخ</label>
                                                            <input  name="project_date" value="{{$project->project_date}}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">الوصف الاول</label>
                                                            <input  name="project_description1" value="{{$project->project_description1}}" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">العميل</label>
                                                        <input  name="project_customer" value="{{$project->project_customer}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">موقع المشروع</label>
                                                        <input  name="project_location" value="{{$project->project_location}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الوصف الثاني</label>
                                                        <input  name="project_description2" value="{{$project->project_description2}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">الصورة</label>
                                                        <input name="image" class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">تحديث</button>
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
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">صور المشروع</h4>
                            </div>
                            <div class="card-body p-4">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-4">
                                            <!-- Simple card -->
                                            <div class="card">
                                                <h4 class="card-title"> الصورة الاساسية</h4>
                                                <div class="card-body">
                                                    <img class="card-img-top img-fluid" src="{{ $project->image_url }}" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($ProjectImages as $ProjectImage)
                                            <div class="col-4">
                                                <!-- Simple card -->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="card-img-top img-fluid" src="{{ $ProjectImage->image_url }}" alt="Card image cap">
                                                        <form method="POST" action="{{route('admin.project-images-destroy', $ProjectImage->id)}}" class="delete-form" style="display: inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger waves-effect waves-light sa-warning">حذف</button>
                                                        </form>
                                                    </div>
                                                </div>
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
