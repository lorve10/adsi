<?php

include_once "../entidad/categoria.entidad.php";
include_once "../modelo/categoria.modelo.php";

$idCatMod = $_POST['txtIdCatMod'];
$nombreCatMod = $_POST['txtNombreCatMod'];
$precioCatMod = $_POST['txtPrecioCatMod'];

$categoriaE = new \entidad\Categoria();;
$categoriaE->setIdCategoria($idCatMod);
$categoriaE->setNombreCat($nombreCatMod);
$categoriaE->setPrecioCat($precioCatMod);

$categoriaM = new  \modelo\Categoria($categoriaE);
$resultado = $categoriaM->update();

unset($categoriaE);
unset($categoriaM);

echo json_encode($resultado);

?>