<?php
namespace entidad;

class Categoria {

    public $idCategoria;
    public $nombreCat;
    public $precioCat;

    /**
     * Get the value of idCategoria
     */ 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get the value of nombreCat
     */ 
    public function getNombreCat()
    {
        return $this->nombreCat;
    }

    /**
     * Set the value of nombreCat
     *
     * @return  self
     */ 
    public function setNombreCat($nombreCat)
    {
        $this->nombreCat = $nombreCat;

        return $this;
    }

    /**
     * Get the value of precioCat
     */ 
    public function getPrecioCat()
    {
        return $this->precioCat;
    }

    /**
     * Set the value of precioCat
     *
     * @return  self
     */ 
    public function setPrecioCat($precioCat)
    {
        $this->precioCat = $precioCat;

        return $this;
    }
}


?>
