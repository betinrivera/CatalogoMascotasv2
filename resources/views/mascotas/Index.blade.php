<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route('mascotas.create')}}">
    <button>Agregar mascota</button>
</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <body>
            @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->precio }}</td>
                    <td>
                        <a href="{{route('mascotas.edit', $mascota->id)}}">
                            <button>Editar</button>
                        </a>
                        <form method="POST" action="{{route('mascotas.destroy', $mascota->id)}}">
                        @csrf
                        @method('DELETE')
                        <button>Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
</body>
</html>