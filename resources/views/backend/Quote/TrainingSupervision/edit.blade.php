@extends('backend.partials.layout')

@section('title')
    طلبات تدريب واشراف
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
                                        <form method="POST" action="{{route('trainingsupervision-update', $DataFromDB->id)}}"  enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الاسم</label>
                                                        <input name="name" value="{{$DataFromDB->name}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">رقم الهاتف</label>
                                                        <input name="phone"  value="{{$DataFromDB->phone}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">التخصص</label>
                                                        <input name="specialization" value="{{$DataFromDB->specialization}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">سبب طلب التدريب</label>
                                                        <input name="reason" value="{{$DataFromDB->reason}}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">العمر</label>
                                                        <input  name="age" value="{{$DataFromDB->age}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">المدينة</label>
                                                        <input name="city" value="{{$DataFromDB->city}}" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الوظيفة الحالية للمتدرب</label>
                                                        <input name="current_job" value="{{$DataFromDB->current_job}}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">تحديث</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
