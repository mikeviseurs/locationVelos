<?php
class TypeUser{
    private $idTypeUser;

    private $nomTypeUser;

    public function __construct(int $idTypeUser, string $nomTypeUser)
    {
        $this->idTypeUser = $idTypeUser;
        $this->nomTypeUser = $nomTypeUser;
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
     * Get the value of nomTypeUser
     */ 
    public function getNomTypeUser()
    {
        return $this->nomTypeUser;
    }

    /**
     * Set the value of nomTypeUser
     *
     * @return  self
     */ 
    public function setNomTypeUser($nomTypeUser)
    {
        $this->nomTypeUser = $nomTypeUser;

        return $this;
    }
}