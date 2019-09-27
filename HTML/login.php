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
    <link rel="stylesheet" type="text/css" href="../Libs/css/login.css">
</head>

<body>
    <div class="bg-light hauteur">
        <?php
        require "../Admin/header.php";
        ?>
        <div class="bg-light marge">
            <div class="container bg-white mt-5">
                <h1 class="text-center">S'identifier</h1>
                <form action="">
                    <div class="form-group">
                        <p class="text-danger">Identifiant ou Mot de passe invalide</p>
                        <label for="login">Identifiant</label>
                        <input class="form-control" type="text" name="login" id="login" placeholder="Entrez votre identifiant">
                        <label for="psswd">Mot de passe</label>
                        <input class="form-control" type="password" name="psswd" id="psswd" placeholder="Entrez votre mot de passe">
                        <div class="row py-3">
                            <div class="col-6">
                                <!-- <button class="btn btn-primary btn-block" type="submit">Valider</button> -->
                                <a class="btn btn-primary btn-block" href="recap.php" role="button">Valider</a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-danger btn-block" type="reset">Annuler</button>
                            </div>
                        </div>
                        <div class="row">
                            <a class="col-6" href="register.php">s'enregister</a>
                            <a class="col-6 text-right" href="forgot.php">Mot de passe oublié</a>
                        </div>
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