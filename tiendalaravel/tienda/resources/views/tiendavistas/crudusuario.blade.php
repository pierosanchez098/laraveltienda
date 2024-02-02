<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD usuarios</title>
</head>
<body>
    <h1>CRUD Usuario</h1>
    
    <h3>Crear usuario:</h3>

    <form action="{{route('tienda.registrarporAdmin')}}" method="get" >

<label>Nick:</label>
<input type="text" name="nick">

<label>Email:</label>
<input type="text" name="email">

<label>Nombre:</label>
<input type="text" name="nombre">

<label>Apellidos:</label>
<input type="text" name="apellidos">

<label>DNI:</label>
<input type="text" name="dni">

<label>Fecha de nacimiento:</label>
<input type="date" name="fecha_nacimiento">

<label>Contraseña:</label>
<input type="text" name="contrasena">

<label>Rol:</label>
<input type="text" name="rol" placeholder="Usuario / Administrador">

<input type="submit" value="Crear usuario">

</form>

    <h3>Ver usuarios:</h3>

    <table>
        <thead>
            <tr>
                <th>Nick</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Fecha de Nacimiento</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nick }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->dni }}</td>
                <td>{{ $usuario->fecha_nacimiento }}</td>
                <td>{{ $usuario->rol }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Actualizar usuario:</h3>
    <h3>Eliminar usuario:</h3>
</body>
</html>