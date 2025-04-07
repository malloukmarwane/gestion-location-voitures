@extends('layouts.app')

@section('content')
    <h1>Modifier la voiture</h1>
    <form action="{{ route('voitures.update', $voiture->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" name="marque" class="form-control" value="{{ $voiture->marque }}" required>
        </div>
        <div class="form-group">
            <label for="modele">Modèle</label>
            <input type="text" name="modele" class="form-control" value="{{ $voiture->modele }}" required>
        </div>
        <div class="form-group">
            <label for="plaque_immatriculation">Plaque d'immatriculation</label>
            <input type="text" name="plaque_immatriculation" class="form-control" value="{{ $voiture->plaque_immatriculation }}" required>
        </div>
        <div class="form-group">
            <label for="tarif_location">Tarif de location</label>
            <input type="number" step="0.01" name="tarif_location" class="form-control" value="{{ $voiture->tarif_location }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
    </form>
@endsection