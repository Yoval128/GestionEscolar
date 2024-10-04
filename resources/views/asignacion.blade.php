<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Asignación de Alumnos a Grupos</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('alumno') }}">Alumnos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('grupo') }}">Grupo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('asignacion') }}">Asignación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('carrera') }}">Carrera</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('carrera_grupo') }}">Carrera_Grupo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br><br>
        <div class="mt-5 pt-5">
            <h3>Alumno a Grupo</h3>
            <h5>Asignación -> Registro</h5>
            <hr>

            <form action="{{ route('asignacion_registrar') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3>Asignación de Alumno a Grupo</h3>

                <div class="mb-3">
                    <label for="id_alumno">Alumnos</label>
                    <select name="id_alumno" id="id_alumno" class="form-select">
                        <option selected>Selecciona una opción...</option>
                        @foreach ($alumno as $alumnos)
                            <option value="{{ $alumnos->id_alumno }}">{{ $alumnos->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_grupo">Grupos</label>
                    <select name="id_grupo" id="id_grupo" class="form-select">
                        <option selected>Selecciona una opción...</option>
                        @foreach ($grupo as $grupos)
                            <option value="{{ $grupos->id_grupo }}">{{ $grupos->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cuatrimestre">Cuatrimestre</label>
                    <select name="cuatrimestre" id="cuatrimestre" class="form-select">
                        <option selected>Selecciona una opción...</option>
                        <option value="Primero">Primero</option>
                        <option value="Segundo">Segundo</option>
                        <option value="Tercero">Tercero</option>
                        <option value="Cuarto">Cuarto</option>
                        <option value="Quinto">Quinto</option>
                        <option value="Sexto">Sexto</option>
                        <option value="Séptimo">Séptimo</option>
                        <option value="Octavo">Octavo</option>
                        <option value="Noveno">Noveno</option>
                        <option value="Décimo">Décimo</option>
                        <option value="Onceavo">Onceavo</option>
                    </select>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

            <h1>Lista de Asignaciones de Alumno a Grupo</h1>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Cuatrimestre</th>
                        <th>Grupo</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignaciones as $asignacion)
                        <tr>
                            <td>{{ $asignacion->id_grupo_alumno }}</td>
                            <td>{{ $asignacion->cuatrimestre }}</td>
                            <td>{{ $asignacion->AgGrupo->nombre }}</td>
                            <td>{{ $asignacion->AgAlumno->nombre }}</td>
                            <td>
                                <a href="{{ route('asignacion_borrar', ['id' => $asignacion->id_grupo_alumno]) }}">
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Seguro que quieres borrar este registro?')">
                                        Borrar
                                    </button>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <br>
            <hr><br>
            <h1>Lista de asignaciones de Alumnos Grupo</h1>
            <br>
            <hr>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>N° Registro</th>
                    <th>Cuatrimestre</th>
                    <th>Clave</th>
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>


                @foreach ($datos as $key => $dato)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->cuatrimestre }}</td>
                        <td>{{ $dato->clave }}</td>
                        <td>{{ $dato->grupo }}</td>
                        <td>{{ $dato->alumno }}</td>
                        <td><a href="{{ route('asignacion_borrar', ['id' => $dato->id]) }}">
                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que quieres borrar este registro?')">
                                    Borrar
                                </button>
                            </a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
