@extends('backend.partials.layout')

@section('title')
    طلبات تدريب واشراف
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection

@section('page-content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">الطلبات المستلمة</h4>
                            <table class="datatable table-bordered  mdl-data-table dataTable" data-url="{{ route('admin.quote-requests-data') }}" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>الاسم</th>
                                    <th>العمر</th>
                                    <th> رقم الهاتف</th>
                                    <th>المدينة</th>
                                    <th>التخصص</th>
                                    <th>الوظيفة الحالية للمتدرب</th>
                                    <th>سبب طلب التدريب</th>
                                    <th>التاريخ</th>
                                    <th>اجراء</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">طلبات الاشراف والتدريب</h4>
                                <p class="card-title-desc">اضافة طلب</p>
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
                                        <form method="POST" action="{{route('trainingsupervision-add')}}"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الاسم</label>
                                                        <input name="name" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">رقم الهاتف</label>
                                                        <input name="phone" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">التخصص</label>
                                                        <input name="specialization" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">سبب طلب التدريب</label>
                                                        <input name="reason" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">العمر</label>
                                                        <input  name="age" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">المدينة</label>
                                                        <input name="city" class="form-control" type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">الوظيفة الحالية للمتدرب</label>
                                                        <input name="current_job" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">إضافة</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>

@endsection

@section('js')
    <!-- Include other necessary scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('backend/assets/js/pages/custom-alerts.js')}}"></script>
    {{-- <script src="{{ asset('backend/assets/js/pages/alert.init.js')}}"></script> --}}
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- Link to table.js -->
    <script src="{{ asset('backend/assets/js/table.js') }}"></script>
@endsection
