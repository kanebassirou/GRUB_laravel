@extends('base')
@section('title', 'Ajouter un étudiant')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>ajouter étudiants avec Laravel 10</h1>
            <hr>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('Verifier') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">NOM</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}">
                    @error('nom')
                    <small class="text-danger fw-bold" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{ old('prenom') }}">
                    @error('prenom')
                    <small class="text-danger fw-bold" role="alert">
                      {{ $message }}
                  </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="niveau" class="form-label">Niveau</label>
                    <input type="text" class="form-control @error('niveau') is-invalid @enderror" id="niveau" name="niveau" value="{{ old('niveau') }}">
                    @error('niveau')
                    <small class="text-danger fw-bold" role="alert">
                      {{ $message }}
                  </small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Ajouter un étudiant</button>
                <br><br>
                <a href="{{ route('Liste') }}" class="btn btn-danger">Revenir sur la liste des étudiants</a>
            </form>
        </div>
    </div>
</div>
@endsection
