@extends('template')

@section('content')
    <h1 class="display-3">Bem vindo, {{Auth::user()->name}}!</h1>
    <p>Utilize o menu acima para acessar as funcionalidades do sistema.</p>
    <div class="row">
        <div class="col-md-4">
        <h2>Atenção</h2>
        <p>O objetivo deste sistema é visualizar e exportar informações referentes a pedidos.
        Para uma melhor experiência, também foi implementado métodos e telas para a criação de usuários, clientes, produtos e pedidos 
        Você pode acessar tudo utilizando o menu superior. Legal né?
        </p>
        <p><button class="btn btn-secondary" onclick="blink()">Aonde? </button></p>
        </div>
        <div class="col-md-4">
        <h2>Impressão de dados</h2>
        <p>Você pode imprimir <a href="#" data-toggle="tooltip" title="It's not a bug, it's a feature!">qualquer página</a> acessada! É só utilizar o botão Imprimir que você encontra embaixo do conteúdo em todas as páginas</p>
        </div>
        <div class="col-md-4">
        <h2>Exportar dados</h2>
        <p>Você também pode exportar os dados para um arquivo no formato CSV.</p>
        <p>Acesse a entidade que você deseja no menu e .</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>
@endsection

@section('js')
<script>
    function blink()
    {
        // original = document.getElementById('navbart').class
        console.log('Blink!')
        document.getElementById('navbar').classList.remove('bg-dark')
        document.getElementById('navbar').classList.add('bg-light')
        setTimeout(function(){ 
            document.getElementById('navbar').classList.remove('bg-light')
            document.getElementById('navbar').classList.add('bg-dark')    
        }, 200);
    }
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection