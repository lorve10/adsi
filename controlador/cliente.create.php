<?php

include_once "../entidad/cliente.entidad.php";
include_once "../modelo/cliente.modelo.php";

$identificacionCli = $_POST['txtIdentificacionCliente'];
$nombreCli =  $_POST['txtNombreCliente'];
$apellidoCli = $_POST['txtApellidoCliente'];

$clienteE = new \entidad\cliente();
$clienteE ->setIdentificacionCliente($identificacionCli);
$clienteE ->setNombreCliente($nombreCli);
$clienteE ->setApellidoCliente($apellidoCli);

$clienteM = new \modelo\cliente($clienteE);
$resultado = $clienteM->create();

unset($clienteE);
unset($clienteM);

echo json_encode($resultado);

?>