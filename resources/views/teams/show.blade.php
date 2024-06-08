@extends('layouts.app')

@section('content')
    <h1>{{ $team->name }}</h1>
    <p>Description de l'équipe: {{ $team->description }}</p>
    <!-- Ajoutez d'autres informations sur l'équipe selon vos besoins -->
@endsection
