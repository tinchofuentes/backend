<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
</head>
<body>
    <h2>Tienes un mensaje nuevo!</h2>
    <p>Recibiste un mensaje de {{ $request['name']}}</p>
    <p>Email de contacto: {{ $request['email']}}</p>
    <p>Teléfono de contacto: {{ $request['phone']}}</p>
    <p>Mensaje del contacto: {{ $request['message']}}</p>
</body>
</html>
