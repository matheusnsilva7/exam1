<!DOCTYPE html>
<html>

<head>
    <title>Lista de Usuários</title>
</head>

<body>
    <h1>Lista de Usuários</h1>
    <ul>
        @foreach($usuarios as $usuario)
        <li>{{ $usuario->nombre }} {{ $usuario->apellido }}</li>
        @endforeach
    </ul>
</body>

</html>