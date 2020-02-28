$(window).on("load", function() {
    var table = $('#lista_usuarios').DataTable({
        //dom: 'BfrtipS',
        responsive: true,
        language: {
            "url": "../../DataTables/Spanish.json"
        },
        /*buttons: [{
            extend: 'excel',
            //title: 'Data export Excel',
            exportOptions: {
                columns: [0, 1, 2, 3]
            }
        }, {
            extend: 'pdfHtml5',
            //title: 'Data export PDF',
            //messageTop: 'PDF created by PDFMake with Buttons for DataTables.',
            exportOptions: {
                columns: [0, 1, 2, 3]
            }
        }, {
            extend: 'print',
            //title: 'Data export Imprimir',
            text: 'Imprimir',
            exportOptions: {
                columns: [0, 1, 2, 3]
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