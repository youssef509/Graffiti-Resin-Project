$(document).ready(function() {
    // Get the AJAX URL from the data attribute on the table
    let ajaxUrl = $('.datatable').data('url');

    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: ajaxUrl,  // Use the AJAX URL from the data attribute
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'phone', name: 'phone' },
            { data: 'city', name: 'city' },
            { data: 'street', name: 'street' },
            { data: 'shop_name', name: 'shop_name' },
            { data: 'shop_type', name: 'shop_type' },
            { data: 'shop_size', name: 'shop_size' },
            { data: 'shop_products', name: 'shop_products' },
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
        pageLength: 10  // Set default page length
    });
});
