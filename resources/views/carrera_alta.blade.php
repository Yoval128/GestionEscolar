<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Alta de Carreras</title>
</head>

<body>
    <div class="container">
        <h3>Nuevo registro de Carreras</h3>
        <h5>CRUD: Carreras -> Registro</h5>
        <hr>
        <br>
        <form action="{{ route('carrera_registrar') }}" method="post">
            {{ csrf_field() }}

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="clave" value="{{ old('clave') }}"
                    id="floatingClave" placeholder="Clave de la carrera" aria-describedby="ClaveHelp">
                <label for="floatingClave">Clave:</label>
                <div id="ClaveHelp" class="form-text">
                    @if ($errors->first('clave'))
                    <i>El campo clave no es correcto!</i>
                    @endif
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"
                    id="floatingNombre" placeholder="Nombre de la carrera" aria-describedby="NombreHelp">
                <label for="floatingNombre">Nombre:</label>
                <div id="NombreHelp" class="form-text">
                    @if ($errors->first('nombre'))
                    <i>El campo nombre no es correcto!</i>
                    @endif
                </div>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" name="descripccion" id="floatingDescripccion"
                    placeholder="Descripción de la carrera" aria-describedby="DescripccionHelp">{{ old('descripccion') }}</textarea>
                <label for="floatingDescripccion">Descripción:</label>
                <div id="DescripccionHelp" class="form-text">
                    @if ($errors->first('descripccion'))
                    <i>El campo descripción no es correcto!</i>
                    @endif
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="activo" id="activo" value="1"
                    {{ old('activo') ? 'checked' : '' }}>
                <label class="form-check-label" for="activo">Activo</label>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('carrera') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>

</html>
