<form action="{{ route('logout') }}" method="POST">
    {{ csrf_field() }}
    <input type="submit" value="logout">
</form>

<h3>You are logged in!</h3>
