<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/categoria.entidad.php';
include_once '../entorno/conexion.php';

class Categoria{
    
    public $idCategoria;
    public $nombreCat;
    public $precioCat;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Categoria $categoriaE){
        $this->idCategoria = $categoriaE->getIdCategoria();
        $this->nombreCat = $categoriaE->getNombreCat();
        $this->precioCat = $categoriaE->getPrecioCat();
        $this->conexion = new \Conexion();
   }

   public function create()
   {

     try {
          $this->sql = "INSERT INTO categoria VALUES (NULL ,'$this->nombreCat',$this->precioCat,'A')";
          $this->conexion->conn->query($this->sql);
          $this->retorno = "Exito: Categoria Creada";

     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
   }

   public function read()
   {

     try {
          $this->sql = "SELECT * FROM categoria WHERE estado='A'";
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
            $this->sql = "UPDATE categoria SET nombre='$this->nombreCat', precio=$this->precioCat WHERE idCategoria=$this->idCategoria";
            $this->result = $this->conexion->conn->query($this->sql);
            $this->retorno = "Exito: Categoria Modificada";
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }


     public function delete()
     {

     try {
          $this->sql = "UPDATE categoria SET estado='I' WHERE idCategoria= $this->idCategoria";
          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = "Exito: Categoria Eliminada";
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
         }

}

?>