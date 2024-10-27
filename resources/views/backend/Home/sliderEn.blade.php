@extends('backend.partials.layout')

@section('title')
    الاسليدر
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
                                <h4 class="card-title">الاسليدر</h4>
                                <p class="card-title-desc">اضافة اسليدر</p>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link"  href="{{route('admin.slider-Ar')}}" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">العربية</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#english-1" role="tab">
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
                                        <div class="tab-pane active" id="english-1" role="tabpanel">
                                            <form method="POST" action="{{ $slider ? route('admin.slider-updateEn', $slider->id) : route('admin.slider-storeEn') }}"  enctype="multipart/form-data">
                                                @csrf
                                                @if($slider)
                                                    @method('PUT')
                                                @endif
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <div class="mb-3">
                                                                <label for="example-text-input" class="form-label">النص الاول</label>
                                                                <input name="text1" value="{{ $slider ? $slider->text1 : old('text1') }}" class="form-control" type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="example-text-input" class="form-label">نص الزر</label>
                                                                <input name="button_text" value="{{ $slider ? $slider->button_text : old('button_text') }}" class="form-control" type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">الصورة</label>
                                                                <input name="image" class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">النص الثاني</label>
                                                            <input  name="text2" value="{{ $slider ? $slider->text2 : old('text2') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رابط الزر</label>
                                                            <input name="button_url" value="{{ $slider ? $slider->button_url : old('button_url') }}" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            {{ $slider ? 'تحديث' : 'إضافة' }}
                                                        </button>
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
                @if ($slider)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">الصورة المستخدمة حاليا</h4>
                                </div>
                                <div class="card-body p-4">
                                    <div class="container text-center">
                                        <div class="row">

                                            <div class="col">
                                                <!-- Simple card -->
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ asset('uploads/slider/' . $slider->image) }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">الصورة المستخدمة</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
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
