$(document).ready(function(){

    oferta();


    function oferta(){

        $.ajax({
            url:'',
            type:'POST',
            datatype:'JSON',
            data:null,

        }).done(function(json){
            
            var datos='';

            datos+='<div class="container d-flex align-items-start mb-3" >';
            
            
            datos+='<table  class="border col-1" style="width: 30%  height:30%;;  cellpadding="10" >'; 
                         datos+='<tr>';
                         datos+='<td class="border-bottom"><h5>Filtrar por</h5> </td>';
                         datos+='</tr>';
                       
                         datos+='<tr>';
                         datos+='<td class="border-bottom"><h5>Categoria</h5> <select class="form-control" name="jugete" id="jugete"><option value="">Selecionar</option><option>profesor</option><option>programacion</option></select></td>';
                         datos+='</tr>';
                         datos+='<tr>';
                         datos+='<td class="border-bottom"><h5>Ubicaciòn</h5> <select class="form-control" name="jugete" id="jugete"><option value="">Selecionar</option><option>Neiva</option><option>colombia</option></select></td>';
                         datos+='</tr>';
                         datos+='<tr>';
                         datos+='<td class="border-bottom"><h5>Tarifa</h5> <br>   <input type="range" value="10,000000" min="1" max="10000000" oninput="this.nextElementSibling.value = this.value"><output value="$"></output></td><br>';
                         datos+='</tr>';
                         datos+='<tr>';
                         datos+='<td class="border-bottom"><h5>Calificacion</h5> <br><div class="ec-stars-wrapper"><a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a><a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a><a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a><a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a><a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a></div></td>';
                         datos+='</tr>';
                         datos+='<tr>';
                         datos+='<td class="border-bottom"><h5><a >Restablecer Filtro</a></h5></td>';
                         datos+='</tr>';
                 datos+='</table>';
                 datos+='<br>';
                 
            
            datos+='<table id="caja2" class="d-flex align-items-end border" class="col-12"  style="width: 400%; width: 9000%;">';
            datos+='<th >';
                datos+='<div class="input-group mb-3">';
                    datos+=' <input type="text" class="form-control" placeholder="¿Que estas buscando?" aria-label="¿Que estas buscando?" aria-describedby="basic-addon2">';
                datos+='<div class="input-group-append">'
                    datos+= '<button class="btn btn-outline-secondary" type="button">Button</button>';
                datos+='</div>'
                datos+= '</div>';
            datos+='</th>';

            datos+='<tr>';
                datos+='<td cellpadding="10"  width="15%">';
                datos+='<div  class="border-bottom">';
                datos+='<img  style="float: left;" src="../proyecto.seres/img/app.jpg" class="rounded-circle">';
                datos+=' <h5 class="title">Programaciòn</h5>';
                datos+='<h5 class="text">Desarrolo de Apps Android</h5>';
                datos+='<h6>¿Necesitas una app para tu negocio o empresa? Te puedo ayudar,puedo desarrollar la aplicaciòn que necesitas para tu negocio</h6>';
                datos+=' <a   href="#" class="btn btn" >Neiva - Huila</a></p>';
                datos+='<p align="right";><a   href="#" class="btn btn-success" align="left">Ver Màs</a></p>';
                datos+='</div>';
            datos+='</td>';
            datos+='</tr>';
            
            datos+='<tr>';
                datos+='<td >';
                datos+='<div  class="border-bottom">';
                datos+='<img  style="float: left;" src="../proyecto.seres/img/app.jpg" class="rounded-circle">';
                datos+=' <h5 class="title">Categoria</h5>';
                datos+='<h5 class="text">subcategoria</h5>';
                datos+='<h6>¿Necesitas una app para tu negocio o empresa?</h6>';
                datos+=' <a   href="#" class="btn btn" >Neiva - Huila</a></p>';
                datos+='<p align="right";><a   href="#" class="btn btn-success" align="left">Ver Màs</a></p>';
                datos+='</div>';
            datos+='</td>';
            datos+='</tr>';
            datos+='<tr>';
            datos+='<td >';
            datos+='<div  >';
            datos+='<img  style="float: left;" src="../proyecto.seres/img/app.jpg" class="rounded-circle">';
            datos+=' <h5 class="title">Categoria</h5>';
            datos+='<h5 class="text">subcategoria</h5>';
            datos+='<h6>¿Necesitas una app para tu negocio o empresa?</h6>';
            datos+=' <a   href="#" class="btn btn" >Neiva - Huila</a></p>';
            datos+='<p align="right";><a   href="#" class="btn btn-success" align="left">Ver Màs</a></p>';
            datos+='</div>';
        datos+='</td>';
        datos+='</tr>';
            datos+='<tr>';
            datos+='<td>';
            datos+='<nav aria-label="Page navigation example">';
            datos+=' <ul class="pagination justify-content-center">';
            datos+='   <li class="page-item disabled">';
            datos+='    <a class="page-link" href="#" tabindex="-1">Anterior</a>';
            datos+='  </li>';
            datos+='  <li class="page-item"><a class="page-link" href="#">1</a></li>';
            datos+='  <li class="page-item"><a class="page-link" href="#">2</a></li>';
            datos+='  <li class="page-item"><a class="page-link" href="#">3</a></li>';
            datos+='   <li class="page-item">';
            datos+='     <a class="page-link" href="#">Siguiente</a>';
            datos+='   </li>';
            datos+=' </ul>';
            datos+='</nav>';
            
            datos+='</td>'
            datos+='</tr>';
            
            
            
            datos+='</table>';

            datos+='</div>';



            $('#ofertas').html(datos);


        }).fail(function(xhr,status,error){
            alert("error");
        })


    }

})