$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Get the AJAX URL from the data attribute on the table
    let ajaxUrl = $('.datatable').data('url');

    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: ajaxUrl,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'age', name: 'age' },
            { data: 'phone', name: 'phone' },
            { data: 'city', name: 'city' },
            { data: 'specialization', name: 'specialization' },
            { data: 'current_job', name: 'current_job' },
            { data: 'reason', name: 'reason' },
            {
                data: 'created_at',
                name: 'created_at',
                render: function(data) {
                    return data ? data.slice(0, 19) : '';
                }
            },
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <a href="/admin/Quote-Requeste/TrainingSupervision/${row.id}/edit" class="btn btn-primary btn-sm">تعديل</a>
                        <button class="btn btn-danger btn-sm delete-btn sa-warning" data-id="${row.id}">حذف</button>
                    `;
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'تصدير الي Excel',
                className: 'btn btn-secondary waves-effect waves-light',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                text: 'طباعة',
                className: 'btn btn-primary waves-effect waves-light',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ],
        columnDefs: [
            {
                targets: [0, 1, 2],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ],
        pageLength: 10 // Set default page length
    });
});
