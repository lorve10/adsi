<?php

namespace entidad;

class Venta
{
    private $idVenta;
    private $fecha;
    private $idEmpleado;
    private $idCliente;
    private $valorTotal;
    private $puntosTotal;
    
    /**
     * Get the value of idVenta
     */ 
    public function getIdVenta()
    {
        return $this->idVenta;
    }

    /**
     * Set the value of idVenta
     *
     * @return  self
     */ 
    public function setIdVenta($idVenta)
    {
        $this->idVenta = $idVenta;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

   

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
     * Get the value of valorTotal
     */ 
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set the value of valorTotal
     *
     * @return  self
     */ 
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get the value of puntosTotal
     */ 
    public function getPuntosTotal()
    {
        return $this->puntosTotal;
    }

    /**
     * Set the value of puntosTotal
     *
     * @return  self
     */ 
    public function setPuntosTotal($puntosTotal)
    {
        $this->puntosTotal = $puntosTotal;

        return $this;
    }

    /**
     * Get the value of idEmpleado
     */ 
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set the value of idEmpleado
     *
     * @return  self
     */ 
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }
}



?>