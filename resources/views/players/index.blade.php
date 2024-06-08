<!-- resources/views/players/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Players</h1>
    <a href="{{ route('players.create') }}" class="btn btn-primary">Create Player</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->description }}</td>
                    <td>
                        <a href="{{ route('players.edit', $player) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('players.destroy', $player) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>  
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
