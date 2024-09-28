<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>
<body>
    <h1>Factura #{{ $messageData['numFac'] }}</h1>
    <p>Estimado(a) {{ $messageData['nombreCliente'] }},</p>
    <p>Adjunto encontrará su factura con el número {{ $messageData['numFac'] }}.</p>
    <p>Gracias por su preferencia.</p>
    <p>Atentamente,<br>Softech</p>
</body>
</html>