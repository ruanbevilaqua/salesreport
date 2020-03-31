@extends('template')

@section('content')
    <h1 class="display-3">Bem vindo, {{Auth::user()->name}}!</h1>
    <p>Utilize o menu acima para acessar as funcionalidades do sistema.</p>
    <div class="row">
        <div class="col-md-4">
        <h2>Atenção</h2>
        <p>O objetivo deste sistema é visualizar e exportar informações referentes a pedidos. Não telas para gerenciar todas as entidades existentes no sistema, contudo você pode utilizar qualquer cliente de API REST (Postman ou Imsomnia, por exemplo) e incluir novos dados.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Quero ver »</a></p>
        </div>
        <div class="col-md-4">
        <h2>Head 2</h2>
        <p> </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
        <h2>Head 3</h2>
        <p></p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>
@endsection