$(document).ready(function(){

    $('#listServicios').DataTable({
        "ajax":{
            type: 'get',
            url: "http://lavanderiasos.com/api/v1/servicios",
            dataSrc: 'data',
            cache: true
        },
        columns: [
            { data: 'nombre' },
            { data: 'descripcion' },
            { data: 'precio'},
            {
                "targets": 3,
                "render": function ( data, data, row ) {
                    return "<a href='#'>Editar</a> | <a href='#'>Eliminar</a>"
                }
            }
        ]
    });

});