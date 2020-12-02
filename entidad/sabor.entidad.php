<?php 

namespace entidad;

class Sabor 
{
    public $idsabor;
    public $nombre;
    public $imagen;
    public $categoria;
    


    /**
     * Get the value of idsabor
     */ 
    public function getIdsabor()
    {
        return $this->idsabor;
    }

    /**
     * Set the value of idsabor
     *
     * @return  self
     */ 
    public function setIdsabor($idsabor)
    {
        $this->idsabor = $idsabor;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
}

?>