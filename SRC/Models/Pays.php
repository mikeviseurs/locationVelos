<?php
class Pays{
    private $idPays;

    private $nomPays;

    public function __construct(int $idPays, string $nomPays)
    {
        $this->idPays = $idPays;
        $this->nomPays = $nomPays;
    }



    /**
     * Get the value of idPays
     */ 
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * Set the value of idPays
     *
     * @return  self
     */ 
    public function setIdPays($idPays)
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get the value of nomPays
     */ 
    public function getNomPays()
    {
        return $this->nomPays;
    }

    /**
     * Set the value of nomPays
     *
     * @return  self
     */ 
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }
}