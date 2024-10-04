<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Grupo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Nuevo Registro de Grupo</h3>
        <hr><br>
        <form action="{{route('grupo_registrar')}}" method="post">
            {{csrf_field()}}
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="clave" id="clave" placeholder="Clave del grupo" value="{{old('clave')}}">
                <label for="clave">Clave del Grupo</label>
                <div class="form-text">@if($errors->first('clave')) <i>El campo clave es obligatorio.</i>@endif</div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del grupo" value="{{old('nombre')}}">
                <label for="nombre">Nombre del Grupo</label>
                <div class="form-text">@if($errors->first('nombre')) <i>El campo nombre es obligatorio.</i>@endif</div>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{route('grupo')}}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>
    </div>
</body>
</html>
