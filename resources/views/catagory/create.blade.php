@extends('layaut')
@section("title', 'Formulaire d'ajout d'une nouvelle catagorie")
@section('content')
    <h3>Formulaire d'ajout d'une nouvelle catégorie</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif

<form action="{{route('catagory.admin.store')}}" method="post">
    @csrf
    @include('catagory.form')
    <div class="d-grid gap-2">
        <button class="btn btn-success">
            Ajouter une catégorie
        </button>
        <a href="{{route('catagory.admin.index')}}" class="btn btn-secondary">
             Annuler la creation de nouvelle catégorie
        </a>
    </div>

</form>
@endsection