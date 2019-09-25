<?php
class TVA{
    private $idTVA;

    private $valeurTVA;

    private $actif;

    public function __construct(int $idTVA, float $valeurTVA, bool $actif)
    {
        $this->idTVA = $idTVA;
        $this->valeurTVA = $valeurTVA;
        $this->actif = $actif;
    }



    /**
     * Get the value of idTVA
     */ 
    public function getIdTVA()
    {
        return $this->idTVA;
    }

    /**
     * Set the value of idTVA
     *
     * @return  self
     */ 
    public function setIdTVA($idTVA)
    {
        $this->idTVA = $idTVA;

        return $this;
    }

    /**
     * Get the value of valeurTVA
     */ 
    public function getValeurTVA()
    {
        return $this->valeurTVA;
    }

    /**
     * Set the value of valeurTVA
     *
     * @return  self
     */ 
    public function setValeurTVA($valeurTVA)
    {
        $this->valeurTVA = $valeurTVA;

        return $this;
    }

    /**
     * Get the value of actif
     */ 
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set the value of actif
     *
     * @return  self
     */ 
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }
}