<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Contraseña</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Eliminar/Actualizar</th>
                </tr>
                <tbody>
                    @foreach ($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nombre }}</td>
                        <td>{{ $registro->apellido }}</td>
                        <td>{{ $registro->email }}</td>
                        <td>{{ $registro->telefono }}</td>
                        <td>{{ $registro->contrasena }}</td>
                        <td>{{ $registro->created_at }}</td>
                        <td>{{ $registro->updated_at }}</td>
                        <td>
                            <form action="{{route('editarFormulario',$registro->id)}}" method="GET">
                                @csrf
                                    <input type="submit" value="Actualizar" class="btn btn-primary">
                                </form>
                            <form action="{{route('eliminarFormulario',$registro->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
