<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Contactos Registrados</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre del Contacto</th>
                <th>Email</th>
                <th>Publicidad</th>
                <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->nombre }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->publicidad ? 'Sí' : 'No' }}</td> <!-- Si publicidad es 1, muestra Sí; si es 0, muestra No -->
                    <td>{{ $contact->mensaje }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($contacts->isEmpty())
        <p>No hay contactos registrados en este momento.</p>
    @endif

</body>
</html>

