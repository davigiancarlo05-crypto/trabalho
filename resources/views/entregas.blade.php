<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Entregas | LogisExpress</title>
</head>
<body>

    <h1>Entregas LogisExpress</h1>

    <ul>
        @foreach ($entregas as $entrega)
            <li>
                {{ $entrega['destinatario'] }} -
                {{ $entrega['cidade'] }}
            </li>
        @endforeach
    </ul>

</body>
</html>