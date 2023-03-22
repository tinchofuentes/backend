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
    <h3>Recibiste un mensaje de <strong>{{ $contacto['name']}}</strong></h3>
    <p>Email de contacto: <strong>{{ $contacto['email']}}</strong></p>
    <p>Teléfono de contacto: <strong>{{ $contacto['phone']}}</strong></p>
    <p>Mensaje del contacto: <strong>{{ $contacto['message']}}</strong></p>
</body>
</html>
