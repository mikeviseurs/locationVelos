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
    require __DIR__."/../SRC/Controler/header.php";
    require __DIR__."/../SRC/Controler/Form.php";
    ?>
    <div class="bg-light">
        <div class="container bg-white pt-3">
            <h1 class="text-center">S'enregistrer</h1>
            <?php
                $form = new Form("POST","../Admin/ajoutUser.php");
                echo $form->getDebutForm();
            ?>
                <div class="form-group">
                    <fieldset class="border p-2 mb-2">
                        <?php
                        echo $form->getLabel("Identifiant","login");
                        echo $form->getInput("text","login","login","form-control","Identifiant déjà utilisé");
                        ?>
                        <div class="row">
                            <div class="col-6">
                                <?php
                                echo $form->getLabel("Mot de passe","psswd");
                                echo $form->getInput("password","psswd","psswd","form-control","Mot de passe invalide");
                                ?>
                            </div>
                            <div class="col-6">
                                <?php
                                echo $form->getLabel("Confirmation du mot de passe","psswd2");
                                echo $form->getInput("password","psswd2","psswd2","form-control");
                                ?>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2 mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="nom">Nom</label>
                                <input class="form-control" type="text" name="nom" id="nom">
                            </div>
                            <div class="col-6">
                                <label for="prenom">Prénom</label>
                                <input class="form-control" type="text" name="prenom" id="prenom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="birth">Date de naissance</label>
                                <input class="form-control" type="date" name="birth" id="birth" aria-describedby="birthHelp">
                                <small id="birthHelp" class="form-text text-danger">Date de naissance invalide</small>
                            </div>
                            <div class="col-4 text-center">
                                <div class="border m-2 p-1">
                                    <h6 class="mt-3">Sexe</h6>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="sexe1" value="H" checked>
                                        <label class="form-check-label" for="sexe1">Homme</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="sexe2" value="F">
                                        <label class="form-check-label" for="sexe2">Femme</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="border m-2 p-1">
                                    <h6 class="mt-3">Type</h6>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="type1" value="P" checked>
                                        <label class="form-check-label" for="type1">Particulier</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="type2" value="E">
                                        <label class="form-check-label" for="type2">Professionnel</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2 mb-2">
                        <label for="adresse">Adresse</label>
                        <input class="form-control" type="text" name="adresse" id="adresse">
                        <label for="adresse2">Supplément d'adresse</label>
                        <input class="form-control" type="text" name="adresse2" id="adresse2">
                        <div class="row">
                            <div class="col-6">
                                <label for="cp">Code Postal</label>
                                <input class="form-control" type="text" minlength="0" maxlength="6" name="cp" id="cp" aria-describedby="cpHelp">
                                <small id="cpHelp" class="form-text text-danger">Code postal invalide</small>
                            </div>
                            <div class="col-6">
                                <label for="ville">Ville</label>
                                <input class="form-control" type="text" name="ville" id="ville">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2 mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="tel">Téléphone</label>
                                <input class="form-control" type="tel" name="tel" id="tel" aria-describedby="telHelp">
                                <small id="telHelp" class="form-text text-danger">Numéro de téléphone invalide</small>
                            </div>
                            <div class="col-6">
                                <label for="mail">Email</label>
                                <input class="form-control" type="email" name="mail" id="mail" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-danger">Email invalide</small>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2 mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="nomEntreprise">Nom de l'entreprise</label>
                                <input class="form-control" type="text" name="nomEntreprise" id="nomEntreprise">
                            </div>
                            <div class="col-6">
                                <label for="numRCS">Numéro RCS</label>
                                <input class="form-control" type="text" name="numRCS" id="numRCS">
                            </div>
                        </div>
                        <label for="adresseEntreprise">Adresse de l'entreprise</label>
                        <input class="form-control" type="text" name="adresseEntreprise" id="adresseEntreprise">
                        <label for="adresseEntreprise2">Supplément d'adresse</label>
                        <input class="form-control" type="text" name="adresseEntreprise2" id="adresseEntreprise2">
                        <div class="row">
                            <div class="col-6">
                                <label for="cpEntreprise">Code Postal</label>
                                <input class="form-control" type="text" minlength="0" maxlength="6" name="cpEntreprise" id="cpEntreprise" aria-describedby="cpEntrepriseHelp">
                                <small id="cpEntrepriseHelp" class="form-text text-danger">Code postal invalide</small>
                            </div>
                            <div class="col-6">
                                <label for="villeEntreprise">Ville</label>
                                <input class="form-control" type="text" name="villeEntreprise" id="villeEntreprise">
                            </div>
                        </div>
                    </fieldset>
                    <div class="row py-3 mb-5">
                        <div class="col-6"><button class="btn btn-primary btn-block" type="submit">Valider</button>
                        </div>
                        <div class="col-6"><button class="btn btn-danger btn-block" type="reset">Annuler</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    require __DIR__."/../SRC/Controler/footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>