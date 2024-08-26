<!DOCTYPE html>
<html>
<head>
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <p><strong>Nombre:</strong> {{ $contact['name'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $contact['phone'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $contact['message'] }}</p>
</body>
</html>
