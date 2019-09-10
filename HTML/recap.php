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
    <link rel="stylesheet" type="text/css" href="../css/recap.css">
</head>

<body>
    <div class="bg-light">
    <?php
        require "../Admin/header.php";
    ?>
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-info sticky-top">
            <a class="navbar-brand" href="#">
                <img src="../img/logo_200.png" width="30" height="30" alt="logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../indexphp">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Lieuxphp">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactphp">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginphp">s'identifier/s'enregistrer</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            nom_connecté
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profilphp">Profil</a>
                            <a class="dropdown-item" href="#">Déconnecter</a>
                        </div>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav> -->
        <div class="bg-light marge">
            <div class="container bg-white mt-3">
                <h1 class="text-center">Validation de la commande</h1>
                <h2>Recapitulatif de la commande</h2>
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
                <div class="row">
                    <div class="col-12 col-lg-4 mb-2">
                        <!-- <button class="btn btn-danger btn-block" type="button">Modifier</button> -->
                        <a class="btn btn-danger btn-block" href="Location.php" role="button">Modifier</a>
                    </div>
                    <div class="col-12 col-sm mb-2"><button class="btn btn-primary btn-block" type="button">Paiement par
                            Paypal</button></div>
                    <div class="col-12 col-sm mb-2">
                        <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cbModal">Paiement par Carte Bancaire</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cbModal" tabindex="-1" role="dialog" aria-labelledby="cbModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h3 class="modal-title" id="cbModalLabel">Paiement par carte bancaire</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="mb-2 p-2 border">
                            <legend>Type de carte bancaire</legend>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="visa" name="type_de_carte" type="radio">
                                <label class="form-check-label" for="visa">VISA</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="amex" name="type_de_carte" type="radio">
                                <label class="form-check-label" for="amex">AmEx</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="mastercard" name="type_de_carte" type="radio">
                                <label class="form-check-label" for="mastercard">Mastercard</label>
                            </div>
                        </fieldset>
                        <fieldset class="mb-2 p-2 border">
                            <div class="form-group">
                                <label for="numero_de_carte">N° de carte</label>
                                <input class="form-control" id="numero_de_carte" name="numero_de_carte" type="number" required>

                                <label for="date_de_carte">Date de validité</label>
                                <input class="form-control" id="date_de_carte" name="date_de_carte" type="number" required>

                                <label for="securite">Code sécurité</label>
                                <input class="form-control" id="securite" name="securite" type="number" required>

                                <label for="nom_porteur">Nom du porteur</label>
                                <input class="form-control" id="nom_porteur" name="nom_porteur" type="text" placeholder="Même nom que sur la carte" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Valider l'achat</button>
                    </div>
                </form>
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