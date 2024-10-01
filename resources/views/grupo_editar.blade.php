<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Grupo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Editar Grupo</h3>
        <form action="{{ route('grupo_actualizar', $grupo->id_grupo) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="text" name="clave" class="form-control" value="{{ $grupo->clave }}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $grupo->nombre }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
