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
    <div class="d-flex justify-content-center">
        <h1 class="text-center">AJOUT DE LIVRE</h1>
    </div>

    <div class="container border border-dark mt-5 p-5 bg-light">
        <form class="mt-2">
            <div class="row">
                <div class="col">
                    <label for="auteur" class="form-label text-uppercase fw-bold">Auteur</label>
                    <input type="text" class="form-control" id="auteur">
                </div>
                <div class="col">
                    <label for="titre" class="form-label text-uppercase fw-bold">Titre</label>
                    <input type="text" class="form-control" id="titre">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="prix" class="form-label text-uppercase fw-bold">Prix</label>
                    <input type="number" class="form-control" id="prix">
                </div>
                <div class="col">
                    <label for="descript" class="form-label text-uppercase fw-bold">Description</label>
                    <input type="password" class="form-control" id="descript">
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-5">ENVOYER</button>
        </form>
    </div>
</body>

</html>
