@if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>'))  !!}
    </ul>

@endif

<form action="authenticate" method="POST">
    <label for="">Email <input type="text" name="email"> </label><br>
    <label for="">Password <input type="password" name="password"> </label><br>
    <input type="submit" value="Login">
    @csrf
</form>
