    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventario</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ff9db9c428.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../css/inicio.css">
        <link rel="stylesheet" href="../../css/areas.css">
    </head>
    <body>
    <header class="header">
    <a href="#" class="titulo">Areas</a>
        <nav class="navbar">
        <a href="../../index.html">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        </nav>
    </header>
    <form class="frmEdit col-4 p-3 m-auto" method="POST" action="agregar.php">
        <h3 class="text-center alert alert-secondary">Editar areas</h3>
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="locat" class="form-label">Ubicación</label>
        <input type="text" class="form-control" id="locat" name="locat">
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>