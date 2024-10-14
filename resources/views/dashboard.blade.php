<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    @csrf
    <h1>Bem-vindo ao Dashboard! {{session('nome')}}</h1>
</body>
</html>
