<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Nombre del contacto</title>
    <link rel="stylesheet" href="../css/verContacto.css">
    
</head>
<body>
    <nav class="navbar">
        <div class="container" id="contenedor-titulo">
            <a href="paginaP.php" class="navbar-brand"> <img src="../assets/arrow-back.svg" alt="No found" width="25" />  Regresar </a>
        </div>
    </nav>
    <div class="container" id="contenedor-tarjeta">
        <div class="tarjeta col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <!-- tarjeta del contacto -->
            <section class="tarjeta-contacto col-lg-6 col-md-6 col-sm-11 col-11">
                <div class="foto mb-5 text-center pt-2 pb-1 col-lg-12 col-md-12 col-sm-12 col-12">
                    <img class="col-lg-12 col-md-12 col-sm-12 col-12" src="../assets/persona.jpg" alt="No found">
                </div>
                <hr class="col-lg-10 col-md-10 col-sm-10 col-10">
                <div class="nombre mb-1 text-center pt-1 pb-1">
                    <p id="nombre-campo"> Pedro sanchez </p>
                </div>
                <div class="cedula mb-1 text-center pt-1 pb-1">
                    <p id="cedula-campo"> 120244848 </p>
                </div>
                <div class="telefono mb-1 text-center pt-1 pb-1">
                    <p id="telefono-campo"> 3012501247 </p>
                </div>
                <div class="correo mb-1 text-center pt-1 pb-1">
                    <p id="correo-campo"> pedro@hotmail.com </p>
                </div>
                <div class="ciudad mb-1 text-center pt-1 pb-1">
                    <p id="ciudad-campo"> Cali </p>
                </div>
                <div class="salario mb-1 text-center pt-1 pb-1">
                    <p id="salario-campo"> 1.200.000 </p>
                </div>
                <div class="fecha mb-1 text-center pt-1 pb-1">
                    <p id="fecha-campo"> 10/4/2015 </p>
                </div>
            </section>
        </div>

        <!-- boton de editar -->
        <div class="boton-editar col-lg-12 col-md-12 col-sm-12 col-12 mt-1 text-center">
            <button class="col-lg-6 col-md-6 col-sm-8 col-8"id="editar"> <a href="#">Editar</a></button>
        </div>
    </div>
</body>
</html>