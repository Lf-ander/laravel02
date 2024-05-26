<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table class="table">
        
        <br>
        <h1>Lista de modulos</h1>
        <br>

        <td>
            <h4>Id
        </td>
        <td>

        <h4>Codigo

        </td>
        <td>
            <h4>Nombre modulo
        </td>
        
        <td>
            <h4>Id profesor
        </td>
        
        <td>
            <h4>Id alumno
        </td>
                    
        <td></td>
        <td></td>

        @foreach ($modules as $dato)
        {{-- function listar --}}
        
        <tr>
                            
            <td>{{ $dato->id }}</td>
            <td>{{ $dato->codigo }}</td>
            <td>{{ $dato->nombre_modulo }}</td>
            <td>{{ $dato->id_profesor }}</td>
            <td>{{ $dato->id_student }}</td>
                            

        <td><a class="btn btn-primary" href="{{ route('module.show', $dato->id) }}" style="text-decoration: none">Mostrar</a></td>
        <td><a class="btn btn-primary" href="{{ route('module.edit', $dato->id) }}" style="text-decoration: none">Editar</a></td>
        
        <td>
            <form action="{{ route('module.destroy', $dato->id) }}" method="POST">
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