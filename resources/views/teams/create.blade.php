@extends('layouts.app')

@section('content')
    <h1>Créer une Équipe</h1>
    <form action="{{ route('teams.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom de l'équipe:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <!-- Ajoutez d'autres champs selon vos besoins -->
        <div>
        
            <button type="submit">Créer l'equipe</button>
        </div>
    </form>
@endsection
