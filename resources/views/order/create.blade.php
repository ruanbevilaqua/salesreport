@extends('template')

@section('content')
<form class="form" action="{{url('order')}}" method="post">
@csrf
<div class="form-group">
    <label for="client_id">Cliente</label>
    <select class="form-control" required="required" id="client_id" name="client_id">
        <option  value="">-- SELECIONE UM CLIENTE --</option>
        @if(isset($clients))
            @foreach($clients as $client)
            <option  value="{{$client->id}}">{{$client->name}}</option>
            @endforeach
        @endif
    </select>
</div>

@if(isset($products))
    <div class="card-deck mb-3 text-center">
    @foreach($products as $product)
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{$product->name}}</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$ {{number_format($product->price, 2, ',', '.')}} <small class="text-muted"></small></h1>
            {{$product->description}}
            <div class="form-group form-inline">
                <label for="amount[{{$product->id}}]">Quantidade </label>
                <input class="form-control col-md-5" type="number" name="amount[{{$product->id}}]" id="amount[{{$product->id}}]">
            </div>
          </div>
        </div>
    @endforeach
    </div>

    <div class="form-group">
        <label for="payment_type">Detalhes de pagamento</label>
        <input class="form-control" required="required" id="payment_type" name="payment_type">
    </div>

    <input type="submit" class="btn btn-primary" value="Confirmar pedido">
</form>
@endif


@endsection