let CargarDataTables = (idTabla) => {
    let table = $(`#${idTabla}`).DataTable({
        responsive: true,
        language: {
            "url": "assets/lib/DataTables/Spanish.json"
        },
    });
    new $.fn.dataTable.FixedHeader(table);
}