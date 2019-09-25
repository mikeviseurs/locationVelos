<?php
class Adresse {
    private $idAdresse;

    private $adresse1;

    private $adresse2;

    private $codePostal;

    private $idVille;

    public function __construct(int $idAdresse, string $adresse1, string $adresse2, string $codePostal, string $idVille)
    {
        $this->idAdresse = $idAdresse;
        $this->adresse1 = $adresse1;
        $this->adresse2 = $adresse2;
        $this->codePostal = $codePostal;
        $this->idVille = $idVille;
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

    /**
     * Get the value of adresse1
     */ 
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set the value of adresse1
     *
     * @return  self
     */ 
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get the value of adresse2
     */ 
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set the value of adresse2
     *
     * @return  self
     */ 
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get the value of codePostal
     */ 
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     *
     * @return  self
     */ 
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
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
}