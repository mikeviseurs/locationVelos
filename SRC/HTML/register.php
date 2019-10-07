<!doctype html>
<html lang="fr">

<head>
    <title>Location de Vélo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../Libs/css/register.css">
</head>

<body>
    <?php
    require __DIR__."/header.php";
    require __DIR__ . "/../SRC/Controler/Form.php";
    nav("register");
    ?>
    <div class="bg-light">
        <div class="container bg-white pt-3">
            <h1 class="text-center">S'enregistrer</h1>
            <?php
            $form = new Form("POST", "../Admin/ajoutUser.php");
            echo $form->getDebutForm();
            ?>
            <div class="form-group">
                <fieldset class="border p-2 mb-2">
                    <?php
                    echo $form->getLabel("Identifiant", "login");
                    echo $form->getInput("text", "login", "login", "form-control", "Identifiant déjà utilisé");
                    ?>
                    <div class="row">
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Mot de passe", "psswd");
                            echo $form->getInput("password", "psswd", "psswd", "form-control", "Mot de passe invalide");
                            ?>
                        </div>
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Confirmation du mot de passe", "psswd2");
                            echo $form->getInput("password", "psswd2", "psswd2", "form-control");
                            ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border p-2 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Nom", "nom");
                            echo $form->getInput("text", "nom", "nom", "form-control");
                            ?>
                        </div>
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Prénom", "prenom");
                            echo $form->getInput("text", "prenom", "prenom", "form-control");
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <?php
                            echo $form->getLabel("Date de naissance", "birth");
                            echo $form->getInput("date", "birth", "birth", "form-control", "Date de naissance invalide");
                            ?>
                        </div>
                        <div class="col-4 text-center">
                            <div class="border m-2 p-1">
                                <h6 class="mt-3">Sexe</h6>
                                <div class="form-check-inline">
                                    <?php
                                    echo $form->getRadio("sexe", "sexe1", "H", "form-check-inline", "checked");
                                    echo $form->getLabel("Homme", "sexe1", "form-check-label");
                                    ?>
                                </div>
                                <div class="form-check-inline">
                                    <?php
                                    echo $form->getRadio("sexe", "sexe2", "F", "form-check-input");
                                    echo $form->getLabel("Femme", "sexe2", "form-check-label");
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="border m-2 p-1">
                                <h6 class="mt-3">Type</h6>
                                <div class="form-check-inline">
                                    <?php
                                    echo $form->getRadio("type", "type1", "P", "form-check-input", "checked");
                                    echo $form->getLabel("Particulier", "type1", "form-check-label");
                                    ?>
                                </div>
                                <div class="form-check-inline">
                                    <?php
                                    echo $form->getRadio("type", "type2", "E", "form-check-input");
                                    echo $form->getLabel("Professionnel", "type2", "form-check-label");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border p-2 mb-2">
                    <?php
                    echo $form->getLabel("Adresse", "adresse");
                    echo $form->getInput("text", "adresse", "adresse", "form-control");
                    echo $form->getLabel("Supplément d'adresse", "adresse2");
                    echo $form->getInput("text", "adresse2", "adresse2", "form-control");
                    ?>
                    <div class="row">
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Code Postal", "cp");
                            echo $form->getInput("text", "cp", "cp", "form-control", "Code postal invalide");
                            ?>
                        </div>
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Ville", "ville");
                            echo $form->getInput("text", "ville", "ville", "form-control");
                            ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border p-2 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Téléphone", "tel");
                            echo $form->getInput("text", "tel", "tel", "form-control", "Numéro de téléphone invalide");
                            ?>
                        </div>
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Email", "mail");
                            echo $form->getInput("text", "mail", "mail", "form-control", "Email invalide");
                            ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border p-2 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Nom de l'entreprise", "nomEntreprise");
                            echo $form->getInput("text", "nomEntreprise", "nomEntreprise", "form-control");
                            ?>
                        </div>
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Numéro RCS", "numRCS");
                            echo $form->getInput("text", "numRCS", "numRCS", "form-control");
                            ?>
                        </div>
                    </div>
                    <?php
                    echo $form->getLabel("Adresse de l'entreprise", "adresseEntreprise");
                    echo $form->getInput("text", "adresseEntreprise", "adresseEntreprise", "form-control");
                    echo $form->getLabel("Supplément d'adresse", "adresseEntreprise2");
                    echo $form->getInput("text", "adresseEntreprise2", "adresseEntreprise2", "form-control");
                    ?>
                    <div class="row">
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Code Postal", "cpEntreprise");
                            echo $form->getInput("text", "cpEntreprise", "cpEntreprise", "form-control", "Code postal invalide");
                            ?>
                        </div>
                        <div class="col-6">
                            <?php
                            echo $form->getLabel("Ville", "villeEntreprise");
                            echo $form->getInput("text", "villeEntreprise", "villeEntreprise", "form-control");
                            ?>
                        </div>
                    </div>
                </fieldset>
                <div class="row py-3 mb-2">
                    <div class="col-6">
                        <?php
                        echo $form->getButton("submit", "Valider");
                        ?>
                    </div>
                    <div class="col-6">
                        <?php
                        echo $form->getButton("reset", "Annuler", "btn-danger");
                        ?>
                    </div>
                </div>
            </div>
            <?php
            echo $form->getFinForm();
            ?>
        </div>
    </div>
    <?php
    require __DIR__."/footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>