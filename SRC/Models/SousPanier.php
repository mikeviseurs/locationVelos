<?php
class SousPanier {
    private $idSousPanier;

    private $qtiteArticle;

    private $nbDuree;

    private $dateRetourPrevue;

    private $dateRetourReel;

    private $idPanier;

    private $idTarif;

    public function __construct(int $idSousPanier, int $qtiteArticle, int $nbDuree, DateTime $dateRetourPrevue, DateTime $dateRetourReel, int $idPanier, int $idTarif)
    {
        $this->idSousPanier = $idSousPanier;
        $this->qtiteArticle = $qtiteArticle;
        $this->nbDuree = $nbDuree;
        $this->dateRetourPrevue = $dateRetourPrevue;
        $this->dateRetourReel = $dateRetourReel;
        $this->idPanier = $idPanier;
        $this->idTarif = $idTarif;
    }



    /**
     * Get the value of idSousPanier
     */ 
    public function getIdSousPanier()
    {
        return $this->idSousPanier;
    }

    /**
     * Set the value of idSousPanier
     *
     * @return  self
     */ 
    public function setIdSousPanier($idSousPanier)
    {
        $this->idSousPanier = $idSousPanier;

        return $this;
    }

    /**
     * Get the value of qtiteArticle
     */ 
    public function getQtiteArticle()
    {
        return $this->qtiteArticle;
    }

    /**
     * Set the value of qtiteArticle
     *
     * @return  self
     */ 
    public function setQtiteArticle($qtiteArticle)
    {
        $this->qtiteArticle = $qtiteArticle;

        return $this;
    }

    /**
     * Get the value of nbDuree
     */ 
    public function getNbDuree()
    {
        return $this->nbDuree;
    }

    /**
     * Set the value of nbDuree
     *
     * @return  self
     */ 
    public function setNbDuree($nbDuree)
    {
        $this->nbDuree = $nbDuree;

        return $this;
    }

    /**
     * Get the value of dateRetourPrevue
     */ 
    public function getDateRetourPrevue()
    {
        return $this->dateRetourPrevue;
    }

    /**
     * Set the value of dateRetourPrevue
     *
     * @return  self
     */ 
    public function setDateRetourPrevue($dateRetourPrevue)
    {
        $this->dateRetourPrevue = $dateRetourPrevue;

        return $this;
    }

    /**
     * Get the value of dateRetourReel
     */ 
    public function getDateRetourReel()
    {
        return $this->dateRetourReel;
    }

    /**
     * Set the value of dateRetourReel
     *
     * @return  self
     */ 
    public function setDateRetourReel($dateRetourReel)
    {
        $this->dateRetourReel = $dateRetourReel;

        return $this;
    }

    /**
     * Get the value of idPanier
     */ 
    public function getIdPanier()
    {
        return $this->idPanier;
    }

    /**
     * Set the value of idPanier
     *
     * @return  self
     */ 
    public function setIdPanier($idPanier)
    {
        $this->idPanier = $idPanier;

        return $this;
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
}