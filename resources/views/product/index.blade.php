@extends('layaut')

@section('title', 'La liste des produits')

@section('content')
    <h3>La liste des produits</h3>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            Ajouter un nouveau produit
        </a>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Désignation</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $products)
                <tr>
                    <td>
                        <img src="{{ $products->image }}" width="50" class="img-thumbnail">
                    </td>
                    <td style="width: 250px">{{ $products->title }}</td>
                    <td>{{ $products->price }} fcfa</td>
                    <td>
                        <span class="badge text-bg-primary">
                            {{ $products->catagory->name }}
                            nom de casse
                        </span>
                    </td>
                    <td>
                        @if ($products->status == true)
                            <span class="badge text-bg-success">
                                Activé
                            </span>
                        @else
                            <span class="badge text-bg-danger">
                                Désactivé
                            </span>
                        @endif
                    </td>
                    <td class="d-inline-flex gap-1">
                        <a href="{{ route('products.show',$products->id)}}" class="btn btn-sm btn-primary">Détail</a>
                        <a href="#" class="btn btn-sm btn-warning">Modifier</a>
                        <a href="#" class="btn btn-sm btn-danger">Modifier</a>
                        {{-- <form action="{{ route('products.destroy',$product->id) }}" method="post">
                            @csrf
                            @method("DELETE") --}}
                            {{-- <input onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"
                            type="submit" value="Supprimer" class="btn btn-danger btn-sm">
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="position-relative">
        <div class="position-absolute start-50">
            {{ $product ->links() }}
        </div>
    </div>

@endsection
