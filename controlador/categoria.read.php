<?php

include_once "../entidad/categoria.entidad.php";
include_once "../modelo/categoria.modelo.php";

$categoriaE = new \entidad\Categoria();
$categoriaM= new \modelo\Categoria($categoriaE);

$resultado = $categoriaM->read();

unset($categoriaE);
unset($categoriaM);

echo json_encode($resultado);




?>