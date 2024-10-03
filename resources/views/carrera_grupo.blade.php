<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Carrera a Grupo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
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
                        <li class="nav-carreras_grupos">
                            <a class="nav-link" href="{{ route('alumno') }}">Alumnos</a>
                        </li>
                        <li class="nav-carreras_grupos">
                            <a class="nav-link" href="{{ route('grupo') }}">Grupo</a>
                        </li>
                        <li class="nav-carreras_grupos">
                            <a class="nav-link" href="{{ route('asignacion') }}">Asignación</a>
                        </li>
                        <li class="nav-carreras_grupos">
                            <a class="nav-link" href="{{ route('carrera') }}">Carrera</a>
                        </li>
                        <li class="nav-carreras_grupos">
                            <a class="nav-link" href="{{ route('carrera_grupo') }}">Carrera_Grupo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br><br>
        <div class="mt-5 pt-5">
            <h3>Carrera a Grupo</h3>
            <h5>Registro</h5>
            <hr>

            <form action="{{ route('carrera_grupo_registrar') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3>Asignación de Carrera a Grupo</h3>

                <div class="mb-3">
                    <label for="id_alumno">Alumno</label>
                    <select name="id_alumno" id="id_alumno" class="form-select">
                        <option selected>Selecciona una opción...</option>
                        @foreach ($alumno as $alumnos)
                            <option value="{{ $alumnos->id_alumno }}">{{ $alumnos->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_carrera">Carrera</label>
                    <select name="id_carrera" id="id_carrera" class="form-select">
                        <option selected>Selecciona una opción...</option>
                        @foreach ($carreras as $carrera)
                            <option value="{{ $carrera->id_carrera }}">{{ $carrera->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_grupo">Grupos</label>
                    <select name="id_grupo" id="id_grupo" class="form-select">
                        <option selected>Selecciona una opción...</option>
                        @foreach ($grupos as $grupo)
                            <option value="{{ $grupo->id_grupo }}">{{ $grupo->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="activo">Activo</label>
                    <select name="activo" id="activo" class="form-select">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>


            <h1>Lista de Carreras y Grupos</h1>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Carrera</th>
                        <th>Grupo</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carrera_grupo as $carreras_grupos)
                        <tr>
                            <td>{{ $carreras_grupos->id_carrera_grupo }}</td>
                            <td>{{ $carreras_grupos->id_carrera }}</td>
                            <td>{{ $carreras_grupos->id_grupo }}</td>
                            <td>{{ $carreras_grupos->activo ? 'Sí' : 'No' }}</td>
                            <td>
                                @if ($carreras_grupos->id_carrera_grupo)
                                    <a
                                        href="{{ route('carrera_grupo_borrar', ['id' => $carreras_grupos->id_carrera_grupo]) }}">
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Seguro que quieres borrar este registro?')">
                                            Borrar
                                        </button>
                                    </a>
                                @else
                                    <button type="button" class="btn btn-danger btn-sm" disabled>Borrar</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
