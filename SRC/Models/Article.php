<?php

use Controler\DataBaseManager;

class Article
{
    private $idArticle;

    private $nom;

    private $description;

    private $lienPhoto;

    private $actif;

    public function __construct(int $idArticle=null, string $nom=null, string $description=null, string $lienPhoto=null, bool $actif=null)
    {
        $this->idArticle = $idArticle;
        $this->nom = $nom;
        $this->description = $description;
        $this->lienPhoto = $lienPhoto;
        $this->actif = $actif;
    }

    public function afficheCardArticle()
    {
        ?>
        <div class="card mb-3 mx-auto" style="max-width: 720px;">
            <div class="row no-gutters">
                <div class="col-md-4 pt-5">
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal<?php echo $this->getIdArticle(); ?>">
                        <img src="../Libs/img/<?php echo $this->getLienPhoto();?>" class="card-img" alt="<?php echo $this->getNom();?>">
                    </button>
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal<?php echo $this->getIdArticle(); ?>">Détails</button>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $this->getNom();?></h5>
                        <p class="card-text">prix unitaire à l'heure : 2€/heure</p>
                        <p class="card-text">prix unitaire à la journée : 13.99€/jour</p>
                        <p class="card-text">prix unitaire à la semaine : 12.49€/jour</p>
                        <p class="card-text">prix unitaire au mois : 10.99€/jour</p>
                        <div class="form-group row">
                            <label class="col-3 col-form-label" for="timeNb">Durée :</label>
                            <input class="form-control col-4" type="number" name="timeNb" id="timeNb" value="0" min="0">
                            <select class="form-control col-5" name="timeType" id="timeType">
                                <option value="Heures">Heures</option>
                                <option value="Jours">Jours</option>
                                <option value="Semaines">Semaines</option>
                                <option value="Mois">Mois</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label" for="quantity">Quantité</label>
                            <input class="form-control col-4" type="number" name="quantity" id="quantity" value="0" min="0">
                            <div class="col-5 font-weight-bolder">
                                sous-total : <span id="stt_elec" class="text-danger">00€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
    public function afficheModalArticle()
    {
        ?>
        <div class="modal fade" id="modal<?php echo $this->getIdArticle(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->getNom();?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="../Libs/img/<?php echo $this->getLienPhoto();?>" class="card-img" alt="<?php echo $this->getNom();?>">
                    <p><?php echo $this->getDescription();?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    }

    static public function getAllArticles()
    {
        $con = DataBaseManager::getConnection();
        $req = $con->prepare("SELECT * FROM article");
        $req->execute();
        $results = array();
        while (($row = $req->fetch(PDO::FETCH_OBJ)) != null) {
            array_push($results, $row);
        }

        if (count($results) > 0) {
            return $results;
        } else {
            $erreur = new Exception();
            Errors::saveErrors($erreur->getMessage());
        }
    }
    public function addArticle($article)
    {
        $this->idArticle = $article->idarticle;
        $this->nom = $article->nom_article;
        $this->description = $article->description;
        $this->lienPhoto = $article->lien_photo;
        $this->actif = $article->actif;
    }

    static public function getArticleById($id)
    {
        $con = DataBaseManager::getConnection();
        $req = $con->prepare("SELECT * FROM article WHERE idarticle=:id");
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();
        $results = array();
        while (($row = $req->fetch(PDO::FETCH_OBJ)) != null) {
            array_push($results, $row);
        }

        if (count($results) > 0) {
            return $results;
        } else {
            $erreur = new Exception();
            Errors::saveErrors($erreur->getMessage());
        }
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
