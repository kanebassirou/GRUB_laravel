@extends('layaut')

@section('title', "Création d'un produit")

@section('content')
    <h3>Création d'un nouveau produit</h3>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        @include('product.form')

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">
                Ajouter le produit
            </button>
            <a href="{{route('products.index')}}" class="btn btn-secondary">
                Annuler la creation du nouveaux produits
           </a>
        </div>
    </form>
@endsection
