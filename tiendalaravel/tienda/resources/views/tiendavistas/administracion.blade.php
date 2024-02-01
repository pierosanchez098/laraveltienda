<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>
<body>
    
<h1>Administración</h1>

<h3>¿Que quieres administrar?</h3>

<a href="{{ route('tienda.crudcatalogo') }}">Catálogo de productos</a>
<a href="{{ route('tienda.crudcategoria') }}">Categorías</a>
<a href="{{ route('tienda.crudusuario') }}">Usuarios</a>


</body>
</html>