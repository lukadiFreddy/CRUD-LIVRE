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
        <h1 class="text-center fw-bold">GESTION LIVRE</h1>
    </div>
    <div class="d-flex justify-content-end m-5">
        <a href="ajout_livre" class="btn btn-success addLivre fw-bold">AJOUTER LIVRE</a>
    </div>
    <div class="m-5">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
    </div>

    <div class="container text-center">
        <table class="table table-striped table-hover">
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

                {{-- @php
                    $id = 1;
                @endphp --}}

                @foreach ($livres as $livre)
                    <tr>
                        <td>{{$livre->id }}</td>
                        <td>{{ $livre->auteur }}</td>
                        <td>{{ $livre->titre }}</td>
                        <td>{{ $livre->prix }}$</td>
                        <td>{{ $livre->description }}</td>
                        <td>
                            <a href="modifier{{ $livre->id }}" class="btn btn-warning upLivre fw-bold">MODIFIER</a>
                            <a href="delete{{ $livre->id }}" class="btn btn-danger delLivre fw-bold">SUPPRIMER</a>
                        </td>
                    </tr>

                    {{-- @php
                        $id++;
                    @endphp --}}
                @endforeach
            </tbody>
        </table>
        {{ $livres->links() }}
    </div>
</body>

</html>
