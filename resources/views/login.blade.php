<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>



<body style="background-color: #e7e7e7;">
<div class="container center" style="margin-top: 100px">

    @if(session('status'))
    <div class="alert alert-danger" role="alert">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{ url('/api/login') }}" method="post" >
        <div>
            <span>Email</span>
            <input type="text" name="email">
        </div>
        <div>
            <span>Senha</span>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</div>
</body>