<?php
class CarteBleue {
    private $idCarteBleue;

    private $numeroCB;

    private $nomTitulaire;

    private $dateValidite;

    private $idUsers;

    public function __construct(int $idCarteBleue, string $numeroCB, string $nomTitulaire, DateTime $dateValidite, int $idUsers)
    {
        $this->idCarteBleue = $idCarteBleue;
        $this->numeroCB = $numeroCB;
        $this->nomTitulaire = $nomTitulaire;
        $this->dateValidite = $dateValidite;
        $this->idUsers = $idUsers;
    }



    /**
     * Get the value of idCarteBleue
     */ 
    public function getIdCarteBleue()
    {
        return $this->idCarteBleue;
    }

    /**
     * Set the value of idCarteBleue
     *
     * @return  self
     */ 
    public function setIdCarteBleue($idCarteBleue)
    {
        $this->idCarteBleue = $idCarteBleue;

        return $this;
    }

    /**
     * Get the value of numeroCB
     */ 
    public function getNumeroCB()
    {
        return $this->numeroCB;
    }

    /**
     * Set the value of numeroCB
     *
     * @return  self
     */ 
    public function setNumeroCB($numeroCB)
    {
        $this->numeroCB = $numeroCB;

        return $this;
    }

    /**
     * Get the value of nomTitulaire
     */ 
    public function getNomTitulaire()
    {
        return $this->nomTitulaire;
    }

    /**
     * Set the value of nomTitulaire
     *
     * @return  self
     */ 
    public function setNomTitulaire($nomTitulaire)
    {
        $this->nomTitulaire = $nomTitulaire;

        return $this;
    }

    /**
     * Get the value of dateValidite
     */ 
    public function getDateValidite()
    {
        return $this->dateValidite;
    }

    /**
     * Set the value of dateValidite
     *
     * @return  self
     */ 
    public function setDateValidite($dateValidite)
    {
        $this->dateValidite = $dateValidite;

        return $this;
    }

    /**
     * Get the value of idUsers
     */ 
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set the value of idUsers
     *
     * @return  self
     */ 
    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;

        return $this;
    }
}