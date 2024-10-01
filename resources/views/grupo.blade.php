<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Grupos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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

        <br><br><br> 
        <br><br>
        <h3>Lista de Grupos</h3>
        <hr>
        <p style="text-align: right;">
            <a href="{{route('grupo_alta')}}">
                <button type="button" class="btn btn-primary btn-sm">Nuevo Registro Grupo</button>
            </a>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Acciones</th> <!-- Nueva columna para los botones de acción -->
                </tr>
            </thead>
            <tbody>
                @foreach($grupo as $grupos)
                <tr>
                    <td>{{$grupos->id_grupo}}</td>
                    <td>{{$grupos->clave}}</td>
                    <td>{{$grupos->nombre}}</td>
                    <td>
                        <!-- Botón de Editar -->
                        <a href="{{ route('grupo_editar', ['id' => $grupos->id_grupo]) }}">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>
                        
                        <!-- Botón de Borrar -->
                        <a href="{{ route('grupo_borrar', ['id' => $grupos->id_grupo]) }}">
                            <button type="button" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('¿Seguro que quieres borrar este registro?')">Borrar</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
