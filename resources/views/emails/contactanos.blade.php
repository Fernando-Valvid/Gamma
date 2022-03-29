<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA.compatible" content="ie-edge">
    <title>Contactanos</title>
</head>

<body>
    <h1 style="text-align: center">Formulario de Contacto</h1>
    <br>

    <p><strong style="color: #1D00AF">Nombre:</strong>{{$contacto['name']}}</p>
    <p><strong style="color: #1D00AF">Correo:</strong>{{$contacto['email']}}</p>
    <p><strong style="color: #1D00AF">Teléfono:</strong>{{$contacto['phone']}}</p>
    <p><strong style="color: #1D00AF">Mensaje:</strong>{{$contacto['message']}}</p>
</body>
</html>
