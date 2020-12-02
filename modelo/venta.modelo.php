<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/venta.entidad.php';
include_once '../entorno/conexion.php';

class Venta
{
    private $idVenta;
    private $fecha;
    private $idEmpleado;
    private $idCliente;
    private $valorTotal;
    private $puntosTotal;


    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    public $informacion;


    public function __construct(\entidad\Venta $ventaE){

        $this->idEmpleado = $ventaE->getIdEmpleado();
        $this->idCliente = $ventaE->getIdCliente();
        $this->valorTotal = $ventaE->getValorTotal();
        $this->puntosTotal = $ventaE->getPuntosTotal();

        $this->conexion = new \Conexion();
   }


   public function create()
   {
       try{

            $this->result = $this->conexion->conn->prepare("INSERT INTO venta VALUES (NULL , now(), :empleado , :cliente,:valorTotal, :puntosTotal , 'A')");
            $this->result->bindParam(':empleado', $this->idEmpleado);
            $this->result->bindParam(':cliente', $this->idCliente);
            $this->result->bindParam(':valorTotal', $this->valorTotal);
            $this->result->bindParam(':puntosTotal', $this->puntosTotal );
            $this->result->execute();

            $this->retorno = "Exito: Venta Realizada";
            
        } catch (Exception $e) {
        
            $this->retorno = $e->getMessage();
        }
            return $this->retorno;
   }

}


?>