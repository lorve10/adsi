<?php 

include_once "../entidad/sabor.entidad.php";
include_once "../modelo/sabor.modelo.php";

$saborE = new \entidad\Sabor();
$saborM= new \modelo\Sabor($saborE);

$resultado = $saborM->read();

unset($saborE);
unset($saborM);

echo json_encode($resultado);


?>