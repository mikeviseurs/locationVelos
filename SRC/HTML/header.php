<?php
function active($page,$comp){
    echo ($page===$comp)?"active":"";
}
function nav($page)
{
    $url=($page==="index")?"SRC/HTML/":"";
    ?>
    <nav class="navbar navbar-expand-md navbar-light bg-info sticky-top">
        <a class="navbar-brand" href=<?php echo $url."../../index1.php";?>>
            <img src= <?php echo $url."../Libs/img/logo_200.png";?> width="30" height="30" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item <?php active($page,"index");?>">
                    <a class="nav-link" href=<?php echo $url."../../index1.php";?>>Accueil</a>
                </li>
                <li class="nav-item <?php active($page,"Lieux");?>">
                    <a class="nav-link" href=<?php echo $url."Lieux.php";?>>Location</a>
                </li>
                <li class="nav-item <?php active($page,"contact");?>">
                    <a class="nav-link" href=<?php echo $url."contact.php";?>>Contact</a>
                </li>
                <li class="nav-item <?php active($page,"login");?>">
                    <a class="nav-link" href=<?php echo $url."login.php";?>>s'identifier/s'enregistrer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        nom_connecté
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href=<?php echo $url."profil.php";?>>Profil</a>
                        <a class="dropdown-item" href="#">Déconnecter</a>
                    </div>
                </li>
            </ul>
        </div>
        <span class="navbar-text pr-2 d-none d-sm-block">Ville de <span class="text-white" id="nomVille">Bordeaux</span></span>
        <span class="navbar-text text-bolder">Prix Total : <span class="text-danger" id="prix_total">XXX€</span></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
<?php
}
?>