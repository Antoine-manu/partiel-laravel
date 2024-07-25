@extends('layouts.app')

@section('content')
    <div class="container mt-4 h-100">
        <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center">
            <div class="mt-5 mb-3">
                <span>Bienvenue sur la librairie en ligne des partiel de 4IW !</span>
            </div>
            <a href="{{ route('books.index') }}" class="btn btn-primary">Rendez vous sur la page pour voir les livres</a>
        </div>
        
    </div>
@endsection
