<?php
require "connect.php";
require "../Controler/fonctions.php";
//créer la variable de connection
$db=connect();

$nomArticle = isset($_POST['nomArticle'])? htmlspecialchars($_POST['nomArticle'],ENT_QUOTES) : null;
$descriptionArticle = isset($_POST['descriptionArticle'])? htmlspecialchars($_POST['descriptionArticle'],ENT_QUOTES) : null;
$photoArticle = isset($_POST['photoArticle'])? htmlspecialchars($_POST['photoArticle'],ENT_QUOTES) : null;
$actif=1;
// echo $nomArticle,"<br>",$descriptionArticle,"<br>",$photoArticle;

try {
    //préparation de la requette
    $req=$db->prepare("INSERT INTO article (nom_article, description, lien_photo,actif) VALUES (:nomArticle,:descriptionArticle,:photoArticle,:actif)");

    //changement des paramètres et contrôle des champs
    $req->bindParam(":nomArticle",$nomArticle,PDO::PARAM_STR);
    $req->bindParam(":descriptionArticle",$descriptionArticle,PDO::PARAM_STR);
    $req->bindParam(":photoArticle",$photoArticle,PDO::PARAM_STR);
    $req->bindParam(":actif",$actif,PDO::PARAM_INT);

    $req->execute();
    header("location:confirmAjoutArticle.php");
} catch (Exception $e) {
    echo $e->getMessage();
}
