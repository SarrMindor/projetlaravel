<!-- resources/views/competitions/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Competition</h1>
    <form action="{{ route('competitions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection