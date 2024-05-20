<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mostrar Productos</title>
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
					Jugos
					</a>

					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a href="/jumex/create" class="nav-link active" aria-current="page">Crear Jugo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/jumex">Ver Jugos</a>
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
		
		<h1>Sabores</h1>

		<div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Sabor</th>
						<th scope="col">Modificar</th>
						<th scope="col">Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">{{$sabor->id}}</th>
						<td>{{$sabor->Sabores}}</td>
						<td><a href="/sabor/{{$sabor->id}}/edit">Modificar</a></td>
						<td>
							<form method="POST" action="/sabor/{{$sabor->id}}" id="formulario">
								@csrf
								@method('DELETE')		
								<input class="delete"  type="submit"  name="action" value="Eliminar">
							</form>
						</td>
					</tr>
				</tbody>
			</table>  
		</div>
	</body>

</html>