<?php

include_once "../entidad/cliente.entidad.php";
include_once "../modelo/cliente.modelo.php";

$identificacionCliente = $_GET['term'];

$clienteE = new \entidad\Cliente();
$clienteE->setIdentificacionCliente($identificacionCliente);
$clienteM= new \modelo\Cliente($clienteE);

$resultado = $clienteM->autocomplete();

unset($clienteE);
unset($clienteM);

echo json_encode($resultado);




?>