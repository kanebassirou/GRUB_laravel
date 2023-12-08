@extends('layaut')

@section('title', "Formulaire de modification d'une catégorie")
 @section('content')
    <h3>Formulaire de modification d'une catégorie :
      <strong> {{$catagory->name}}</strong>
    </h3>

    <form action="{{route('catagory.admin.update',$catagory->id)}}" method="post">
        @csrf
        @method('put')
        @include('catagory.form')
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-warning">
                Modifier la catégorie
            </button>
            <a href="{{route('catagory.admin.index')}}" class="btn btn-secondary">
                 Annuler la modification de la catégorie
            </a>
        </div>
    </form>
    @endsection