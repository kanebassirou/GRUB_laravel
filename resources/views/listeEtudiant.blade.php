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
            <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('Ajouter') }}" class="btn btn-primary mx-5">Ajouter un étudiant</a>
                    <a href="{{ route('RechercheAfficher') }}" class="btn btn-primary mx-5">Rechercher</a>
                </div>
            </div>
            
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
                    @php
                        $ide = 1;
                    @endphp
                    @foreach ($etudiants as $etudiant )
               
                    <tr>
                        <td>{{$ide}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->niveau}}</td>
                        <td>
                            <a href="{{ route('Update', ['id' => $etudiant->id]) }}" class="btn btn-info">update</a>
                            <a href="{{ route('Delete', ['id' => $etudiant->id]) }} "onclick="return confirm('Voulez-vous vraiment supprimer cet employé ?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @php
                        $ide +=1;
                    @endphp
                    @endforeach
                </tbody>
            </table>
           {{$etudiants->links() }}

        </div>
    </div>
</div>
@endsection