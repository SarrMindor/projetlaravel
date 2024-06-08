<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();
        return view('results.index', compact('results'));
    }

    public function create()
    {
        return view('results.create');
    }

    public function store(Request $request)
    {
        // Extrait uniquement les attributs pertinents pour la création du modèle Result
        $data = $request->only(['nom_attribut1', 'nom_attribut2', /* autres attributs */]);

        try {
            // Crée le modèle Result en utilisant les données extraites
            Result::create($data);

            return redirect()->route('results.index')->with('success', 'Résultat créé avec succès.');
        } catch (\Exception $e) {
            // Gérer les erreurs d'insertion
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la création du résultat : ' . $e->getMessage());
        }
    }

    public function show(Result $result)
    {
        return view('results.show', compact('result'));
    }

    public function edit(Result $result)
    {
        return view('results.edit', compact('result'));
    }

    public function update(Request $request, Result $result)
    {
        $result->update($request->all());
        return redirect()->route('results.index')->with('success', 'Résultat mis à jour avec succès.');
    }

    public function destroy(Result $result)
    {
        $result->delete();
        return redirect()->route('results.index')->with('success', 'Résultat supprimé avec succès.');
    }
}
