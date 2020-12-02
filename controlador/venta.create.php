<?php 

include_once "../entidad/venta.entidad.php";
include_once "../modelo/venta.modelo.php";

include_once "../entidad/cliente.entidad.php";
include_once "../modelo/cliente.modelo.php";

$idEmpleado = 1;
$idCliente = $_POST['txtIdCliente'];
$valorTotal = $_POST['valorTotal'];
$puntosTotal = $_POST['puntosVenta'];

/////////////////////////////

$puntosCliente= $_POST['txtPuntosActCliente']; 

$ventaE = new \entidad\venta();
$ventaE ->setIdEmpleado($idEmpleado);
$ventaE ->setIdCliente($idCliente);
$ventaE ->setValorTotal($valorTotal);
$ventaE ->setPuntosTotal($puntosTotal);

$ventaM = new \modelo\venta($ventaE);
$respuesta = $ventaM->create();

$clienteE = new \entidad\Cliente();
$clienteE->setIdCliente($idCliente);
$clienteE->setPuntosCliente($puntosCliente + $puntosTotal);

$clienteM = new \modelo\Cliente($clienteE);
$respuesta = [$clienteM->actualizarPuntos(),$respuesta];

unset($ventaE);
unset($ventaM);

unset($clienteE);
unset($clienteM);

echo json_encode($respuesta);


?>