<!doctype html>
<html lang="en">

<head>
    <title>Location de Vélo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../Libs/css/Location.css">
</head>

<body>
    <?php
        require "../Admin/header.php";
    ?>
    <div class="bg-light">
        <div class="container bg-white">
            <section>
                <form action="">
                    <!--Card Vélo électrique-->
                    <div class="card mb-3 mx-auto" style="max-width: 720px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 pt-5">
                                <button type="button" class="btn" data-toggle="modal" data-target="#modalElec">
                                    <img src="../Libs/img/electrique_1024.jpg" class="card-img" alt="vélo électrique">
                                </button>
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalElec">Détails</button>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Vélo électrique</h5>
                                    <p class="card-text">prix unitaire à l'heure : 2€/heure</p>
                                    <p class="card-text">prix unitaire à la journée : 13.99€/jour</p>
                                    <p class="card-text">prix unitaire à la semaine : 12.49€/jour</p>
                                    <p class="card-text">prix unitaire au mois : 10.99€/jour</p>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="timeNb">Durée :</label>
                                        <input class="form-control col-4" type="number" name="timeNb" id="timeNb" value="0" min="0">
                                        <select class="form-control col-5" name="timeType" id="timeType">
                                            <option value="Heures">Heures</option>
                                            <option value="Jours">Jours</option>
                                            <option value="Semaines">Semaines</option>
                                            <option value="Mois">Mois</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="quantity">Quantité</label>
                                        <input class="form-control col-4" type="number" name="quantity" id="quantity" value="0" min="0">
                                        <div class="col-5 font-weight-bolder">
                                            sous-total : <span id="stt_elec" class="text-danger">00€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal vélo électrique-->
                    <div class="modal fade" id="modalElec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">vélo électrique</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="../Libs/img/electrique_1024.jpg" class="card-img" alt="vélo électrique">
                                    <p>Le vélo électrique VOG D7 de la marque O2Feel, fera un parfait vélo de ville à petit budget ! Maniable, élégant et efficace il possède l'essentiel pour parcourir la ville avec un grand plaisir de conduite et cela sans
                                        exploser le budget ! Côté technique, le vélo électrique VOG D7 sera équipé de la technologie de motorisation ORIGIN solution breveté par la marque O2Feel et qui lui assurera jusqu'à 80 km d'autonomie.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Card VTT-->
                    <div class="card mb-3 mx-auto" style="max-width: 720px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 pt-5">
                                <button type="button" class="btn" data-toggle="modal" data-target="#modalVTT">
                                    <img src="../Libs/img/VTT_1024.jpg" class="card-img" alt="vélo Tout-Terrain">
                                </button>
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalVTT">Détails</button>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Vélo Tout-Terrain</h5>
                                    <p class="card-text">prix unitaire à l'heure : 1.79€/heure</p>
                                    <p class="card-text">prix unitaire à la journée : 11.99€/jour</p>
                                    <p class="card-text">prix unitaire à la semaine : 10.99€/jour</p>
                                    <p class="card-text">prix unitaire au mois : 9.99€/jour</p>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="timeNb">Durée :</label>
                                        <input class="form-control col-4" type="number" name="timeNb" id="timeNb" value="0" min="0">
                                        <select class="form-control col-5" name="timeType" id="timeType">
                                            <option value="Heures">Heures</option>
                                            <option value="Jours">Jours</option>
                                            <option value="Semaines">Semaines</option>
                                            <option value="Mois">Mois</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="quantity">Quantité</label>
                                        <input class="form-control col-4" type="number" name="quantity" id="quantity" value="0" min="0">
                                        <div class="col-5 font-weight-bolder">
                                            sous-total : <span id="stt_vtt" class="text-danger">00€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal VTT-->
                    <div class="modal fade" id="modalVTT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">VTT</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="../Libs/img/VTT_1024.jpg" class="card-img" alt="vélo Tout-Terrain">
                                    <p>La position de conduite semi-relevée offre un équilibre idéal de confort et de performance.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 mx-auto" style="max-width: 720px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 pt-5">
                                <button type="button" class="btn" data-toggle="modal" data-target="#modalVille">
                                    <img src="../Libs/img/ville_1024.jpg" class="card-img" alt="vélo de ville">
                                </button>
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalVille">Détails</button>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Vélo de ville</h5>
                                    <p class="card-text">prix unitaire à l'heure : 1.49€/heure</p>
                                    <p class="card-text">prix unitaire à la journée : 10.99€/jour</p>
                                    <p class="card-text">prix unitaire à la semaine : 9.99€/jour</p>
                                    <p class="card-text">prix unitaire au mois : 7.99€/jour</p>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="timeNb">Durée :</label>
                                        <input class="form-control col-4" type="number" name="timeNb" id="timeNb" value="0" min="0">
                                        <select class="form-control col-5" name="timeType" id="timeType">
                                            <option value="Heures">Heures</option>
                                            <option value="Jours">Jours</option>
                                            <option value="Semaines">Semaines</option>
                                            <option value="Mois">Mois</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label" for="quantity">Quantité</label>
                                        <input class="form-control col-4" type="number" name="quantity" id="quantity" value="0" min="0">
                                        <div class="col-5 font-weight-bolder">
                                            sous-total : <span id="stt_ville" class="text-danger">00€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalVille" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Vélo de ville</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="../Libs/img/ville_1024.jpg" class="card-img" alt="vélo de ville">
                                    <p>Le GITANE Salsa 6 – 28 est un vélo urbain avec un look ravageur, assortie de couleurs tendances et étincelantes qui sauront colorer vos sorties !</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
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