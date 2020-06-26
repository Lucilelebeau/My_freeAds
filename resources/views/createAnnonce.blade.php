@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h2 class="display-3">Créer une annonce</h2>
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
      <form method="POST" action="{{ route('annonces.store') }}">
          @csrf
          <div class="form-group">    
              <label for="titre">Titre de votre annonce :</label>
              <input type="text" class="form-control" name="titre"/>
          </div>

          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="ville">Ville :</label>
              <input type="text" class="form-control" name="ville"/>
          </div>
          <div class="form-group">
              <label for="departement">Departement :</label>
              <input type="text" class="form-control" name="departement"/>
          </div>
          <div class="form-group">
              <label for="url_img">Image 1 :</label>
              <input type="text" class="form-control" name="url_img1"/>
          </div>
          <div class="form-group">
              <label for="url_img">Image 2 (falcultative) :</label>
              <input type="text" class="form-control" name="url_img2"/>
          </div>
          <div class="form-group">
            <label for="url_img">Image 3 (falcultative) :</label>
            <input type="text" class="form-control" name="url_img3"/>
          </div>
          <div class="form-group">
              <label for="prix">Prix :</label>
              <input type="text" class="form-control" name="prix"/>
          </div>                         
          <button type="submit" class="btn btn-primary">Ajouter l'annonce</button>
      </form>
  </div>
</div>
</div>
@endsection