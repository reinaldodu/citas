<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación cita</title>
</head>
<body>
    <h1>Su cita ha sido agendada</h1>    
    <p>Estimado(a) paciente {{$mailData["nombre"]}}, su cita ha sido asignada exitosamente.</p>
    <p>Los detalles de su cita son los siguientes:</p>
    <p>Fecha: {{$mailData["fecha"]}}</p>
    <p>Hora: {{$mailData["hora"]}}</p>
    <p>Procedimiento: {{$mailData["procedimiento"]}}</p>
    <p>Médico: {{$mailData["medico"]}}</p>
    <br>
    <p>Agradecemos su preferencia.</p>
</body>
</html>