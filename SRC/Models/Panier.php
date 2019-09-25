<?php
class Panier {
    private $idPanier;

    private $dateCreationPanier;

    private $panierPaye;

    private $actif;

    private $litige;

    private $idUser;

    private $idVille;

    public function __construct(int $idPanier, DateTime $dateCreationPanier, bool $panierPaye, bool $actif, bool $litige, int $idUser, int $idVille)
    {
        $this->idPanier = $idPanier;
        $this->dateCreationPanier = $dateCreationPanier;
        $this->panierPaye = $panierPaye;
        $this->actif = $actif;
        $this->litige = $litige;
        $this->idUser = $idUser;
        $this->idVille = $idVille;
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
     * Get the value of dateCreationPanier
     */ 
    public function getDateCreationPanier()
    {
        return $this->dateCreationPanier;
    }

    /**
     * Set the value of dateCreationPanier
     *
     * @return  self
     */ 
    public function setDateCreationPanier($dateCreationPanier)
    {
        $this->dateCreationPanier = $dateCreationPanier;

        return $this;
    }

    /**
     * Get the value of panierPaye
     */ 
    public function getPanierPaye()
    {
        return $this->panierPaye;
    }

    /**
     * Set the value of panierPaye
     *
     * @return  self
     */ 
    public function setPanierPaye($panierPaye)
    {
        $this->panierPaye = $panierPaye;

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

    /**
     * Get the value of litige
     */ 
    public function getLitige()
    {
        return $this->litige;
    }

    /**
     * Set the value of litige
     *
     * @return  self
     */ 
    public function setLitige($litige)
    {
        $this->litige = $litige;

        return $this;
    }

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

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