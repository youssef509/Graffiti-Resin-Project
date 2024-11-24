@extends('backend.partials.layout')

@section('title')
    طلبات شراء مواد
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('page-content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">الطلبات المستلمة</h4>
                            <table class="datatable table-bordered  mdl-data-table dataTable" data-url="{{ route('admin.purchasing-materials-data') }}" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>الاسم</th>
                                    <th> رقم الهاتف</th>
                                    <th>المدينة</th>
                                    <th>هوية العميل</th>
                                    <th>المنتجات المطلوبة</th>
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
                                <h4 class="card-title">طلبات شراء مواد</h4>
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
                                    <form method="POST" action="{{route('purchasingmaterials-add')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">الاسم</label>
                                                    <input name="name" class="form-control" type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">المدينة</label>
                                                    <input name="city" class="form-control" type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label"> هوية العميل</label>
                                                    <input name="client_category" class="form-control" type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">نوع المنتجات المراد شرائها</label>
                                                    <input name="products_to_by" class="form-control" type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">السماكة المطلوبة للمنتج</label>
                                                    <input name="thickness" class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">رقم الهاتف</label>
                                                    <input name="phone" class="form-control" type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label"> هوية العميل</label>
                                                    <input name="client_category" class="form-control" type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">المساحة اإلجمالية المراد توريد المواد لها</label>
                                                    <input name="area_for_materials" class="form-control" type="text">
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
                            </div>
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
    <script src="{{ asset('backend/assets/js/PurchasingMaterials-table.js') }}"></script>
@endsection
