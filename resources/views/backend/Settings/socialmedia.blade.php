@extends('backend.partials.layout')

@section('title')
   روابط السوشيال ميديا
@endsection

@section('css')
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection

@section('page-content')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> السوشيال ميديا</h4>
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
                                <form method="POST" action="{{ $Data ? route('settings-socialmedia-update', $Data->id) : route('settings-socialmedia-store') }}" enctype="multipart/form-data">
                                    @csrf
                                    @if($Data)
                                        @method('PUT')
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Facebook</label>
                                                    <input  name="facebook" value="{{ $Data ? $Data->facebook : old('facebook') }}" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Tiktok</label>
                                                    <input  name="tiktok" value="{{ $Data ? $Data->tiktok : old('tiktok') }}" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Instagram</label>
                                                    <input  name="instagram" value="{{ $Data ? $Data->instagram : old('instagram') }}" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Linkedin</label>
                                                    <input  name="linkedin" value="{{ $Data ? $Data->linkedin : old('linkedin') }}" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                {{ $Data ? 'تحديث' : 'إضافة' }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
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