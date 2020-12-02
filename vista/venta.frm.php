<?php include_once "header.frm.php" ?>

  <title>VENTA HELADOS</title>
</head>
<body>
  <header class="row bg-light">
        <div class="col-6">
            <a class="navbar-brand" href="inicio.frm.php">
                <img src="../img/pagina/helado.png"style="width: 60px;">POPSY
            </a>
        </div>
        <div class="col-6">
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item">
                    <a class="nav-link " href="inicio.frm.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="categoria.frm.php">CATEGORIAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="venta.frm.php">VENTAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="clientes.frm.php">CLIENTES</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="container-fluid">
        <div  class="row bg-info">
            <div  class="col-12 align-self-center">
                <div class="row justify-content-center" >
                    <div class=" col-6 ">
                        <h1 class="display-4 text-center texto-shadow"><strong>HELADERIA POPSY</strong></h1>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row bg-light  justify-content-center " >
            <form class="form-group" id="cliente">
                <div class="row justify-content-center">
                    <h1>VENTA HELADOS</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                    <label>Id Cliente</label>
                    <input class="form-control" type="text" name="txtIdCliente" id="txtIdCliente">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">  
                        <label> Identificacion Cliente</label>
                        <input class="form-control" type="number" name="txtIdentificacionCliente" id="txtIdentificacionCliente">
                    </div>  
                    <div class="col-3">
                        <label> Nombre Cliente</label>
                        <input class="form-control" type="text" name="txtNombreCliente" id="txtNombreCliente" disabled>
                    </div>
                    <div class="col-3">
                        <label> Apellido Cliente</label>
                        <input class="form-control" type="text" name="txtApellidoCliente" id="txtApellidoCliente" disabled > 
                    </div>
                    <div class="col-3">
                        <label for="">Puntos Actuales del Cliente </label>
                        <input class="form-control" type="number" name="txtPuntosActCliente" id="txtPuntosActCliente" readonly >
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <a id="btnNuevo" class="btn btn-success" hidden="true" >Nuevo <i class="far fa-plus-square"></i></a>
                        <a id="btnRegistrar" class="btn btn-primary" hidden="true" >Registrar <i class="fas fa-pencil-alt"></i></a>
                        <a id="btnCancelar" class="btn btn-danger" hidden="true"  >Cancelar <i class="far fa-window-close"></i></a>
                        <a id="btnNueConsulta" class="btn btn-info" hidden="true"  >Nueva Consulta <i class="fas fa-search"></i>    </i></a>
                    </div>
                </div>
                <div class="row my-1">
                    <h1 id="respuesta"></h1>
                </div>
                <div class="row m-3 justify-content-center">
                    <h3>Sabores Disponibles</h3>
                </div>
                <div class="row m-1">
                    <div class="col-12"><h4>Tradicionales</h4></div>
                    <div class="row m-1" id="saboresTradicionales">
                    </div>
                </div>
                <br>
                <div class="row m-1 "> 
                    <div class="col-12"><h4>Nuevos</h4></div>
                    <div class="row m-1"  id="saboresNuevos">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3"><h3>Total Venta: $</h3></div>
                    <div class=" col-3 h3"><input class="form-control" type="text" name= "valorTotal" id="valorTotal" ></div>
                    <div class="col-3"><h3>Puntos Venta: </h3></div>
                    <div class=" col-3 h3"><input class="form-control" type="text" name= "puntosVenta" id="puntosVenta" ></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <a id="btnRegistrarVta" class="btn btn-primary" hidden="true">Registrar Venta <i class="fas fa-pencil-alt"></i></a>
                        <a id="btnCancelarVta" class="btn btn-danger"  hidden="true" >Cancelar Venta<i class="far fa-window-close"></i></a>
                    </div>

            <!-- Modal Modificar -->
                <div class="modal"  id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modificar Categoria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-12">
                                        <input type="number" name="txtIdCatMod" id="txtIdCatMod" hidden >
                                        <label> Nombre Categoria</label>
                                        <input class="form-control" type="text" name="txtNombreCatMod" id="txtNombreCatMod">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Precio </label>
                                        <input class="form-control" type="number" name="txtPrecioCatMod" id="txtPrecioCatMod">
                                    </div>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" id="btnModificar" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                </div>

            <!-- Fin Modal Modificar -->

            <!-- Modal eLIMINAR -->
                <div class="modal"  id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar Categoria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-12">
                                        <input type="number" name="txtIdCatElm" id="txtIdCatElm" hidden >
                                        <h5>Esta seguro de eliminar la categoria:</h5>
                                        <h4 id="catEliminar"></h4>
                                    </div>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" id="btnEliminar" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                </div>

            <!-- Fin Modal eLIMINAR -->

            </form>
        </div>
    </div>  
</body>
    <script src="../js/venta.js"></script>
</html>