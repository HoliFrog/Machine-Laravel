@extends('Machine1000')

@section('title')
    La page des boissons
@endsection

@section('content')
    <div>
        <table class="table table-bordered table-hover">
            <thead>
            <th>
                Nom de la boisson
            </th>

            <th>
                Infos boisson
            </th>
            <th>Modification</th>
            <th>Suppression</th>

            </thead>
            <tbody>
            @foreach($listeBoissons as $boisson)
                <tr>
                    <td>Boisson "{{$boisson->nom}}"</td>


                    <td><a href="/boissons/{{$boisson->id}}" type="button" class="btn btn-info">détails</a></td>

                    <td><a href="/boissons/edit/{{$boisson->id}}" type="button" class="btn btn-info">Modifier</a></td>
                    <td>
                        <form action="/boissons/{{$boisson->id}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger btn-lg"  value="Supprimer la boisson {{$boisson->nom}}" >
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <a type="button" class="btn btn-primary btn-lg" href="{{url('boissons/addNewDrink')}}">Créer nouvelle
            boisson </a>

    </div>
@endsection