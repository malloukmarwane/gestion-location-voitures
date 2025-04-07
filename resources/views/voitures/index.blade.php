@extends('layouts.app')

@section('content')
    <h1>Liste des voitures</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Plaque d'immatriculation</th>
                <th>Tarif de location</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($voitures as $voiture)
                <tr>
                    <td>{{ $voiture->marque }}</td>
                    <td>{{ $voiture->modele }}</td>
                    <td>{{ $voiture->plaque_immatriculation }}</td>
                    <td>{{ $voiture->tarif_location }} €</td>
                    <td>{{ $voiture->disponible ? 'Oui' : 'Non' }}</td>
                    <td>
                        <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection