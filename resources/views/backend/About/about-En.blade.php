@extends('backend.partials.layout')

@section('title')
    صفحة من نحن
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
                                <h4 class="card-title"> صفحة من نحن</h4>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" href="{{route('admin.about-us-Ar')}}" role="tab">
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
                                        <form method="POST" action="{{ $Aboutus ? route('admin.about-us-update-En', $Aboutus->id) : route('admin.about-us-store-En') }}"  enctype="multipart/form-data">
                                            @csrf
                                            @if($Aboutus)
                                                @method('PUT')
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">مهمتنا</label>
                                                            <input name="our_mission" value="{{ $Aboutus ? $Aboutus->our_mission : old('our_mission') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">قيمنا</label>
                                                            <input name="our_values" value="{{ $Aboutus ? $Aboutus->our_values : old('our_values') }}" class="form-control" type="text">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">رؤيتنا</label>
                                                        <input  name="our_vision" value="{{ $Aboutus ? $Aboutus->our_vision : old('our_vision') }}" class="form-control" type="text">
                                                    </div>

                                                </div>
                                                <div class="card-body text-center">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        {{ $Aboutus ? 'تحديث' : 'إضافة' }}
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
