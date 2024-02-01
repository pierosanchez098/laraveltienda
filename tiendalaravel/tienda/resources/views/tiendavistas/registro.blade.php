<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    
<h1>Regístrate</h1>

<form action="{{route('tienda.registrar')}}" method="get" >

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

<input type="submit" value="Registrarse">

</form>

<h2>Si ya te registraste, regresa a logearte</h2>
<a href="{{ route('tienda.login') }}">Regresar al login</a>

</body>
</html>
