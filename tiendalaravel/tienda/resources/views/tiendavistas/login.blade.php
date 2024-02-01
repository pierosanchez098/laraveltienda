<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<h1>Iniciar sesion</h1>

<form action="{{route('tienda.login')}}" method="get" >

    <label for="nick">Nick:</label>
    <input id="nick" type="text" name="nick" required/> 

    <label for="contrasena">Contraseña:</label>
    <input id="contrasena" type="password" name="contrasena" required/> 

    <button type="submit">Entrar</button>
</form>

<h4>Sino estás registrado, regístrate</h4>
<a href="{{ route('tienda.registro') }}">Registrarse</a>

</body>
</html>


                               
