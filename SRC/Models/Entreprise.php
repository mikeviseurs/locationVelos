<?php
class Entreprise {
    private $idEntreprise;

    private $nomEntreprise;

    private $numeroRCS;

    private $idAdresse;

    public function __construct(int $idEntreprise, string $nomEntreprise, string $numeroRCS, int $idAdresse)
    {
        $this->idEntreprise = $idEntreprise;
        $this->nomEntreprise = $nomEntreprise;
        $this->numeroRCS = $numeroRCS;
        $this->idAdresse = $idAdresse;
    }



    /**
     * Get the value of idEntreprise
     */ 
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set the value of idEntreprise
     *
     * @return  self
     */ 
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get the value of nomEntreprise
     */ 
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set the value of nomEntreprise
     *
     * @return  self
     */ 
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get the value of numeroRCS
     */ 
    public function getNumeroRCS()
    {
        return $this->numeroRCS;
    }

    /**
     * Set the value of numeroRCS
     *
     * @return  self
     */ 
    public function setNumeroRCS($numeroRCS)
    {
        $this->numeroRCS = $numeroRCS;

        return $this;
    }

    /**
     * Get the value of idAdresse
     */ 
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }

    /**
     * Set the value of idAdresse
     *
     * @return  self
     */ 
    public function setIdAdresse($idAdresse)
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }
}