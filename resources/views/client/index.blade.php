@extends('template')

@section('content')

@if(isset($clients) AND count($clients)>0)
    <table class="table table-striped">
    <thead>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Telephone</th>
        <th>Email</th>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->email }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endif


@endsection