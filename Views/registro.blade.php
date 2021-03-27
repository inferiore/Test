<form method="post" action="/usuarios/almacenar">

    @if(isset($errors))
        <p>
            Los siguientes errores fueron en contrados
        </p>
        <ul>
        @foreach($errors as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif
    <label for="nombre_completo">Nombre Completo</label>
    <input id="nombre_completo"  name="nombre_completo" type="text" value="{{$nombre_completo}}">
    <br>
    <label for="identificacion">Identificación</label>
    <input id="identificacion"  name="identificacion" type="text" value="{{$identificacion}}">
    <br>
    <label for="email">E-mail</label>
    <input id="email"  name="email" type="text" value="{{$email}}">
    <br>
    <label for="contrasena">Contraseña</label>
    <input id="contrasena"  name="contrasena" type="password" value="{{$email}}">
    <br>
    <input id="buscar" name="buscar" type="submit">
</form>