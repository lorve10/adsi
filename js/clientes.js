function modificar (id, nombre, apellido){
    $("#txtIdClieMod").val(id);
    $("#txtNombreClieMod").val(nombre);
    $("#txtApellidoClieMod").val(apellido);
}

function eliminar(id, nombre){
    $("#txtIdClienteElm").val(id);
    $("#cliEliminar").html(nombre);
}

$(document).ready(function(){
    buscar(); 
    /// BUSCAR ///
    function buscar (){
            $.ajax({
                url:'../controlador/cliente.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
                var datos = '';
                datos += "<table id='tableCat' class='table table-dark table-bordered' style='font-size: 18px' >";
                    datos += '<thead>';
                        datos += '<tr>';
                            datos += '<th>Numero Identificacion</th>'  
                            datos += '<th>Nombre</th>';
                            datos += '<th>Apellido</th>';
                            datos += '<th>Puntos Actuales</th>'
                            datos += '<th>Modificar</th>';
                            datos += '<th>Eliminar</th>';
                        datos += '</tr>';
                    datos +=  '</thead>';
                    datos += '<tbody>';
                        $.each(json, function(key, value){
                            datos += '<tr>';
                                datos += '<td>'+value.identificacionCliente+'</td>'; 
                                datos += '<td>'+value.nombreCliente+'</td>';
                                datos += '<td>'+value.apellidoCliente+'</td>';
                                datos += '<td>'+value.puntosCliente+'</td>';
                                datos += '<td><a class="btn btn-primary" onclick="modificar('+value.idCliente+',\''+value.nombreCliente+'\',\''+value.apellidoCliente+'\')" data-toggle="modal" data-target="#modalModificar"><i class="fas fa-edit"></i></a></td>';
                                datos += '<td><a class="btn btn-danger" onclick="eliminar('+value.idCliente+',\''+value.nombreCliente+'\')" data-toggle="modal" data-target="#modalEliminar"><i class="fas fa-trash-alt"></i></a></td>';
                            datos += '</tr>';
                        })
                    datos += '</tbody>';
                datos += '</table>';
                $('#datos').html(datos);
                $('#tableCat').DataTable({
                    "destroy" : true,
                    "autoWidth": false,
                    "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",
                                "buttons":{
                                    copyTitle: 'Registros Copiados',
                                    copySuccess:{
                                        _:'%d Registros Copiados',
                                        1:'1 Registro Copiado',
                                    }
                                },

                                },
                    dom:  'Bfrtip',
                    buttons: [
                        {
                            extend: 'pdfHtml5',
                            orientation: 'landscape',
                            pageSize: 'A4',
                            download: 'open',
                            titleAttr: 'PDF',
                            messageTop: 'Clientes',
                            text : '<i class="far fa-file-pdf"></i>',
                            exportOptions : {
                                columns: [0,1,2,3]
                            },
                            customize: function ( doc ) {
                                doc.content.splice( 1, 0, {
                                    margin: [ 0, 0, 0, 12 ],
                                    alignment: 'center',
                                    image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAA3QAAAN0BcFOiBwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAZpSURBVFiFtZZ7cFT1Fce/v3v3cXfv3UceSx4ENwaSCEtNNIIkVKiGSh0kjG0Ehk5BaNMqU2rrtBTp2Ec600iHdtoq1k7VaSJKK0wwdqS2dSgoKMSQiak8ItkQQhJ2Nw83m33fvff0D0km2exmN5npmfnN3Ps73/s7n98553fvBRFhYgAosUrif2xWSzuArKm+/9dgtwIDADJN0uAzOzbnXBt0y03/OvW61x/YhQTGGLMBWC0ZdeUqIAeD0XMALhCRN5F+NtNMvVGJPFkmKfcjX7c+EI5sZ4z9hoguTglsNBiEZ6wWcfeK8iXKfVUOE5QYO9t6OdzW0aPNsVkaPMO+eiJS0yaIK8HdFtEYXJyfS3/Ys0vNMEkfTvEJWZmmtk1fuXfcfaWRFM/xacPVcYhq1y9XFuVldgHQp1sCLg6mHWAt1RVfkDff/0UWDEdWMsYeBgDJqH91c83qZc1N+6T+wREAgMvjhcvzedYHRiM48qcfcDVri4vtBZmH5pWBWzvNMQr68cdrHqRKRymZReMAgDsL8rN9/r6/ka/3CD2x8yFSPMepuXEfNTfuI8VznJ7Y+RD5eo+Qt62eSuzZMoDydDKQcFLQ6fbrdVq169XnafOXKv0cY64DP92hTE15qP9owmu5+0VqeHIdZVqN9XMuwYSFo9GDWl7j7nV5MOLziwQsWHF38TTt1rqDcA954R7yYmvdwcl5pjPgHkcesjOkjelUYNoxnOZgbFOGSXqjpCBP5wuH6M2/7mdLbs+b9PsDYUiiMOOaogF82vYh1n37sGfA7c2ZNwAAWCTxfOmi/JWXem+A13DQaXiULbsN66or8N1vbYDRoAcABEMRHHrpBN4/cwntnd0YGRsHwGSbwfzcwPhoAxENzycDG/Va/vCWtQ6xuszOL7CKiMgKPr46gPc7r6NnLII3Gp8GAGyv+x2qC8pQXVSOioWLoeU1uOTqw4nOVvWFC+/EgnLkESI6kTYAY0xYnJdx7YdfW5VbmGOZ4Q/4gzjd3o0jrddBxOGFmt34cnF5wo180uPEzpbnZKfX/SgRtcT7ZzQhY8y0t7bqyed3r08YHABEyYiK4jzowKGp9qmkwQFgeWERDj1Yp80QpMOMMWNKAJ7HV7v6h3+WdMVbdtnjhyPndlTa75hdyDHcYy/BpuIVIsdx30kJYDYI65felm1IBXDlxhgecaxOJQMAMC3DmoKlbKEpc1NKAEWhytKCrJSLDg4HUGpbOKtGnegvnkOZzY6YqjhSAsRUNSjHlJQA29aUYXlu4ayara/9GkMBH0CEsCKDA4vEa6Z9jhljDp7nDS+/e0m2ZUja2RYnRcWFzj8DAFSVBbbdtcZQZV86bUODvlH1R2+/EjZrBN7j8+rG5DDPGHNM/cRPAjDGOFEUT+95am+mvdDOZt1anLW1torHOs+jyr502jwTdNzK7Y8as7KzEYspKLl8Jfdw40vnGGOWiX+GqRlgHM+TwSAwvV6YS3xotRpMFM054oJZMMImmgEAOp0eer0AjUaBXtCD53kAmNzgtBcRY6zMbLH8OBSO1pauenhGvZLZmLtPs8Zs1W1xrOR2HH9RjUXDrON7v2XrmxpUftEdIa9qEEY632G2LMtbNwcHf05EHycEuAXBtHrj+L5mj8hrZm2DSbt89k2E//5HLBTN6C2rhqvjJPYXLcPTJ4+iuv4tnBtguNhwb1QO+QSKCzjjFBARaQWj09P7SboJQNFdD+D8zes41tWO0lUbwMBA+DzOWFBGyN0FrWTtjw8OxJ2CCVOi0bMtB75xp2i2pg1hzMoGABRYCCZJwHDAh1A0iPd+/3VEQkGo0dCpRM8lBIiEfGdKiysf/2XDs3M6DRxjKFqSj0LuMezZ9Ri2bN2GBzbW4MCv6nHm1Ml30wYA8NG1HmdsSXFJek0QZ5Wr70NblxMA4HYP4UZfHwFoTQidZI3uIY+L/H7/fOJPmqIo8Pv9+GxkhIjImUiTMANERDn59qv/PtPhuO78FG8fa5oXABEhEgrAsqBgMJkmWQngHR36R8vJjmUVG77J7s9dOy+Aqy4fOv75F3jbm4/OGSAaCX3Q+9/36qpqv2/RLyqdF8CVgBuKz6VGAqOnk2mS9QAAnOu7+AH/2c1r8woeU1S4+53w9ZxXkKQBgRR/xZI1e68sR3+ixmT93BEYx2kFRSdmPDvudv4imep/vbKa4pYXv5AAAAAASUVORK5CYII='
                                } );
                            }
                        },
                        {
                            extend: 'print',
                            text : '<i class="fas fa-print"></i>',
                            titleAttr: 'IMPRIMIR',
                            exportOptions : {
                                columns: [0,1,2,3]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            text : '<i class="fas fa-file-excel"></i>',
                            autoFiltre : true ,
                            titleAttr: 'EXCEL',
                            exportOptions : {
                                columns: [0,1,2,3]
                            }
                        },
                        {
                            extend: 'copyHtml5',
                            text : '<i class="fas fa-copy"></i>',
                            autoFiltre : true ,
                            titleAttr: 'COPIAR',
                            exportOptions : {
                                columns: [0,1,2,3]
                            }
                        }


                        
                    ]

                    
                });
            }).fail(function(xhr, status, error){
                $('#datos').html(error);
        })
    }
    /// MODIFICAR ///
    $(Document).on('click','#btnModificar',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/cliente.update.php',
                type: 'POST',
                dataType: 'json',
                data : $('#cliente').serialize(),
            }).done(function(json){
                alert (json);
                buscar();
            }).fail(function(xhr, status, error){
                alert (error);
        })

    })
    /// ELIMINAR ///
    $(Document).on('click','#btnEliminar',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/cliente.delete.php',
                type: 'POST',
                dataType: 'json',
                data : $('#cliente').serialize(),
            }).done(function(json){
                alert (json);
                buscar();
            }).fail(function(xhr, status, error){
                alert (error);
        })

    })

})