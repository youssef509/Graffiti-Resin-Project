@extends('backend.partials.layout')

@section('title')
    الصفحة الرئيسية|قسم من نحن
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
                                <h4 class="card-title">من نحن</h4>
                                <p class="card-title-desc">قسم من نحن في الصفحة الرئيسية</p>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link"  href="{{route('admin.homeabout-Ar')}}" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">العربية</span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" href="#english-1" role="tab">
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
                                        <form method="POST" action="{{ $homeAbout ? route('admin.homeabout-updateEn', $homeAbout->id) : route('admin.homeabout-storeEn') }}"  enctype="multipart/form-data">
                                            @csrf
                                            @if($homeAbout)
                                                @method('PUT')
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">النص الاول</label>
                                                            <input name="text1" value="{{ $homeAbout ? $homeAbout->text1 : old('text1') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">العنصر الاول</label>
                                                            <input name="item1" value="{{ $homeAbout ? $homeAbout->item1 : old('item1') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">العنصر الثالث</label>
                                                            <input name="item3" value="{{ $homeAbout ? $homeAbout->item3 : old('item3') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">العنصر الخامس</label>
                                                            <input name="item5" value="{{ $homeAbout ? $homeAbout->item5 : old('item5') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">الصورة الاولي</label>
                                                            <input name="image1" class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">النص الثاني</label>
                                                        <input  name="text2" value="{{ $homeAbout ? $homeAbout->text2 : old('text2') }}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">العنصر الثاني</label>
                                                        <input name="item2" value="{{ $homeAbout ? $homeAbout->item2 : old('item2') }}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">العنصر الرابع</label>
                                                        <input name="item4" value="{{ $homeAbout ? $homeAbout->item4 : old('item4') }}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">الصورة الثانيه</label>
                                                        <input name="image2" class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        {{ $homeAbout ? 'تحديث' : 'إضافة' }}
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
                @if ($homeAbout)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">الصور المستخدمة حاليا</h4>
                                </div>
                                <div class="card-body p-4">
                                    <div class="container text-center">
                                        <div class="row">

                                            <div class="col">
                                                <!-- Simple card -->
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ asset('uploads/homeabout/' . $homeAbout->image1) }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">الصورة الاولي</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <!-- Simple card -->
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ asset('uploads/homeabout/' . $homeAbout->image2) }}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">الصورة الثانية</h4>
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
