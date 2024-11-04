@extends('backend.partials.layout')

@section('title')
    طلبات  موزع معتمد
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('page-content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">الطلبات المستلمة</h4>
                            <table class="datatable table-bordered  mdl-data-table dataTable" data-url="{{ route('admin.AuthorizedDistributor-data') }}" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>الاسم</th>
                                    <th> رقم الهاتف</th>
                                    <th>المدينة</th>
                                    <th>الشارع</th>
                                    <th>اسم نقطة البيع</th>
                                    <th>نشاط نقطةالبيع</th>
                                    <th>مساحة نقطةالبيع</th>
                                    <th>منتجات نقطةالبيع</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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

    <!-- Link to table.js -->
    <script src="{{ asset('backend/assets/js/AuthorizedDistributor-table.js') }}"></script>
@endsection
