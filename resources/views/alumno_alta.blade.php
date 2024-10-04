<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Alta de Alumnos</title>
</head>

<body>
    <div class="container">
        <h3>Nuevo registro de Alumnos</h3>
        <h5>CRUD: Alumnos -> Registro</h5>
        <hr>
        <br>
        <form action="{{ route('alumno_registrar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Datos personales</h3>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"
                    id="floatingNombre" placeholder="EJEMPLO: Omar Yoval" aria-describedby="NombreHelp">
                <label for="floatingNombre">Nombre:</label>
                <div id="NombreHelp" class="form-text">
                    @if ($errors->first('nombre'))
                        <i>El campo nombre no es correcto!</i>
                    @endif
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="fn" value="{{ old('fn') }}"
                    id="floatingFn" placeholder="EJEMPLO: 08/12/2001" aria-describedby="fnHelp">
                <label for="floatingFn">Fecha de Nacimiento:</label>
                <div id="fnHelp" class="form-text">Coloque su Fecha de Nacimiento <i>FORMATO</i> dia/mes/año</div>
            </div>

            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="foto" id="floatingFoto" 
                    aria-describedby="fotoHelp">
                <label for="floatingFoto">Foto:</label>
                <div id="fotoHelp" class="form-text">Busque una imagen de perfil <i>FORMATOS</i> jpg/png/bmp</div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('alumno') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>

</html>
