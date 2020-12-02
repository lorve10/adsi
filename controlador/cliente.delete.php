<?php

include_once "../entidad/cliente.entidad.php";
include_once "../modelo/cliente.modelo.php";

$idClienteEli = $_POST['txtIdClienteElm'];

$clienteE = new \entidad\Cliente();
$clienteE->SetIdcliente($idClienteEli);

$clienteM = new \modelo\Cliente($clienteE);
$resultado = $clienteM->delete();

unset($clienteE);
unset($clienteM);

echo json_encode($resultado);


?>