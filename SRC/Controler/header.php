<nav class="navbar navbar-expand-md navbar-light bg-info sticky-top">
        <a class="navbar-brand" href="../index.php">
            <img src="../img/logo_200.png" width="30" height="30" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Lieux.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">s'identifier/s'enregistrer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        nom_connecté
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profil.php">Profil</a>
                        <a class="dropdown-item" href="#">Déconnecter</a>
                    </div>
                </li>
            </ul>
        </div>
        <span class="navbar-text pr-2 d-none d-sm-block">Ville de <span class="text-white"
                id="nomVille">Bordeaux</span></span>
        <span class="navbar-text text-bolder">Prix Total : <span class="text-danger" id="prix_total">XXX€</span></span>
        <!-- <button type="button" class="btn btn-success">Valider la commande</button> -->
        <a class="btn btn-success" href="login.php" role="button">Valider la commande</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>