<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
                <br><br>
                <h1>Registrar Profesor</h1>
                <br>
                
                <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf 
                    <label  class="form-label">
                        Dni:
                        <br>
                        <input class="form-control" type="text" name="dni"  class="form-control" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Nombre:
                        <br>
                        <input class="form-control"  type="text" name="nombre_profesor" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Direccion:
                        <br>
                        <input class="form-control"  type="text" name="direccion" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Celular:
                        <br>
                        <input class="form-control"  type="text" name="celular" required>
                    </label>
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit" >Crear</button>
                </form>
    </center>
            <br><br><br>
</body>
</html>