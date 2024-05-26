<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Asignar Modulo</h1>
            <br>
            <form action="{{ route('module.store') }}" method="POST" enctype="multipart/form-data" >

                @csrf {{-- token o seguridad  --}}
                <label  class="form-label">
                    Codigo
                    <br>
                    <input class="form-control" type="text" name="codigo"  class="form-control" required>
                </label>

                <br>

                <label  class="form-label">
                    Nombre Modulo
                    <br>
                    <input class="form-control"  type="text" name="nombre_modulo" required>
                </label>
                
                <br>
                    
                <label  class="form-label">
                    Id profesor
                    <br>
                    <input class="form-control"  type="text" name="id_profesor" required>
                </label>
                
                <br>
                
                <label  class="form-label">
                    Id alumno
                    <br>
                    <input class="form-control"  type="text" name="id_student" required>
                </label>
                    
                    
                <br>
                <br>
                
                <button class="btn btn-primary" type="submit" >Asignar</button>
                <br>
                <br>
                <br>
            </form>
        </center>
</body>
</html>