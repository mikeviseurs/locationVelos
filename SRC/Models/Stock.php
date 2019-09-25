<?php
class Stock{
    private $idStock;

    private $qtiteStock;

    private $idVille;

    private $idArticle;

    public function __construct(int $idStock, int $qtiteStock, int $idVille, int $idArticle)
    {
        $this->idStock = $idStock;
        $this->qtiteStock = $qtiteStock;
        $this->idVille = $idVille;
        $this->idArticle = $idArticle;
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

    /**
     * Get the value of qtiteStock
     */ 
    public function getQtiteStock()
    {
        return $this->qtiteStock;
    }

    /**
     * Set the value of qtiteStock
     *
     * @return  self
     */ 
    public function setQtiteStock($qtiteStock)
    {
        $this->qtiteStock = $qtiteStock;

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
}