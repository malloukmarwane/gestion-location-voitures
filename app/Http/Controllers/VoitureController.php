<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    // Afficher la liste des voitures
    public function index()
    {
        $voitures = Voiture::all();
        return view('voitures.index', compact('voitures'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('voitures.create');
    }

    // Enregistrer une nouvelle voiture
    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'plaque_immatriculation' => 'required|unique:voitures',
            'tarif_location' => 'required|numeric',
        ]);

        Voiture::create($request->all());
        return redirect()->route('voitures.index')->with('success', 'Voiture ajoutée avec succès.');
    }

    // Afficher le formulaire de modification
    public function edit(Voiture $voiture)
    {
        return view('voitures.edit', compact('voiture'));
    }

    // Mettre à jour une voiture
    public function update(Request $request, Voiture $voiture)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'plaque_immatriculation' => 'required|unique:voitures,plaque_immatriculation,' . $voiture->id,
            'tarif_location' => 'required|numeric',
        ]);

        $voiture->update($request->all());
        return redirect()->route('voitures.index')->with('success', 'Voiture mise à jour avec succès.');
    }

    // Supprimer une voiture
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('voitures.index')->with('success', 'Voiture supprimée avec succès.');
    }
}