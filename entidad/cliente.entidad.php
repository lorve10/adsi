<?php
namespace entidad;

class Cliente

{
    public $idCliente;
    public $identificacionCliente;
    public $nombreCliente;
    public $apellidoCliente;
    public $puntosCliente;

    /**
     * Get the value of idCliente
     */ 
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     *
     * @return  self
     */ 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }
 
    /**
     * Get the value of nombreCliente
     */ 
    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }

    /**
     * Set the value of nombreCliente
     *
     * @return  self
     */ 
    public function setNombreCliente($nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;

        return $this;
    }

    /**
     * Get the value of apellidoCliente
     */ 
    public function getApellidoCliente()
    {
        return $this->apellidoCliente;
    }

    /**
     * Set the value of apellidoCliente
     *
     * @return  self
     */ 
    public function setApellidoCliente($apellidoCliente)
    {
        $this->apellidoCliente = $apellidoCliente;

        return $this;
    }

    /**
     * Get the value of puntosCliente
     */ 
    public function getPuntosCliente()
    {
        return $this->puntosCliente;
    }

    /**
     * Set the value of puntosCliente
     *
     * @return  self
     */ 
    public function setPuntosCliente($puntosCliente)
    {
        $this->puntosCliente = $puntosCliente;

        return $this;
    }

    /**
     * Get the value of identificacionCliente
     */ 
    public function getIdentificacionCliente()
    {
        return $this->identificacionCliente;
    }

    /**
     * Set the value of identificacionCliente
     *
     * @return  self
     */ 
    public function setIdentificacionCliente($identificacionCliente)
    {
        $this->identificacionCliente = $identificacionCliente;

        return $this;
    }
}


?>
