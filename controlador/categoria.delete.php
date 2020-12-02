<?php

include_once "../entidad/categoria.entidad.php";
include_once "../modelo/categoria.modelo.php";

$idCatEli = $_POST['txtIdCatElm'];

$categoriaE = new \entidad\Categoria();
$categoriaE->SetIdCategoria($idCatEli);

$categoriaM = new \modelo\Categoria($categoriaE);
$resultado = $categoriaM->delete();

unset($categoriaE);
unset($categoriaM);

echo json_encode($resultado);


?>