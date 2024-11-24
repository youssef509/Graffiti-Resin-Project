@extends('backend.partials.layout')

@section('title')
    طلبات  موزع معتمد
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
                                <h4 class="card-title">طلبات الاشراف والتدريب</h4>
                                <p class="card-title-desc">تعديل طلب</p>
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
                                <div class="tab-content p-3 text">
                                    <div class="tab-pane active" id="arabic-1" role="tabpanel">
                                        <form method="POST" action="{{route('AuthorizedDistributor-update', $DataFromDB->id)}}"  enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الاسم</label>
                                                        <input name="name" value="{{$DataFromDB->name}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">المدينة</label>
                                                        <input name="city" value="{{$DataFromDB->city}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الشارع</label>
                                                        <input name="street" value="{{$DataFromDB->street}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">مساحة نقطة البيع</label>
                                                        <input name="shop_size" value="{{$DataFromDB->shop_size}}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">رقم الهاتف</label>
                                                        <input name="phone"  value="{{$DataFromDB->phone}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">اسم نقطة البيع</label>
                                                        <input name="shop_name" value="{{$DataFromDB->shop_name}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">نوع نشاط نقطة البيع</label>
                                                        <input name="shop_type" value="{{$DataFromDB->shop_type}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">المنتجات التي يتم بيعها في نقطة البيع</label>
                                                        <input name="shop_products" value="{{$DataFromDB->shop_products}}" class="form-control" type="text">
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
            </div>
        </div>
    </div>

@endsection

@section('js')
   

    <!-- Sweet alert init js-->
    <script src="{{ asset('backend/assets/js/pages/custom-alerts.js')}}"></script>
    {{-- <script src="{{ asset('backend/assets/js/pages/alert.init.js')}}"></script> --}}
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

@endsection
