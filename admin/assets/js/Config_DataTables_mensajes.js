$(window).on("load", function() {
    var table = $('#lista_mensajes').DataTable({
        responsive: true,
        language: {
            "url": "assets/lib/DataTables/Spanish.json"
        },
        order: [
            [0, "desc"]
        ]
    });

    new $.fn.dataTable.FixedHeader(table);

});