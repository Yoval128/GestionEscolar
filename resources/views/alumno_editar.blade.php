<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br>
        <h3>Editar Alumno</h3>
        <form action="{{ route('alumno_actualizar', $alumno->id_alumno) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $alumno->nombre }}">
            </div>

            <div class="mb-3">
                <label for="fn">Fecha de Nacimiento</label>
                <input type="date" name="fn" class="form-control" value="{{ $alumno->fn }}">
            </div>

            <div class="mb-3">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control">
                <br>
                <img src="{{ asset('img/' . $alumno->foto) }}" style="width: 100px;">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
