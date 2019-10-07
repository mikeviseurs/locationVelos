<?php 
require "../SRC/controler/Form.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Ajouter un Article</h1>
        <?php
        $form=new Form("post","ajoutArticlePHP.php");
        echo $form->getDebutForm();
        echo $form->getLabel("Nom de l'article","nomArticle");
        echo $form->getInput("text","nomArticle","nomArticle","form-control");
        echo $form->getLabel("Description","descriptionArticle");
        echo $form->getTextArea("descriptionArticle","descriptionArticle",30,10,"description de l'article","form-control mb-3");
        echo $form->getLabel("Lien de photo","photoArticle");
        echo $form->getInput("file","photoArticle","photoArticle","form-control-file mb-3");
        echo "<div class='row'><div class='col'>";
        echo $form->getButton("submit","Enregistrer"),"</div>";
        echo "<div class='col'>",$form->getButton("reset","Annuler","btn-danger"),"</div></div>";
        echo $form->getFinForm();
        ?>
    </div>
</body>

</html>