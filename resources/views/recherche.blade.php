@extends('base')

@section('title', 'Recherche d\'étudiant')

@section('content')
<div class="container">
    <h1>Rechercher des étudiants avec Laravel 10</h1>
    <hr>

    <form action="{{ route('Rechercher') }}" method="POST">
        @csrf
        <div class="input-group">
            <input type="text" name="recherche" class="form-control" placeholder="Rechercher...">
            <button type="submit" class="btn btn-primary">Rechercher</button>
            <button class="btn btn-dark mx-4"><a href="{{ route('Liste') }}">retour</a></button>
        </div>
    </form>

    <h2>Résultats de la recherche</h2>

  
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Niveau</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->niveau }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>
@endsection
