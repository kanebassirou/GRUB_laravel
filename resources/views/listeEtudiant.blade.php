@extends('base')
@section('title','Liste des etudiants')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>GRUB avec laravel 10</h1>
            <hr>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <br>
            <a href="{{route('Ajouter')}}" class="btn btn-primary">Ajouter un etudiant</a>
            <br>
            <table class="table"> 
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>niveau</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($etudiants as $etudiant )
               
                    <tr>
                        <td>{{$etudiant->id}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->niveau}}</td>
                        <td>
                            <a href="{{ route('Update', ['id' => $etudiant->id]) }}" class="btn btn-info">update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>
@endsection