<?php include_once "header.frm.php" ?>

  <title>CLIENTES</title>
</head>
<body class="bg-light">
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
                    <a class="nav-link  " href="categoria.frm.php">CATEGORIAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="venta.frm.php">VENTAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="clientes.frm.php">CLIENTES</a>
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
                <div class="row justify-content-center"><h1>CLIENTES</h1></div>
                <br>
                <div class="row my-1">
                    <h1 id="datos"></h1>
                </div>
                <div class="row my-1">
                    <h1 id="respuesta"></h1>
                </div>

            <!-- Modal Modificar -->
                <div class="modal"  id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modificar Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-12">
                                        <input type="number" name="txtIdClieMod" id="txtIdClieMod" hidden >
                                        <label> Nombre Cliente</label>
                                        <input class="form-control" type="text" name="txtNombreClieMod" id="txtNombreClieMod">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Apellido Cliente </label>
                                        <input class="form-control" type="text" name="txtApellidoClieMod" id="txtApellidoClieMod">
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
                            <h5 class="modal-title">Eliminar Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-12">
                                        <input type="number" name="txtIdClienteElm" id="txtIdClienteElm" hidden >
                                        <h5>Esta seguro de eliminar al Cliente:</h5>
                                        <h4 id="cliEliminar"></h4>
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

            <!-- Fin Modal Modificar -->
            </form>
        </div>
    </div>  
</body>
    <script src="../js/clientes.js"></script>
</html>