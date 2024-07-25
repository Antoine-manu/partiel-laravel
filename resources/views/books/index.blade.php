@extends('layouts.app')

@section('title', 'Books List')

@section('content')
    <div class="d-flex flex-row mt-4 align-items-center w-100 justify-content-between">
        <h1 style="font-size: 28px" class="fs-3">Liste des livres</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Ajouter un livre</a>
    </div>
    <hr>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Genre</th>
            <th scope="col">Année de parution</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->title }}</th>
                <td>{{ $book->author }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->year }}</td>
                <td>
                    <div class="d-flex flex-row" role="group">
                        <div class="mr-3">
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-light">Editer</a>
                        </div>
                        <div>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Attention vous allez supprimer ce livre (pour très très longtemps :) )?')">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </td>
              </tr>
        @endforeach
          
        </tbody>
      </table>
@endsection
