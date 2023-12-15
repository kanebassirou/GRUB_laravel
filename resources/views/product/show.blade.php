@extends('layaut')

@section('title', $product->title)

@section('content')
    <div class="row col-md-12">
        <div class="col-md-3">
            <img src="{{ $product->image }}" class="img img-thumbnail" width="300">
            
        </div>
        <div class="col-md-9">
            <h3> {{ $product->title }}</h3>
            <p class="text">{{ $product->price }} FCFA</p>
            <p class="text">
                {!! $product->description !!}
            </p>
            <p class="text">
                <strong>Stock :</strong>{{ $product->stock }}
            </p>
            <p class="text">
                @if ($product->status == true)
                    <span class="badge text-bg-success">
                        Activé
                    </span>
                    @else 
                    <span class="badge text-bg-danger">
                        Désactivé
                    </span>
                @endif
            </p>
            <p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">
                    Retour à la liste des produits
                </a>
            </p>
        </div>
    </div>
@endsection
