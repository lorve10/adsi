<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/cliente.entidad.php';
include_once '../entorno/conexion.php';

class Cliente
{
    public $idCliente;
    public $identificacionCliente;
    public $nombreCliente;
    public $apellidoCliente;
    public $puntosCliente;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;
    public $informacion;

    public function __construct(\entidad\Cliente $clienteE)
    {
        $this->idCliente = $clienteE->getIdCliente();
        $this->identificacionCliente = $clienteE->getIdentificacionCliente();
        $this->nombreCliente = $clienteE->getNombreCliente();
        $this->apellidoCliente = $clienteE->getapellidoCliente();
        $this->puntosCliente = $clienteE->getPuntosCliente();
        $this->conexion = new \Conexion();

    }

    public function autocomplete()
    {
 
      try {
           $this->sql = "SELECT * FROM cliente WHERE identificacionCliente LIKE CONCAT('%',$this->identificacionCliente,'%') AND estado='A'";
           $this->result = $this->conexion->conn->query($this->sql);
           $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);

           foreach ($this->retorno as $key => $value) {
                $this->informacion[] = array(
                     "idCliente" => $value['idCliente'],
                     "identificacion" =>  $value['identificacionCliente'],
                     "label" => $value['nombreCliente'] . " " . $value['apellidoCliente'],
                     "nombre" => $value['nombreCliente'],
                     "apellido" => $value['apellidoCliente'],
                    "puntos" => $value['puntosCliente']);
           }
      } catch (Exception $e) {
           $this->informacion = $e->getMessage();
      }
           return $this->informacion;
      }

      public function create()
      {
          try {
               
               $this->result = $this->conexion->conn->prepare("INSERT INTO cliente VALUES (NULL , :identificacion, :nombre , :apellido, 0, 'A')");
               $this->result->bindParam(':identificacion', $this->identificacionCliente);
               $this->result->bindParam(':nombre', $this->nombreCliente);
               $this->result->bindParam(':apellido', $this->apellidoCliente);
               $this->result->execute();

               $this->retorno['ultimoId']= $this->conexion->ultimoId();
               $this->retorno['mensaje']= "Exito: Cliente Creado";
     
          } catch (Exception $e) {
               $this->retorno['mensaje'] = $e->getMessage();
          }
               return $this->retorno;
      }

      public function read()
      {
   
        try {
             $this->sql = "SELECT * FROM cliente WHERE estado='A'";
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;
        }

        public function update()
     {
  
       try {
            $this->sql = "UPDATE cliente SET nombreCliente='$this->nombreCliente', apellidoCliente= '$this->apellidoCliente'  WHERE idCliente=$this->idCliente";
            $this->result = $this->conexion->conn->query($this->sql);
            $this->retorno = "Exito: Cliente Modificado";
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }


     public function delete()
     {

     try {
          $this->sql = "UPDATE cliente SET estado='I' WHERE idCliente=$this->idCliente";
          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = "Exito: Cliente Eliminado";
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
         }

     public function actualizarPuntos()
     {

     try {

          $this->result = $this->conexion->conn->prepare("UPDATE cliente SET puntosCliente = :puntos WHERE idCliente = :idCliente");
          $this->result->bindParam(':puntos', $this->puntosCliente);
          $this->result->bindParam(':idCliente', $this->idCliente);
          $this->result->execute();
          $this->retorno = "Puntos Actualizados : ".$this->puntosCliente;
              
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
          }

}


?>