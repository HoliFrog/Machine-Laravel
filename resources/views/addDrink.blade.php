@extends('Machine1000')

@section('title')
    La page de Création
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form class="form-group-lg" method="POST" action="{{ url('boissons') }}" accept-charset="UTF-8">
                {{ csrf_field() }}

                <label for="nom">Entrez le nom de la nouvelle boisson : </label>
                <input class="form-control" name="nom" type="text" placeholder="ici!!!">
                <label for="prix">Entrez le prix en centimes de la nouvelle boisson : </label>
                <input class="form-control" name="prix" type="text" placeholder="en centimes!!!">
                <label for="code">Entrez le CODE de la nouvelle boisson : </label>
                <input class="form-control" name="CODE" placeholder="ex : COD (trois lettres max en MAJUSCULE:-)">
                <input class="btn btn-danger" type="submit" value="c'est parti mon kiki !">
            </form>
        </div>
    </div>

@endsection