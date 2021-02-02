<?php include_once ("header.php") ?>
    <title>publicar oferta</title>
</head>
<body>
    <br>

<div class="container border justify-content-center" style="margin: auto; width: 900px; height: 700px;">
    <table class="col-12" cellpadding="50" style="width: auto; width: 800%;">

    <h1>Publicar Oferta</h1>
    <br>


   
        <td cellpadding="10">
        <div >
            <h2>Categoria</h2>
            <select>
                <option disabled selected aria-placeholder="seleccionar">Selecciona una Categoria</option>
                <option value="item 1">Item 1</option>
                <option value="item 2">Item 2</option>
                <option value="item 3">Item 3</option>
            </select>
        </div> 
    </td>   
    <td cellpadding="10">
        <div >
            <h2>Sub-categoria</h2>
            <select>
                <option disabled selected>Selecciona una Categoria</option>
                <option value="item 1">Item 1</option>
                <option value="item 2">Item 2</option>
                <option value="item 3">Item 3</option>
            </select>
        </div>
    </td>
    <tr class="">
    <td>
        <div> 
            <h2>Description</h2>
            <input style="width: 190%; height: 160px;" type="text"  placeholder="Escribe una breve description">
        </div>
    </td>
    </tr>
    <td>
        <div>
            <h2>Precio (Opcional)</h2>
            <input type="text" placeholder="Ingrese precio en pesos">
        </div>
    </td> 
    <td>  
        <div>
            <h2>Modena</h2>
            <input type="text" placeholder="COP- $">
        </div>
    </td>    
    </table>
</div>
<br>
<div class="text-center">
<a href="principal.sesion.php" class="btn btn-primary">Atras</a>
</div>
<br>
<?php include_once("footer.php"); ?>
</body>
</html>