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
        <h1 class="text-center">GESTION LIVRE</h1>
    </div>
    <div class="d-flex justify-content-end m-5">
        <a href="ajout_livre" class="btn btn-success addLivre">AJOUTER LIVRE</a>
    </div>
    <div class="container text-center">
        <table class="table table-striped table-hover table-bordered">
            <caption>Liste des livres dans la bibliothèque</caption>
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>AUTEUR</th>
                    <th>TITRE</th>
                    <th>PRIX</th>
                    <th>DESCRIPTION</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>LUKADI</td>
                    <td>BASKET</td>
                    <td>150 $</td>
                    <td>SPORT</td>
                    <td>
                        <a href="" class="btn btn-warning">MODIFIER</a>
                        <a href="" class="btn btn-danger">SUPPRIMER</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>TSHITENGE</td>
                    <td>ALPE</td>
                    <td>75 $</td>
                    <td>DIVERSITE</td>
                    <td>
                        <a href="" class="btn btn-warning">MODIFIER</a>
                        <a href="" class="btn btn-danger">SUPPRIMER</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>FREDDY</td>
                    <td>OOTBALL</td>
                    <td>350 $</td>
                    <td>SPORT</td>
                    <td>
                        <a href="" class="btn btn-warning">MODIFIER</a>
                        <a href="" class="btn btn-danger">SUPPRIMER</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
