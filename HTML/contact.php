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
    <link rel="stylesheet" type="text/css" href="../Libs/css/contact.css">
</head>

<body>
    <div class="bg-light hauteur">
            <?php
                require "../Admin/header.php";
            ?>
        <div class="bg-light marge">
            <div class="container bg-white">
                <h1>Contact</h1>
                <p>tel: 01 23 45 67 89</p>
                <p>adresse: 14 rue Tartempion 59000 Lille</p>
                <form action="">
                    <fieldset class="border form-group p-1">
                        <legend>Envoyer un message</legend>
                        <label for="name">Votre nom</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <label for="mail">Votre Email</label>
                        <input type="email" name="mail" id="mail" class="form-control">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="taper votre message ici"></textarea>
                    </fieldset>
                    <div class="row pb-2">
                        <div class="col">
                            <button class="btn btn-primary btn-block" type="submit">Envoyer</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-danger btn-block" type="reset">Effacer</button>
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