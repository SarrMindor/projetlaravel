<!-- resources/views/profile.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mon Profil</h1>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <label for="biography">Biographie :</label>
            <textarea name="biography">{{ auth()->user()->biography }}</textarea>
            <!-- Ajoutez d'autres champs au besoin -->
            <button type="submit">Mettre à jour</button>
        </form>
    </div>
@endsection
