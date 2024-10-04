<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
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
        <h3>Lista de Carreras</h3>
        <h5>CRUD: CARRERAS</h5>
        <hr>
        <p style="text-align: right;">
            <a href="{{ route('carrera_alta') }}">
                <button type="button" class="btn btn-primary btn-sm">Nuevo Registro Carrera</button>
            </a>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carrera as $carreras)
                <tr>
                    <td>{{ $carreras->id_carrera }}</td>
                    <td>{{ $carreras->clave }}</td>
                    <td>{{ $carreras->nombre }}</td>
                    <td>{{ $carreras->descripccion }}</td>
                    <td>{{ $carreras->activo ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('carrera_editar', ['id' => $carreras->id_carrera]) }}">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>
                        <a href="{{ route('carrera_borrar', ['id' => $carreras->id_carrera]) }}">
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
    </div>
</body>

</html>
