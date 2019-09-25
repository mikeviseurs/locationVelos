<?php
class Periode {
    private $idPeriode;

    private $nomPeriode;

    private $abrvPeriode;

    private $actif;

    public function __construct(int $idPeriode, string $nomPeriode, string $abrvPeriode, bool $actif)
    {
        $this->idPeriode = $idPeriode;
        $this->nomPeriode = $nomPeriode;
        $this->abrvPeriode = $abrvPeriode;
        $this->actif = $actif;
    }



    /**
     * Get the value of idPeriode
     */ 
    public function getIdPeriode()
    {
        return $this->idPeriode;
    }

    /**
     * Set the value of idPeriode
     *
     * @return  self
     */ 
    public function setIdPeriode($idPeriode)
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    /**
     * Get the value of nomPeriode
     */ 
    public function getNomPeriode()
    {
        return $this->nomPeriode;
    }

    /**
     * Set the value of nomPeriode
     *
     * @return  self
     */ 
    public function setNomPeriode($nomPeriode)
    {
        $this->nomPeriode = $nomPeriode;

        return $this;
    }

    /**
     * Get the value of abrvPeriode
     */ 
    public function getAbrvPeriode()
    {
        return $this->abrvPeriode;
    }

    /**
     * Set the value of abrvPeriode
     *
     * @return  self
     */ 
    public function setAbrvPeriode($abrvPeriode)
    {
        $this->abrvPeriode = $abrvPeriode;

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