<?php
class Villes{
    private $idVille;

    private $nomVille;

    private $centreLocation;

    private $idPays;

    public function __construct(int $idVille, string $nomVille, int $idPays)
    {
        $this->idVille = $idVille;
        $this->nomVille = $nomVille;
        $this->idPays = $idPays;
    }



    /**
     * Get the value of idVille
     */ 
    public function getIdVille()
    {
        return $this->idVille;
    }

    /**
     * Set the value of idVille
     *
     * @return  self
     */ 
    public function setIdVille($idVille)
    {
        $this->idVille = $idVille;

        return $this;
    }

    /**
     * Get the value of nomVille
     */ 
    public function getNomVille()
    {
        return $this->nomVille;
    }

    /**
     * Set the value of nomVille
     *
     * @return  self
     */ 
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get the value of centreLocation
     */ 
    public function getCentreLocation()
    {
        return $this->centreLocation;
    }

    /**
     * Set the value of centreLocation
     *
     * @return  self
     */ 
    public function setCentreLocation($centreLocation)
    {
        $this->centreLocation = $centreLocation;

        return $this;
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
}