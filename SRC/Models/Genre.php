<?php
class Genre {
    private $idGenre;

    private $nomGenre;

    private $abrvGenre;

    public function __construct(int $idGenre, string $nomGenre, int $abrvGenre)
    {
        $this->idGenre = $idGenre;
        $this->nomGenre = $nomGenre;
        $this->abrvGenre = $abrvGenre;
    }



    /**
     * Get the value of idGenre
     */ 
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set the value of idGenre
     *
     * @return  self
     */ 
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get the value of nomGenre
     */ 
    public function getNomGenre()
    {
        return $this->nomGenre;
    }

    /**
     * Set the value of nomGenre
     *
     * @return  self
     */ 
    public function setNomGenre($nomGenre)
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }

    /**
     * Get the value of abrvGenre
     */ 
    public function getAbrvGenre()
    {
        return $this->abrvGenre;
    }

    /**
     * Set the value of abrvGenre
     *
     * @return  self
     */ 
    public function setAbrvGenre($abrvGenre)
    {
        $this->abrvGenre = $abrvGenre;

        return $this;
    }
}