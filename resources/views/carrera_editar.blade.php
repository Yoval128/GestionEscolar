<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carrera</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Editar Carrera</h3>
        <form action="{{ route('carrera_actualizar', $carrera->id_carrera) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="text" name="clave" class="form-control" value="{{ $carrera->clave }}" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $carrera->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="descripccion">Descripción</label>
                <textarea name="descripccion" class="form-control" required>{{ $carrera->descripccion }}</textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" name="activo" class="form-check-input" id="activo" {{ $carrera->activo ? 'checked' : '' }}>
                <label class="form-check-label" for="activo">Activo</label>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
