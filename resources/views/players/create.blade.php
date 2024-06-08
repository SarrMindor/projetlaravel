<!-- resources/views/players/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer un joueur</h1>
    <form action="{{ route('players.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nom du joueur</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="age">Âge du joueur</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>

    <div class="form-group">
        <label for="position">Position du joueur</label>
        <input type="text" class="form-control" id="position" name="position" required>
    </div>

    <div class="form-group">
        <label for="team_id">Équipe</label>
        <select class="form-control" id="team_id" name="team_id" required>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Créer</button>
</form>
</div>
@endsection
