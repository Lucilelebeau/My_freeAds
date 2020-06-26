@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    <h1>Bienvenue sur Free Ads</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3><b>{{ Auth::user()->prenom }} {{ Auth::user()->name }}</b></h3>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="jumbotron text-center">
            <h2>Le meilleur site de petites annonces</h2><br>
            <p>
                <a class="btn btn-success btn-lg" href="{{ route('annonces.create') }}" role="button">Ajouter une annonce</a>
                <a class="btn btn-success btn-lg" href="{{ route('annonces.showMembreAnnonce', Auth::user()->id) }}" role="button">Mes annonces</a>
            </p>
            <p>
                <a class="btn btn-primary btn-lg" href="/annonce" role="button">Toutes les annonces</a>
            </p>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row justify-content-center">
        <h2>Propositions d'annonces</h2><br>
        <table class="table is-hoverable">
            <thead>
                <tr>
                    <th>#</th>
                    <th><h4>Titre</h4></th>
                    <th><h4>Description</h4></th>
                    <th><h4>Prix</h4></th>
                    <th><h4>Ville</h4></th>
                    <th><h4>Date publication</h4></th>
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

</div>
@endsection
