<form method="post" action="/Autenticacion/login">

    @if(isset($error))
        <p>
            Combinación de email y contraseña no validos
        </p>
    @endif
    <label for="email">E-mail</label>
    <input id="email"  name="email" type="text" value="{{$email}}">
    <br>
    <label for="contrasena">Contraseña</label>
    <input id="contrasena"  name="contrasena" type="password" value="{{$email}}">
    <br>
    <input id="buscar" name="buscar" type="submit">

    <p>No estas registrado? registrate <a href="../usuarios/registrar"> aqui!</a></p>
</form>