@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <header class="card-header">
                    <h1 class="card-header-title"><b># {{ $annonce->id }} <br> {{ $annonce->titre }}</b></h1>
                </header>
                <div class="card-body">
                    <h2>Description : </h2><br>
                    <h4>{{ $annonce->description }}</h4><br>
                    <div class="row">
                    <img src="{{ $annonce->url_img1 }}" alt="image annonce" width='50%' height='50%'>
                    <img src="{{ $annonce->url_img2 }}"width='50%' height='50%'>
                    <img src="{{ $annonce->url_img3 }}"width='50%' height='50%'>
                    </div>
                </div>
                <footer class="card-footer">
                    <h5><b>Prix : {{ $annonce->prix }} €</b></h5>
                    <h5>Localisation : {{ $annonce->departement }} {{ $annonce->ville }} </h5><br>
                    <p>Mise en ligne le {{ $annonce->created_at }}</p>
                </footer>
            </div><br>
            <a class="btn btn-primary" href="{{ route('annonces.showMembreAnnonce') }}">Retour</a>
        </div>
    </div>
</div>
@endsection