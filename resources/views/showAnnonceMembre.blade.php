@extends('layouts.app')

@section('content')

<div class="container">
    @if(session()->has('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <h1>Mes annonces</h1><br><br>
        <table class="table is-hoverable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre annonce</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Ville</th>
                    <th><h3>Date publication</h3></th>
                    <th></th>
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
                        <td><a class="btn btn-primary" href="{{ route('annonces.show', $annonce->id) }}">Voir</a></td>
                        <td><a class="btn btn-secondary" href="{{ route('annonces.edit', $annonce->id) }}">Modifier</a></td>
                        <td>
                            <form action="{{ route('annonces.destroy', $annonce->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    
    <a class="btn btn-dark" href="{{ route('home', $annonce->id) }}">Retour</a>
</div>

@endsection