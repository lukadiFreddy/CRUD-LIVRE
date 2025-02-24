<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestion Livre</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="d-flex justify-content-start">
        <a href="liste_Livre" class="btn btn-secondary text-white m-2 fw-bold">RETOUR</a>
    </div>
    <div class="d-flex justify-content-center">
        <h1 class="text-center fw-bold">AJOUT DE LIVRE</h1>
    </div>
    <ol class="m-5">
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger fs-0">{{ $error }}</li>
        @endforeach
    </ol>

    <div class="container border border-dark mt-5 p-5 bg-light">
        <form action="/ajoutLivre" method="POST" class="mt-2">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="auteur" class="form-label text-uppercase fw-bold">Auteur</label>
                    <input type="text" class="form-control" id="auteur" name="auteur">
                </div>
                <div class="col">
                    <label for="titre" class="form-label text-uppercase fw-bold">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="prix" class="form-label text-uppercase fw-bold">Prix</label>
                    <input type="number" class="form-control" id="prix" name="prix">
                </div>
                <div class="col">
                    <label for="descript" class="form-label text-uppercase fw-bold">Description</label>
                    <input type="text" class="form-control" id="descript" name="description">
                </div>
            </div>
            <div class="d-flex mt-5">
                <button type="submit" class="btn btn-success fw-bold">ENVOYER</button>
                <button type="reset" class="btn btn-danger mx-3 fw-bold "> ANNULER</button>
            </div>

        </form>
    </div>
</body>

</html>
