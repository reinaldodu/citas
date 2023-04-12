<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelación exitosa</title>
</head>
<body>
    <h1>Cancelación de cita</h1>    
    <p>Estimado(a) paciente {{$cancelarData["nombre"]}}, su cita se canceló de manera correcta.</p>
    <p>Los detalles de su cita cancelada son los siguientes:</p>
    <p>Fecha: {{$cancelarData["fecha"]}}</p>
    <p>Hora: {{$cancelarData["hora"]}}</p>
    <p>Procedimiento: {{$cancelarData["procedimiento"]}}</p>
    <p>Médico: {{$cancelarData["medico"]}}</p>
    <br>
    <p>Si necesita agendar nuevamente, lo puede realizar desde su cuenta o comuníquese con nosotros.

    </p>
</body>
</html>