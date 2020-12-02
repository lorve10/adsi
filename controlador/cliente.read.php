<?php

include_once "../entidad/cliente.entidad.php";
include_once "../modelo/cliente.modelo.php";

$clienteE = new \entidad\Cliente();
$clienteM= new \modelo\Cliente($clienteE);

$resultado = $clienteM->read();

unset($clienteE);
unset($clienteM);

echo json_encode($resultado);




?>