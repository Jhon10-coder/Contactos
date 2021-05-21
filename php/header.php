<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Página principal</title>
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand">Página principal</a>
            <form class="d-flex">
                <div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nombre Usuario
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="AgendarContacto.php">Añadir contacto</a></li>
                            <li><a class="dropdown-item" href="#">Buscar contacto</a></li>
                            <li><a class="dropdown-item" href="../php-backend/salir.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </div>
            </form>
        </div>
    </nav>
</body>
</html>