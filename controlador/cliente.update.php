<?php

include_once "../entidad/cliente.entidad.php";
include_once "../modelo/cliente.modelo.php";

$idClieMod = $_POST['txtIdClieMod'];
$nombreClieMod = $_POST['txtNombreClieMod'];
$apellidoClieMod = $_POST['txtApellidoClieMod'];

$clienteE = new \entidad\Cliente();

$clienteE->setIdCliente($idClieMod);
$clienteE->setNombreCliente($nombreClieMod);
$clienteE->setApellidoCliente($apellidoClieMod);

$clienteM = new  \modelo\Cliente($clienteE);
$resultado = $clienteM->update();

unset($clienteE);
unset($clienteM);

echo json_encode($resultado);

?>