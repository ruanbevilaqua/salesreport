<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>



<body style="background-color: #e7e7e7;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
    <a class="navbar-brand" href="{{ url('/login') }}">Salesreport</a>
</nav>
<div class="container center" style="margin-top: 100px">

    @if(session('status'))
    <div class="alert alert-danger" role="alert">
    {{ session()->pull('status') }}
    </div>
    @endif
    <form class="" action="{{ url('/api/login') }}" method="post" >
        <div class="form-group">
            <span>Email</span>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <span>Senha</span>
            <input class="form-control" type="password" name="password">
        </div>
        <div>
            <input class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>
</div>
</body>