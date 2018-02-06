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

            @foreach($boisson as $boisso)
            <td>{{$boisso->nom}}</td>
            <td>{{$boisso->nom}}</td>
            <td>{{$boisso->prix}} centimes</td>
            <td>{{$boisso->CODE}}</td>


            @endforeach

       
    </tr>
    *</tbody>
</table>
</div>

@endsection