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
        </thead>
        <tbody>
    @foreach($listeBoissons as $boisson)
        <tr>
        <td>Boisson "{{$boisson->nom}}"</td>



        <td><a href="/boissons/{{$boisson->id}}" type="button" class="btn btn-info" >détails</a></td>
    </tr>
    @endforeach

        </tbody>
    </table>
</div>
@endsection