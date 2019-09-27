<!doctype html>
<html lang="en">

<head>
    <title>Lieux de Location</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../Libs/css/Lieux.css">
</head>

<body>
    <div class="bg-light">
    <?php
        require "../Admin/header.php";
    ?>
        <div class="bg-light marge">
            <div class="container bg-white">
                <section>
                    <form action="">
                        <div class="form-group row px-2 py-3">
                            <select class="form-control col-9" id="lieuSelect">
                                <option value="">Selectionnez une ville</option>
                                <option value="bordeaux_tartempion">Bordeaux, rue Tartempion</option>
                                <option value="bordeaux_trucmuche">Bordeaux, rue Trucmuche</option>
                                <option value="bordeaux_bidule">Bordeaux, rue Bidule</option>
                                <option value="lille_tartempion">Lille, rue Tartempion</option>
                                <option value="lille_trucmuche">Lille, rue Trucmuche</option>
                                <option value="lyon_tartempion">Lyon, rue Tartempion</option>
                                <option value="lyon_trucmuche">Lyon, rue Trucmuche</option>
                                <option value="paris_tartempion">Paris, rue Tartempion</option>
                                <option value="paris_trucmuche">Paris, rue Trucmuche</option>
                            </select>
                            <!-- <button class="btn btn-primary col-3" type="button">Valider</button> -->
                            <a class="btn btn-primary col-3" href="Location.php" role="button">Valider</a>
                        </div>
                    </form>
                </section>
                <section>
                    <div class="mx-auto pb-3 embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" width="700" height="400" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Bordeaux%2C%20France+(Titre)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"></iframe>
                        <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
                            <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a
                                    href="https://embedgooglemaps.com/it/">embedgooglemaps EN</a> & <a
                                    href="http://www.stedentrippers.nl/berlijn.html">praktische reisinfo over
                                    berlijn</a></small></div>
                        <style>
                            #gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }
                        </style>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php
        require "../Admin/header.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>