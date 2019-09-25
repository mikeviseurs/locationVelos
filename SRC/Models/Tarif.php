<?php
class Tarif{
    private $idTarif;

    private $tarifHT;

    private $idTypeUser;

    private $idArticle;

    private $idTVA;

    private $idPeriode;

    private $dureePeriode;

    public function __construct(int $idTarif, float $tarifHT, int $idTypeUser, int $idArticle, int $idTVA, int $idPeriode, int $dureePeriode)
    {
        $this->idTarif = $idTarif;
        $this->tarifHT = $tarifHT;
        $this->idTypeUser = $idTypeUser;
        $this->idArticle = $idArticle;
        $this->idTVA = $idTVA;
        $this->idPeriode = $idPeriode;
        $this->dureePeriode = $dureePeriode;
    }



    /**
     * Get the value of idTarif
     */ 
    public function getIdTarif()
    {
        return $this->idTarif;
    }

    /**
     * Set the value of idTarif
     *
     * @return  self
     */ 
    public function setIdTarif($idTarif)
    {
        $this->idTarif = $idTarif;

        return $this;
    }

    /**
     * Get the value of tarifHT
     */ 
    public function getTarifHT()
    {
        return $this->tarifHT;
    }

    /**
     * Set the value of tarifHT
     *
     * @return  self
     */ 
    public function setTarifHT($tarifHT)
    {
        $this->tarifHT = $tarifHT;

        return $this;
    }

    /**
     * Get the value of idTypeUser
     */ 
    public function getIdTypeUser()
    {
        return $this->idTypeUser;
    }

    /**
     * Set the value of idTypeUser
     *
     * @return  self
     */ 
    public function setIdTypeUser($idTypeUser)
    {
        $this->idTypeUser = $idTypeUser;

        return $this;
    }

    /**
     * Get the value of idArticle
     */ 
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set the value of idArticle
     *
     * @return  self
     */ 
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
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
     * Get the value of dureePeriode
     */ 
    public function getDureePeriode()
    {
        return $this->dureePeriode;
    }

    /**
     * Set the value of dureePeriode
     *
     * @return  self
     */ 
    public function setDureePeriode($dureePeriode)
    {
        $this->dureePeriode = $dureePeriode;

        return $this;
    }
}