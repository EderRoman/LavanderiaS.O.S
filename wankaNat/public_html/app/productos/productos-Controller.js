$(document).ready(function(){

    $('#listClientes').DataTable({

        "ajax":{
            type: 'get',
            url: "http://wankaNat.com/api/v1/productos",
            dataSrc: 'data',
            cache: true
        },
        columns: [
            {
                "targets": 0,
                "render": function ( data, type, row ) {
                    return row.created_at;
                }
            },
            { data: 'codigo' },
            { data: 'nombre' },
            { data: 'costo' },
            { data: 'cantidad' },
            {
                "targets": 6,
                "render": function ( data, data, row ) {
                    return "<a href='#'>Editar</a> | <a href='#'>Eliminar</a>"
                }
            }
        ]
    });
});