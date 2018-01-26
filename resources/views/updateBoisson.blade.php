@extends('Machine1000')

@section('title')
    La page de Création
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form class="form-group-lg" method="POST" action="{{ url('boissons/'.$boisson->id) }}" accept-charset="UTF-8">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <label for="nom">Entrez le nom de la nouvelle boisson : </label>
                <input class="form-control" name="nom" type="text" value="{{$boisson->nom}}">
                <label for="prix">Entrez le prix en centimes de la nouvelle boisson : </label>
                <input class="form-control" name="prix" type="text" value="{{$boisson->prix}}">
                <label for="code">Entrez le Nouveau CODE  : </label>
                <input class="form-control" name="CODE" value="{{$boisson->CODE}}">
                <input class="btn btn-danger" type="submit" value="c'est parti mon kiki !">
            </form>
        </div>
    </div>

@endsection