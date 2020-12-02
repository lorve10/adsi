<?php include_once "header.frm.php" ?>

  <title>INICIO_LOGIN</title>
</head>
<body class="bg-light">
    <header class="row bg-light">
        <div class="col-6">
            <a class="navbar-brand" href="">
                <img src="../img/pagina/helado.png"style="width: 60px;">POPSY
            </a>
        </div>
        <div class="col-6">
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="inicio.frm.php"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categoria.frm.php"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="venta.frm.php"></a>
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
        <div class="row bg-light" >
        <br>
        </div>
        <div  class="row bg-light hero justify-content-center">
                <form name=form action="html/seleccion.html">
                    <div class="card mb-3 bg-light" style="width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="../img/pagina/login.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">INICIO SESIÓN </h5>
                            <div class="row justify-content-center">
                                <div class="col-4"> Usuario: </div>
                                <div class="col-4"> <input type=text name=login></div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-4">Contraseña:</div>
                                <div class="col-4"> <input type=password name=password></div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                            <div class="col-4 ">
                                <input type="button" onclick="inicio();" class="btn btn-primary btn-lg"  type=button value=Ingresar>
                            </div>
                            <div class="col-4">
                                <input type="reset" class= "btn btn-secondary btn-lg" onclick value="Limpiar">
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>