<?php
class OpeStock{
    private $idOpeStock;

    private $qtiteArticle;

    private $dateOperation;

    private $motiOperation;

    private $idStock;

    public function __construct(int $idOpeStock, int $qtiteArticle, DateTime $dateOperation, string $motiOperation, int $idStock)
    {
        $this->idOpeStock = $idOpeStock;
        $this->qtiteArticle = $qtiteArticle;
        $this->dateOperation = $dateOperation;
        $this->motiOperation = $motiOperation;
        $this->idStock = $idStock;
    }



    /**
     * Get the value of idOpeStock
     */ 
    public function getIdOpeStock()
    {
        return $this->idOpeStock;
    }

    /**
     * Set the value of idOpeStock
     *
     * @return  self
     */ 
    public function setIdOpeStock($idOpeStock)
    {
        $this->idOpeStock = $idOpeStock;

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
     * Get the value of dateOperation
     */ 
    public function getDateOperation()
    {
        return $this->dateOperation;
    }

    /**
     * Set the value of dateOperation
     *
     * @return  self
     */ 
    public function setDateOperation($dateOperation)
    {
        $this->dateOperation = $dateOperation;

        return $this;
    }

    /**
     * Get the value of motiOperation
     */ 
    public function getMotiOperation()
    {
        return $this->motiOperation;
    }

    /**
     * Set the value of motiOperation
     *
     * @return  self
     */ 
    public function setMotiOperation($motiOperation)
    {
        $this->motiOperation = $motiOperation;

        return $this;
    }

    /**
     * Get the value of idStock
     */ 
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * Set the value of idStock
     *
     * @return  self
     */ 
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;

        return $this;
    }
}