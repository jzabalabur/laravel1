<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Index</title>
</head>
<body>
    <h2>Notes</h2>
    <ul>
    <!-- Recorre el array notas -->
    @foreach ($notas as $nota)
    <!-- Imprime el titulo de cada nota -->
    <li>{{$nota->title}}</li>

    <!-- Imprime cada nota entera -->
    <!-- <li>{{$nota}}</li> -->
    @endforeach

    </ul>
</body>
</html>