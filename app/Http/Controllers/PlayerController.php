<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Competition;
use App\Models\Team;
use App\Models\Result;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //
    public function index()
    {
        // Récupérer tous les joueurs
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        // Récupérer toutes les équipes disponibles depuis la base de données
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

public function store(Request $request)
{
    // Valider les données si nécessaire
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer',
        'position' => 'required|string|max:255',
        'team_id' => 'required|exists:teams,id', // Exemple de validation pour le nom du joueur
        // Ajoutez d'autres règles de validation pour d'autres attributs du joueur si nécessaire
    ]);
    $player = Player::create($validatedData);

    
    // Obtenez l'équipe par défaut
    $defaultTeam = Team::where('name', 'Default')->first();

    // Vérifiez si l'équipe par défaut existe
    if (!$defaultTeam) {
        return redirect()->back()->with('error', 'L\'équipe par défaut n\'existe pas.');
    }

    // Ajoutez l'ID de l'équipe par défaut aux données validées
    $validatedData['team_id'] = $defaultTeam->id;

    // Créez le joueur avec les données validées
    $player = Player::create($validatedData);

    // Redirige après la création du joueur avec un message de succès
    return redirect()->route('players.index')->with('success', 'Le joueur a été créé avec succès.');

}

public function show(Player $player)
{
    return view('players.show', compact('player'));
}

public function edit(Player $player)
{
    return view('players.edit', compact('player'));
}

public function update(Request $request, Player $player)
{
    $player->update($request->all());
    return redirect()->route('players.index');
}

public function destroy(Player $player)
{
    $player->delete();
    return redirect()->route('players.index');
}

}
