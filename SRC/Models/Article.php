<?php
class Article{
    private $idArticle;

    private $nom;

    private $description;

    private $lienPhoto;

    private $actif;

    public function __construct(int $idArticle, string $nom, string $description, string $lienPhoto, bool $actif)
    {
        $this->idArticle = $idArticle;
        $this->nom = $nom;
        $this->description = $description;
        $this->lienPhoto = $lienPhoto;
        $this->actif = $actif;
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of lienPhoto
     */ 
    public function getLienPhoto()
    {
        return $this->lienPhoto;
    }

    /**
     * Set the value of lienPhoto
     *
     * @return  self
     */ 
    public function setLienPhoto($lienPhoto)
    {
        $this->lienPhoto = $lienPhoto;

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