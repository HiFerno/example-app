<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Contactos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Publicidad</th>
                <th>Mensaje</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
                <tr>
                    <td>{{ $contacto->id }}</td>
                    <td>{{ $contacto->nombre }}</td>
                    <td>{{ $contacto->email }}</td>
                    <td>{{ $contacto->publicidad ? 'Sí' : 'No' }}</td>
                    <td>{{ $contacto->mensaje }}</td>
                    <td>{{ $contacto->created_at }}</td>
                    <td>{{ $contacto->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
