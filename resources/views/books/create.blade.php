@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4" style="font-size: 28px">Ajouter un livre</h1>
        <hr>
        <form method="POST" action="{{ route('books.store') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            <div class="form-group mb-3">
                <label for="author" class="form-label">Auteur</label>
                <input type="text" class="form-control" name="author" id="author" required>
            </div>

            <div class="form-group mb-3">
                <label for="year" class="form-label">Année de parution</label>
                <input type="number" class="form-control" name="year" id="year" required>
            </div>

            <div class="form-group mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" name="genre" id="genre" required>
            </div>

            <button type="submit" class="btn btn-primary">Créez votre livre</button>
        </form>
    </div>
@endsection
