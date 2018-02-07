@extends('Machine1000')

@section('title')
La page des infos boissons
@endsection

@section('content')
<div>
<table border="3">
    <thead>
    <th>Boisson </th>
    <th>Nom </th>
    <th>Prix </th>
    <th>Code </th>
    </thead>
    <tbody>
    <tr>

            {{--@foreach($boisson as $boisso)--}}{{--pour le dépoiement d'un tabelau de raw query--}}
            <td>{{$boisson->nom}}</td>
            <td>{{$boisson->nom}}</td>
            <td>{{$boisson->prix}} centimes</td>
            <td>{{$boisson->CODE}}</td>


            {{--@endforeach--}}


    </tr>
    </tbody>
</table>
</div>

@endsection