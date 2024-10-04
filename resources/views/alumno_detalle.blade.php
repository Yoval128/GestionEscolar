<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles Alumno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ url('img/logo_utvt.png') }}" alt="Logo" width="30" height="30">
                    TSU-DSM:
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('alumno') }}">Alumnos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('grupo') }}">Grupo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('asignacion') }}">Asignación</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-5 pt-5">
            <h3>Detalle de alumno</h3>
            <h5>CRUD: Alumnos Detalle</h5>
            <hr>
            
            <img src="{{ url('/img/' . $alumno->foto) }}" style="width: 200px;" > <br>
            {{ url('img/' . $alumno->foto) }} <br><br>

            <a href="{{ url('/img/' . $alumno->foto) }}" target="_blank">
                <button type="button" class="btn btn-success">Archivo</button>
            </a> <br><hr>

            <b>ID:</b> {{ $alumno->id_alumno }} <br>
            <b>Nombre:</b> {{ $alumno->nombre }} <br>
            <b>Fecha de nacimiento:</b> {{ $alumno->fn }} <br><br>

            <a href="{{ route('alumno') }}">
                <button type="button" class="btn btn-success">Regresar</button>
            </a>
        </div>
    </div>
</body>

</html>
