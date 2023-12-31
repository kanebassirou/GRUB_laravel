@extends('base')
@section('title','Ajouter un etudiants')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>Modifier etudiants avec laravel 10</h1>
            <hr>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <ul>
                @foreach ($errors->all() as $error )
                <li class="alert alert-danger">{{$error}}</li>
                
                @endforeach
            </ul>
          
            <form  action="/update-etudiant/verification" method="POST">
                @csrf
                {{-- <div class="mb-3"> --}}
                  {{-- <label for="id" class="form-label">id</label> --}}
                  <input type="hidden" class="form-control" id="id" name="id" value="{{$etudiants->id}}">
                {{-- </div> --}}
                <div class="mb-3">
                  <label for="nom" class="form-label">NOM</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="{{$etudiants->nom}}">
                </div>
                <div class="mb-3">
                  <label for="prenom" class="form-label">Prenom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom" value="{{$etudiants->prenom}}">
                </div>
                <div class="mb-3">
                  <label for="niveau" class="form-label">Niveau</label>
                  <input type="text" class="form-control" id="niveau" name="niveau" value="{{$etudiants->niveau}}">
                </div>
              
                <button type="submit" class="btn btn-success">Modifier un etudiant</button>
                <br><br>
                <a href="{{route('Liste')}}" class="btn btn-danger">Revenir sur la liste des etudiant</a>
              </form>


        </div>
    </div>
</div>

@endsection