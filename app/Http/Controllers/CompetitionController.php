<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    protected $fillable = [
        'nom',
        '_token', // Ajoutez '_token' à la liste des attributs remplissables
        // Ajoutez d'autres attributs remplissables au besoin
    ];
    public function index()
    {
        $competitions = Competition::all();
        return view('competitions.index', compact('competitions'));
    }

    public function create()
    {
        return view('competitions.create');
    }

    public function store(Request $request)
    {
        
        Competition::create($request->all());
        return redirect()->route('competitions.index');
    }

    public function show(Competition $competition)
    {
        return view('competitions.show', compact('competition'));
    }

    public function edit(Competition $competition)
    {
        return view('competitions.edit', compact('competition'));
    }

    public function update(Request $request, Competition $competition)
    {
        $competition->update($request->all());
        return redirect()->route('competitions.index');
    }

    public function destroy(Competition $competition)
    {
        $competition->delete();
        return redirect()->route('competitions.index');
    }
}
