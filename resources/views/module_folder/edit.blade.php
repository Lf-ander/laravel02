<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <br>
        <h1>Actualizar modulo</h1>
        <br>

         <form action="{{ route('module.update', $dato) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <label class="form-label">
                Codigo
                <br>
                <input type="text" name="codigo" value="{{ old('codigo', $dato->codigo) }}">
            </label>

            <br>

            <label class="form-label">
                Nombre Modulo:
                <br>
                <input type="text" name="nombre_modulo" value="{{ old('nombre_modulo', $dato->nombre_modulo) }}">
            </label>

            <br>

            <label class="form-label">
                Id profesor
                <br>
                <input type="text" name="id_profesor" value="{{ old('id_profesor', $dato->id_profesor) }}">
            </label>
            
            <br>
            
            <label class="form-label">
                Id alumno
                <br>
                <input type="text" name="id_student" value="{{ old('id_student', $dato->id_student) }}">
            </label>

            <br>
            <br>

            <button class="btn btn-primary"  type="submit">Enviar Formulario:</button>

            <br>
            <br><br>
        </form>
    </center>
</body>
</html>