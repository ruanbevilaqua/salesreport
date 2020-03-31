<html>
<head>
    <title>Relatório</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
    <a class="navbar-brand" href="{{ url('/') }}">Salesreport</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pedidos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('order')}}">Listar pedidos</a>
            <a class="dropdown-item" href="{{url('order/create')}}">Novo pedido</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('order/export')}}">Exportar dados</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produtos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('product')}}">Listar produtos</a>
            <a class="dropdown-item" href="{{url('product/create')}}">Novo produto</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('product/export')}}">Exportar dados</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clientes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('client')}}">Listar clientes</a>
            <a class="dropdown-item" href="{{url('client/create')}}">Novo cliente</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('client/export')}}">Exportar dados</a>
            </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a href="{{url('logout')}}" class="btn btn-outline-danger my-2 my-sm-0 text-white" type="submit">Sair do sistema</a>
        </form>
    </div>
    </nav>
</head>
<body style="background-color: #e7e7e7;">
    <div class="container center">
        <div class="card" style="margin-top: 50px" id="printable">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
        <button class="btn btn-primary" onClick="printContent()">Imprimir</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function printContent()
        {
            var contentToPrint = document.getElementById('printable').innerHTML;
            var originalPage = document.body.innerHTML;
            
            document.body.innerHTML = contentToPrint;

            window.print();

            document.body.innerHTML = originalPage;
        }
    </script>

    @yield('js')
</body>
