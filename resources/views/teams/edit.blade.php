@extends('layouts.app')

@section('content')
    <h1>Éditer {{ $team->name }}</h1>
    <form action="{{ route('teams.update', $team) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nom de l'équipe:</label>
            <input type="text" id="name" name="name" value="{{ $team->name }}" required>
        </div>
        <!-- Ajoutez d'autres champs selon vos besoins -->
        <div>
            <button type="submit">Mettre à jour</button>
        </div>
    </form>
@endsection
