@extends('template')

@section('content')

@if(isset($products) AND count($products)>0)
    <table class="table table-striped">
    <thead>
        <th>Nome do produto</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Cadastrado em:</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ date_format($product->created_at, 'd/m/Y H:i') }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endif


@endsection