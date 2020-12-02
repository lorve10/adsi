<?php


namespace modelo;
use PDO;
use Exception;

include_once '../entidad/sabor.entidad.php';
include_once '../entorno/conexion.php';

class Sabor{


    public $idsabor;
    public $nombre;
    public $imagen;
    public $categoria;

    
    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;
    public $informacion;

    public function __construct(\entidad\Sabor $saborE)
    {
        $this->idSabor= $saborE->getIdSabor();
        $this->nombre = $saborE->getNombre();
        $this->imagen = $saborE->getImagen();
        $this->categoria = $saborE->getCategoria();
        $this->conexion = new \Conexion();

    }

    public function read(){

        try {
            $this->sql = "SELECT * FROM sabor WHERE estado='A'";
            $this->result = $this->conexion->conn->query($this->sql);
            $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            $this->retorno = $e->getMessage();
        }
        return $this->retorno;
    }
}
