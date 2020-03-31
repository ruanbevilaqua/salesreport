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