@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    @if(session()->has('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
        </div>
    @endif
    <h2 class="display-3">Modifier mon annonce</h2>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="POST" action="{{ route('annonces.update', $annonce->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
          <div class="form-group">    
              <label for="titre">Titre de votre annonce :</label>
              <input type="text" class="form-control" name="titre" value="{{ $annonce->titre }}" required />
          </div>

          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $annonce->description }}" required />
          </div>

          <div class="form-group">
              <label for="ville">Ville :</label>
              <input type="text" class="form-control" name="ville" value="{{ $annonce->ville }}" required/>
          </div>
          <div class="form-group">
              <label for="departement">Departement :</label>
              <input type="text" class="form-control" name="departement" value="{{ $annonce->departement }}" required/>
          </div>
          <div class="form-group">
              <label for="url_img">Image 1 :</label>
              <input type="text" class="form-control" name="url_img1" value="{{ $annonce->url_img1 }}" required/>
          </div>
          <div class="form-group">
              <label for="url_img">Image 2 (falcultative) :</label>
              <input type="text" class="form-control" name="url_img2" value="{{ $annonce->url_img2 }}"/>
          </div>
          <div class="form-group">
            <label for="url_img">Image 3 (falcultative) :</label>
            <input type="text" class="form-control" name="url_img3" value="{{ $annonce->url_img3 }}"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix :</label>
              <input type="text" class="form-control" name="prix" value="{{ $annonce->prix }}" required/>
          </div>                         
          <button type="submit" class="btn btn-primary">Modifier l'annonce</button>
          <a class="btn btn-secondary" href="{{ route('annonces.showMembreAnnonce') }}">Retour</a>
      </form>
  </div>
</div>
</div>
@endsection