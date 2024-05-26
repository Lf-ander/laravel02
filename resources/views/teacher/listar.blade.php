<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <center>
        <table class="table" >
                <td>
                    <h4>Id
                </td>
                <td>
                    <h4>DNI
                </td>
                <td>
                    <h4>Nombre
                </td>
                <td>
                    <h4>Direccion
                </td>
                <td>
                    <h4>Celular
                </td>
                <td></td>
                <td></td>
                <td></td>
                @foreach ($teachers as $dato)
                    {{-- function listar --}}
                    <tr>
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->dni }}</td>
                        <td>{{ $dato->nombre_profesor }}</td>
                        <td>{{ $dato->direccion }}</td>
                        <td>{{ $dato->celular }} </td>
                        
                        <td><a href="{{ route('teacher.show', $dato->id) }}" style="text-decoration: none">Mostrar</a>
                        </td>
                        <td><a href="{{ route('teacher.edit', $dato->id) }}" style="text-decoration: none">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('teacher.destroy', $dato->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </center>
</body>
</html>