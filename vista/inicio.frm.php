<?php include_once "header.frm.php" ?>

  <title>HOLA</title>
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
                    <a class="nav-link active" href="inicio.frm.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categoria.frm.php">CATEGORIAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="venta.frm.php">VENTAS</a>
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
            <div class="col-4 ">
                <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../img/pagina/navidad.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h5>Helado Nuevo</h5>
                            <p>Disfruta nuestro helado navideño.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="../img/pagina/heladospopsy.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h5>Helado POPSY</h5>
                            <p>Disfruta nuestra variedad en Helados</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="../img/pagina/halloween.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h5>Helado Nuevo</h5>
                            <p>Disfruta nuestro helado Halloween.</p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
