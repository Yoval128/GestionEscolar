<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carrera-Grupo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Editar Carrera-Grupo</h3>
        <form action="{{ route('carrera_grupo_actualizar', $carrera_grupo->id_carrera_grupo) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_carrera">ID Carrera</label>
                <input type="number" name="id_carrera" class="form-control" value="{{ $carrera_grupo->id_carrera }}" required>
            </div>
            <div class="form-group">
                <label for="id_grupo">ID Grupo</label>
                <input type="number" name="id_grupo" class="form-control" value="{{ $carrera_grupo->id_grupo }}" required>
            </div>
            <div class="form-check">
                <input type="checkbox" name="activo" class="form-check-input" id="activo" {{ $carrera_grupo->activo ? 'checked' : '' }}>
                <label class="form-check-label" for="activo">Activo</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
