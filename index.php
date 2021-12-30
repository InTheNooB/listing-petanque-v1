<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    <title>Petanque 2020</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center  mt-2">Petanque 2020</h1>
        <p class="text-center mb-5"><a href="html/explications.html">Explications<a></p>
        <div class="row justify-content-md-center mb-5">
            <div class="col-md text-center">
                <button id="buttonAdd" type="button" class="btn btn-primary btn-block">+</button>
            </div>
            <div class="col-md text-center">
                <button id="buttonRemove" type="button" class="btn btn-danger btn-block">-</button>
            </div>
        </div>
        <form method="post" action="php/ajoutePersonne.php">
            <div class="form-group">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" name="inputNom" aria-describedby="emailHelp" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="inputPrenom">Prenom</label>
                <input type="text" class="form-control" name="inputPrenom" placeholder="Prenom">
            </div>
            <div class="form-group">
                <label for="inputAdresse">Adresse</label>
                <input type="text" class="form-control" name="inputAdresse" placeholder="Adresse">
            </div>
            <div class="form-group">
                <label for="inputTelephone">Telephone</label>
                <input type="text" class="form-control" name="inputTelephone" placeholder="Telephone">
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>

        <div class="row mt-5 mb-3">
            <div class="col-sm-6" id="actuel">
                <h5>Sur place de fete : </h5>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md" id="max">
                <h5>Max. simultanément : </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md" id="total">
                <h5>Total Personnes : </h5>
            </div>
        </div>

        <div class="row justify-content-md-center mt-5 mb-5">
            <div class="col-md text-center">
                <button id="buttonListe" type="button" class="btn btn-info btn-block">Voir Liste</button>
            </div>
        </div>

        <div id="liste">
        </div>
    </div>


</body>

</html>