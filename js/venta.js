$(document).ready(function(){
    cargarSabores(); 
    cargarCategoria();

    $("#txtIdentificacionCliente").autocomplete({
        source: function( request, response){
             $.ajax( {
                url: "../controlador/cliente.autocomplete.php",
                dataType: "json",
                data : {
                        term: request.term
            },
                success: function(data) {
                    response(data);
                    if(data == null){
                        $("#btnNuevo").prop("hidden", false);
                    }
            }
        })
    },
    select: function( event, ui ){
        event.preventDefault();
        $("#txtIdCliente").val(ui.item.idCliente);
        $("#txtIdentificacionCliente").val(ui.item.identificacion);
        $("#txtNombreCliente").val(ui.item.nombre);
        $("#txtApellidoCliente").val(ui.item.apellido);
        $("#txtPuntosActCliente").val(ui.item.puntos);
        $("#txtIdentificacionCliente").prop("disabled", true);
        $("#txtNombreCliente").prop("disabled", true);
        $("#txtApellidoCliente").prop("disabled", true);
        $("#txtPuntosActCliente").prop("readonly", true);
        $("#btnNuevo").prop("hidden", true);
        $("#btnRegistrar").prop("hidden", true);
        $("#btnNueConsulta").prop("hidden", false);
        $("#btnRegistrarVta").prop("hidden", false);
        $("#btnCancelarVta").prop("hidden", false);

        console.log(ui);
    }
    })

    function cargarSabores(){
        $.ajax({
            url:'../controlador/sabor.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            var imagenTra = '';
            var imagenNue ='';
            console.log(json);
            $.each(json, function(key, value){
                if(value.idCategoria == 1){
                    imagenTra += "<div class='col-3 mt-3'>";
                        imagenTra += '<h3>'+value.nombre+'</h3>';
                        imagenTra += '<img src="../'+value.imagen+'" title="'+value.nombre+'" class="img-thumbnail imgVenta">';
                        imagenTra += "<input class='form-control tradicionales helados' type='number' value='0' name='saboresTradicionales[]' id='saboresTradicionales' min='0'>";
                    imagenTra += "</div>";

                }
                else if( value.idCategoria == 2){
                    imagenNue += "<div class='col-3 mt-3' >";
                        imagenNue += '<h3>'+value.nombre+'</h3>';
                        imagenNue += '<img src="../'+value.imagen+'" title="'+value.nombre+'" class="img-thumbnail imgVenta">';
                        imagenNue += "<input class='form-control nuevos helados' type='number' value='0' name='saboresNuevos[]' id='saboresNuevos' min='0'>";
                    imagenNue += "</div>";
                }
               
            })
            $('#saboresTradicionales').html(imagenTra);
            $('#saboresNuevos').html(imagenNue);
    
        }).fail(function(xhr, status, error){
            $('#respuesta').html(error);
    })

    }

    var tradicional;
    var nuevos;
    
    var total;
    var puntos;

    function cargarCategoria(){
        $.ajax({
            url:'../controlador/categoria.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            $.each(json, function(key, value){
                switch(value['nombre']){
                    case "Tradicionales":
                        tradicional = value ['precio'];
                    break;

                    case "Nuevos":
                        nuevos = value ['precio'];
                    break;

                    default:
                    break;
                }
            })
        }).fail(function(xhr, status, error){

        })
    }

        $(document).on('change keyup', '.helados', function(){
            var total = 0;
            var x = $('.tradicionales');
            console.log(x.lenght);         
            $.each(x, function(i, field){
                total += parseInt(field.value)*tradicional;    
                });

            var y = $('.nuevos');       
            $.each(y, function(i, field){
                total += parseInt(field.value)*nuevos;    
                });
            puntos= Math.round(total/1000);
            $("#valorTotal").val(total);
            $("#puntosVenta").val(puntos);
        })     


    $(document).on('click','#btnNuevo', function(){
        $("#txtIdentificacionCliente").prop("readonly", true);
        $("#txtNombreCliente").prop("disabled", false);
        $("#txtApellidoCliente").prop("disabled", false);
        // $("#txtPuntosActCliente").prop("readonly", true);
        $("#txtPuntosActCliente").val(0);
        $("#btnNuevo").prop("hidden", true);
        $("#btnRegistrar").prop("hidden", false);
        $("#btnCancelar").prop("hidden", false);

        
    })

    $(Document).on('click','#btnRegistrar',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/cliente.create.php',
                type: 'POST',
                dataType: 'json',
                data : $('#cliente').serialize(),
            }).done(function(json){
                alert (json.mensaje);
        
                $("#txtIdCliente").val(json.ultimoId);
                $("#btnRegistrar").prop("hidden", true);
                $("#btnCancelar").prop("hidden", true);
                $("#txtIdentificacionCliente").prop("disabled", false);
                $("#txtNombreCliente").prop("disabled", true);
                $("#txtApellidoCliente").prop("disabled", true);
                $("#txtPuntosActCliente").prop("readonly", true); 
                $("#btnRegistrarVta").prop("hidden", false);
                $("#btnCancelarVta").prop("hidden", false)  
            }).fail(function(xhr, status, error){
                alert (error);
        }) 
        
    })

    $(document).on('click','#btnCancelar', function(){
        $("#txtIdCliente").val("");
        $("#txtIdentificacionCliente").val("");
        $("#txtNombreCliente").val("");
        $("#txtApellidoCliente").val("");
        $("#txtPuntosActCliente").val("");
        $("#txtIdentificacionCliente").prop("disabled", false);
        $("#txtNombreCliente").prop("disabled", true);
        $("#txtApellidoCliente").prop("disabled", true);
        // $("#txtPuntosActCliente").prop("readonly", true);
        $("#btnNuevo").prop("hidden", true);
        $("#btnRegistrar").prop("hidden", true);
        $("#btnCancelar").prop("hidden", true);
    })

    $(document).on('click','#btnNueConsulta', function(){
        $("#txtIdCliente").val("");
        $("#txtIdentificacionCliente").val("");
        $("#txtNombreCliente").val("");
        $("#txtApellidoCliente").val("");
        $("#txtPuntosActCliente").val("");
        $("#txtIdentificacionCliente").prop("disabled", false);
        $("#txtNombreCliente").prop("disabled", true);
        $("#txtApellidoCliente").prop("disabled", true);
        // $("#txtPuntosActCliente").prop("readonly", true  );
        $("#btnNueConsulta").prop("hidden", true);
        $("#btnRegistrarVta").prop("hidden", true);
        $("#btnCancelarVta").prop("hidden", true)
    })

    $(document).on('click','#btnRegistrarVta', function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/venta.create.php',
                type: 'POST',
                dataType: 'json',
                data : $('#cliente').serialize(),
            }).done(function(json){
                // alert (json[0]);
                // alert (json[1]);
                alertify.success(json[0]);
                alertify.success(json[1]);
                $("#txtIdCliente").val("");
                $("#txtIdentificacionCliente").val("");
                $("#txtNombreCliente").val("");
                $("#txtApellidoCliente").val("");
                $("#txtPuntosActCliente").val("");
                $("#txtIdentificacionCliente").prop("disabled", false);
                $("#txtNombreCliente").prop("disabled", true);
                $("#txtApellidoCliente").prop("disabled", true);
                // $("#txtPuntosActCliente").prop("readonly", true  );
                $("#btnNueConsulta").prop("hidden", true);
                $("#btnRegistrarVta").prop("hidden", true);
                $("#btnCancelarVta").prop("hidden", true)
            }).fail(function(xhr, status, error){
                // alert (error);
                alertify.error(error);
        }) 
        
    })

})