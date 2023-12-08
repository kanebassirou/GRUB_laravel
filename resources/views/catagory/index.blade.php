@extends('layaut')
@section('title', 'les liste des catagories')
@section('content')<
    <h1>les liste des articles</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('catagory.admin.create') }}" class="btn btn-primary" type="button">Ajouter</a>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        
    @endif
    <table class="table table-striped"> 
        <thead>
            <th>nom du catagorie</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($catagory as $catagories)
                <tr>
                    <td>{{ $catagories->name }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route("catagory.admin.edit",$catagories->id) }}">
                            Modifier
                        </a>
                      <form action="{{route("catagory.admin.destroy",$catagories->id)}}
                        " method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment supprimer cette catégorie ?')">
                                Supprimer
                            </button>
                    </form>
                        
                    </td>
    
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-grid gap-2">
    {{$catagory->links()}}
    </div>
    @endsection
    