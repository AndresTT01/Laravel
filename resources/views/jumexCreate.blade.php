<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	{{-- @vite(['resources/css/app.css',]) --}}
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="https://cdn-3.expansion.mx/dims4/default/5f4e109/2147483647/strip/true/crop/732x477+0+0/resize/1200x782!/format/webp/quality/60/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F76%2Fbc%2F5ea06e1c41dab8c510b3c8370d39%2Fistock-654357990.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                JUGOS
                </a>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="/jumex" class="nav-link" href="#">Ver Jugos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sabor/create">Crear sabor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sabor">Ver sabor</a>
                    </li>
                </ul>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <h1>Crear Jugo</h1>
    <br>
    <div class="f">
        <form class="form" method="POST" action="/jumex" id="formulario">
        @csrf
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Selecciona un sabor</label>
                <select class="form-select" aria-label="Default select example" name="Sabores[]" id="Sabores" multiple>
                    <option selectd disable></option>
                    @foreach($Sabores as $Sabores)
                    <option value="{{$Sabores->id}}">{{ $Sabores->Sabores }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="Categoria" id="Categoria">
            </div>
            <div class="mb-3">
                <label for="Precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="Precio" id="Precio">
            </div>
            
            <input type="submit" class="btn btn-primary" name="action" value="enviar">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>