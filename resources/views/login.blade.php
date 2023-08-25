<form action="{{ route('viewLogin') }}" method="post">
    @csrf
    <label>
        <input type="email" name="email">
    </label>
    <label>
        <input type="password" name="password">
    </label>
    <input type="submit" value="Submit">
</form>
