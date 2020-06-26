@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Annonces disponibles</h1><br>
        <table class="table is-hoverable">
            <thead>
                <tr>
                    <th>#</th>
                    <th><h3>Titre</h3></th>
                    <th><h3>Description</h3></th>
                    <th><h3>Prix</h3></th>
                    <th><h3>Ville</h3></th>
                    <th><h3>Date publication</h3></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($annonces as $annonce)
                    <tr>
                        <td>{{ $annonce->id }}</td>
                        <td><strong>{{ $annonce->titre }}</strong></td>
                        <td>{{ $annonce->description }}</td>
                        <td>{{ $annonce->prix }}€</td>
                        <td>{{ $annonce->ville }}</td>
                        <td>{{ $annonce->created_at }}</td>
                        <td><a class="btn btn-primary btn-sm" href="{{ route('annonces.show', $annonce->id) }}">Voir</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!--<footer class="card-footer">
        { $annonces->links() }}
    </footer>-->
    <a class="btn btn-dark" href="{{ route('home') }}">Retour</a>
    <a class="btn btn-outline-dark" href="{{ route('annonces.orderByRecente') }}">Trier par date de publication</a>
    <a class="btn btn-outline-dark" href="{{ route('annonces.orderByTitre') }}">Trier par titre</a>
    <a class="btn btn-outline-dark" href="{{ route('annonces.orderByPrix') }}">Trier par prix</a>
    <a class="btn btn-outline-dark" href="{{ route('annonces.orderByVille') }}">Trier par ville</a>
</div>

@endsection