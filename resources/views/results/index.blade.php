<!-- resources/views/results/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Results</h1>
    <a href="{{ route('results.create') }}" class="btn btn-primary">Create Result</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->description }}</td>
                    <td>
                        <a href="{{ route('results.edit', $result) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('results.destroy', $result) }}" method="POST" style="display:inline;">
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
