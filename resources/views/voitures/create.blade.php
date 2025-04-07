@extends('layouts.app')

@section('content')
    <h1>Ajouter une nouvelle voiture</h1>
    <form action="{{ route('voitures.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" name="marque" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="modele">Modèle</label>
            <input type="text" name="modele" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="plaque_immatriculation">Plaque d'immatriculation</label>
            <input type="text" name="plaque_immatriculation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tarif_location">Tarif de location</label>
            <input type="number" step="0.01" name="tarif_location" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
    </form>
@endsection