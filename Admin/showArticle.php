<?php
require "connect.php";
$db=connect();

$actif=1;
try{
$req=$db->prepare("SELECT nom_article, description, lien_photo FROM article WHERE actif=:actif");

$req->bindParam(":actif",$actif,PDO::PARAM_INT);

$req->execute();

/*
while($data=$req->fetchAll()){
    foreach ($data as $key => $value) {
        echo "<p>valeur : ".$value['nom_article']."<BR>".$value['description']."<BR>".$value['lien_photo']."</p>";
    }
}
*/
/*
while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>valeur : ".$data['nom_article']."<BR>".$data['description']."<BR>".$data['lien_photo']."</p>";
}
*/
while ($data=$req->fetchObject()){
    echo "<p>valeur : ".$data->nom_article."<BR>".$data->description."<BR>".$data->lien_photo."</p>";
}
}catch(Exception $e){
    die("Error :".$e->getMessage().' '.$e->getCode());
}
