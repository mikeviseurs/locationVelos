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
    <link rel="stylesheet" type="text/css" href="../Libs/css/profil.css">

</head>

<body>
    <div class="bg-light">
        <?php
        require "../Admin/header.php";
        ?>
        <div class="bg-light marge">
            <div class="container bg-white">
                <h1 class="text-center">Profil</h1>
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Informations</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Historique</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Options</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Déconnecter</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content border p-2 my-2" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h2 class="text-center"><span id="nom">Dupont</span> <span id="prenom">Pierre</span>
                                </h2>
                                <p>né le <span id="birth">14 décembre 1981</span></p>
                                <div class="border p-2">
                                    <h4>Adresse</h4>
                                    <p id="adr">
                                        3 rue yyy
                                    </p>
                                    <p>
                                        <span class="cp">59000</span> <span class="ville">Lille</span>
                                    </p>
                                </div>
                                <div class="border p-2 my-2">
                                    <h4>Contacts</h4>
                                    <p>tel : <span id="tel">01.23.45.67.89</span>
                                    </p>
                                    <p>email : <span id="mail">dupontpierre@toto.fr</span>
                                    </p>
                                </div>
                                <a class="btn btn-primary btn-block" href="register.php" role="button">Modifier</a>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h2 class="text-center">Historique</h2>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Commande du <span id="hist1">14/02/2019</span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="table-responsive-md">
                                                    <table class="table table-bordered text-center">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Type de vélo</th>
                                                                <th scope="col">Quantité</th>
                                                                <th scope="col">durée</th>
                                                                <th scope="col">Sous-total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Vélo électrique</th>
                                                                <td>1</td>
                                                                <td>1 jour</td>
                                                                <td>13.99€</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">VTT</th>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0€</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Vélo de ville</th>
                                                                <td>1</td>
                                                                <td>1 jour</td>
                                                                <td>10.99€</td>
                                                            </tr>
                                                            <tr class="bg-warning">
                                                                <th scope="row" colspan="3">Prix total</th>
                                                                <td class="font-weight-bolder">24.98€</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Commande du <span id="hist2">07/01/2019</span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="table-responsive-md">
                                                    <table class="table table-bordered text-center">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Type de vélo</th>
                                                                <th scope="col">Quantité</th>
                                                                <th scope="col">durée</th>
                                                                <th scope="col">Sous-total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Vélo électrique</th>
                                                                <td>1</td>
                                                                <td>1 jour</td>
                                                                <td>13.99€</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">VTT</th>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0€</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Vélo de ville</th>
                                                                <td>1</td>
                                                                <td>1 jour</td>
                                                                <td>10.99€</td>
                                                            </tr>
                                                            <tr class="bg-warning">
                                                                <th scope="row" colspan="3">Prix total</th>
                                                                <td class="font-weight-bolder">24.98€</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Commande du <span id="hist3">11/12/2018</span>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="table-responsive-md">
                                                    <table class="table table-bordered text-center">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Type de vélo</th>
                                                                <th scope="col">Quantité</th>
                                                                <th scope="col">durée</th>
                                                                <th scope="col">Sous-total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Vélo électrique</th>
                                                                <td>1</td>
                                                                <td>1 jour</td>
                                                                <td>13.99€</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">VTT</th>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0€</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Vélo de ville</th>
                                                                <td>1</td>
                                                                <td>1 jour</td>
                                                                <td>10.99€</td>
                                                            </tr>
                                                            <tr class="bg-warning">
                                                                <th scope="row" colspan="3">Prix total</th>
                                                                <td class="font-weight-bolder">24.98€</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <form action="" method="post">
                                    <h2 class="text-center">Modifier le mot de passe</h2>
                                    <fieldset class="form-group">
                                        <label for="oldPwd">Ancien mot de passe</label>
                                        <input class="form-control mb-2" type="password" name="oldPwd" id="oldPwd">
                                        <label for="newPwd">Nouveau mot de passe</label>
                                        <input class="form-control" type="password" name="newPwd" id="mewPwd">
                                        <label for="confPwd">Confirmer le mot de passe</label>
                                        <input class="form-control mb-2" type="password" name="confPwd" id="confPwd">
                                        <button type="submit" class="btn btn-primary btn-block">Valider</button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <button class="btn btn-danger btn-block">Cliquer pour vous déconnecter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require "../Admin/footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>