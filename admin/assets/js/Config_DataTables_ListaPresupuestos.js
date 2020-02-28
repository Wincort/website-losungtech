$(window).on("load", function() {
    var table = $('#lista_presupuestos').DataTable({
        //dom: 'BfrtipS',
        responsive: true,
        language: {
            "url": "../../DataTables/Spanish.json"
        },
        /*buttons: [{
            extend: 'excel',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
        }, {
            extend: 'pdfHtml5',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7]
            }
        }, {
            extend: 'print',
            text: 'Imprimir',
            exportOptions: {
                columns: [0, 1, 2, 3, 4, 5, 6, 7]
            },
            customize: function(win) {
                $(win.document.body)
                    .css('font-size', '10pt')

                $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
            }
        }]*/
    });

    new $.fn.dataTable.FixedHeader(table);

});