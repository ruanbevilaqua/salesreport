@extends('template')

@section('content')

@if(isset($orders) AND count($orders)>0)
    <table class="table table-striped">
    <thead>
        <th>Data do pedido</th>
        <th>Cliente</th>
        <th>Número de itens</th>
        <th>Pagamento</th>
        <th>Gerenciar pedido</th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ date_format($order->created_at, 'd/m/Y H:i') }}</td>
            <td>{{ $order->client->name }}</td>
            <td>{{ count($order->products) }}</td>
            <td>{{ isset($order->payment->total_value) ? 'R$ ' . number_format($order->payment->total_value, 2, ',', '.') . ' - ' . $order->payment->payment_type : 'Sem informação de pagamento' }}</td>
            <td><a class="btn btn-sm btn-primary" href="{{url('order/'.$order->id)}}">Visualizar detalhes</a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endif


@endsection