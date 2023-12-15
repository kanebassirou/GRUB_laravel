@extends('layout')

@section('content')
<div class="container">
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="form-group">
        @csrf
        @method('PUT')

        <label for="name" class="form-label">Nom du produit</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control">

        <label for="price" class="form-label">Prix</label>
        <input type="number" id="price" name="price" value="{{ $product->price }}" class="form-control">

        <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
    </form>
</div>
@endsection