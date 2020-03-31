@extends('template')

@section('content')

@if(isset($order))
    <div>Data do pedido: {{ date_format($order->created_at, 'd/m/Y H:i') }}</div>
    <div>Cliente: {{ $order->client->name }} (Id: {{ $order->client->id }})</div>
    <div> Pagamento: 
        {{ isset($order->payment->total_value) 
        ? 'R$ ' . number_format($order->payment->total_value, 2, ',', '.') . ' - ' . $order->payment->payment_type . ' - ' . date_format($order->payment->created_at, 'd/m/Y H:i') 
        : 'Sem informação de pagamento' 
        }}
    </div>
    <span>
        Itens:
        @if(isset($order->products))
            <ol>
            @foreach($order->products as $product)
                <li>{{ $product->name }}, R$ {{number_format($product->price, 2, ',', '.')}}</li>
            @endforeach
            </ol>
        @else
            Nenhum produto encontrado para este pedido
        @endif
    </span>
   
@endif


@endsection