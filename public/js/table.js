function agregarProducto() {

    if (parseInt(document.getElementById('cantidad').value) > 0) {
        document.getElementById("detalleVenta").innerHTML += '<tr> <td> '+ document.getElementById('articulo').value
        +' </td> <td> Modelo 1 </td> <td>' + document.getElementById('cantidad').value + ' </td> '
        +'<td> 500 </td> <td> 1000 </td> </tr>';
    }
    else {
        alert('Cantidad tiene que ser mayor que 0');
    }

    agregarCliente();
}

function next() {
    document.getElementById('abonos').style.display = 'block';
    document.getElementById('abonos').style.marginLeft = '30%';
}

function agregarCliente() {
    var parametros = {
        "nombre" : 'Godnaldo',
        "apellidoPaterno" : 'Carlon',
        "apellidoMaterno" : 'Carl',
        "RFC" : 'AAA010101AAA'
    };
    $(document).ready(function() { 
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');   
        $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   '/clientes', //archivo que recibe la peticion
            type:  'POST', //método de envio
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                alert('Es todo perro');
            }
        });
    });
}