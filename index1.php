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
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <?php
        require "Admin/header.php";
    ?>
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-info sticky-top">
        <a class="navbar-brand" href="#">
            <img src="img/logo_200.png" width="30" height="30" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="HTML/Lieux.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="HTML/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="HTML/login.php">s'identifier/s'enregistrer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        nom_connecté
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="HTML/profil.php">Profil</a>
                        <a class="dropdown-item" href="#">Déconnecter</a>
                    </div>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav> -->
    <div class="bg-light">
        <div class="container bg-white">
            <section>
                <!--slider-->
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide w-50 mx-auto" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/VTT_1024.jpg" class="d-block w-100" alt="VTT">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-danger">VTT</h5>
                                    <p class="text-danger">Vélo Tout-Terrain de marque Cannondale</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/electrique_1024.jpg" class="d-block w-100" alt="vélo électrique">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-danger">Vélo électrique</h5>
                                    <p class="text-danger">Vélo électrique de marque 2feel-vog</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/ville_1024.jpg" class="d-block w-100" alt="vélo de Ville">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-danger">Vélo de ville</h5>
                                    <p class="text-danger">Vélo de ville de la marque Gitane</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
            </section>
            <h1 class="text-center">Location de vélos</h1>
            <section>
                <!--villes-->
                <h2 class="text-center">disponible dans les villes suivantes</h2>
                <div class="row">
                    <div class="card col-12 col-sm-6 col-md-3">
                        <div class="card-header border text-center">
                            <h4>Bordeaux</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text d-none d-md-block">Rue Tartempion.</p>
                            <p class="card-text d-none d-md-block">Rue Trucmuche.</p>
                            <p class="card-text d-none d-md-block">Rue Bidule.</p>
                            <!-- <a href="#" class="card-link">Card link</a> -->
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-3">
                        <div class="card-header border text-center">
                            <h4>Lille</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text d-none d-md-block">Rue Tartempion.</p>
                            <p class="card-text d-none d-md-block">Rue Trucmuche.</p>
                            <!-- <a href="#" class="card-link">Card link</a> -->
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-3">
                        <div class="card-header border text-center">
                            <h4>Lyon</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text d-none d-md-block">Rue Tartempion.</p>
                            <p class="card-text d-none d-md-block">Rue Trucmuche.</p>
                            <!-- <a href="#" class="card-link">Card link</a> -->
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-3">
                        <div class="card-header border text-center">
                            <h4>Paris</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text d-none d-md-block">Rue Tartempion.</p>
                            <p class="card-text d-none d-md-block">Rue Trucmuche.</p>
                            <!-- <a href="#" class="card-link">Card link</a> -->
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <!--Location-->
                <a class="btn btn-primary btn-lg btn-block my-2" href="HTML/Lieux.php" role="button">Location</a>
            </section>
            <section>
                <!--Tarifs-->
                <div class="row">
                    <div class="card col-12 col-md-3 text-center">
                        <div class="card-header border text-center">
                            <h4>Tarif Horaire</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">A partir de 2€ par heure</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-3 text-center">
                        <div class="card-header border text-center">
                            <h4>Tarif Journalier</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">A partir de 7.99€ par jour</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-3 text-center">
                        <div class="card-header border text-center">
                            <h4>Tarif Hebdomadaire</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">A partir de 49.99€ par semaine</p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-3 text-center">
                        <div class="card-header border text-center">
                            <h4>Tarif Mensuel</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">A partir de 179.90€ par mois</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
        require "Admin/footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>