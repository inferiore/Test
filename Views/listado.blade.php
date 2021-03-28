<form method="get" action="/usuarios/listar">
    <label for="nombre_o_email">Nombre o Email</label>
    <input id="nombre_o_email"  name="nombre_o_email" type="text" value="{{$nombre_o_email}}">
    <input id="buscar" name="buscar" type="submit">
</form>

<table>
    <thead>
        <th>
            Nombre
        </th>
        <th>
            Identificacion
        </th>
        <th>
            Email
        </th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>
                {{$usuario["nombre_completo"]}}
            </td>
            <td>
                {{$usuario["identificacion"]}}
            </td>
            <td>
                {{$usuario["email"]}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="../autenticacion/logout"> Salir </a>