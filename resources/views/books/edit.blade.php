@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4" style="font-size: 28px">Editez {{ $book->title }}</h1>
        <hr>
        <form method="POST" action="{{ route('books.update', $book->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="author" class="form-label">Auteur</label>
                <input type="text" class="form-control" name="author" id="author" value="{{ $book->author }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="year" class="form-label">Année de parution</label>
                <input type="number" class="form-control" name="year" id="year" value="{{ $book->year }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" name="genre" id="genre" value="{{ $book->genre }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre a jour</button>
        </form>
    </div>
@endsection
