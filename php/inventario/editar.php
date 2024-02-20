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
        <link rel="stylesheet" href="../../css/inventario.css">
    </head>
    <body>
    <header class="header">
    <a href="#" class="titulo">Inventario</a>
        <nav class="navbar">
        <a href="inventario.php">Regresar</a>
        <a href="../../index.html">Inicio</a>
        <a href="#">Contact</a>
        </nav>
    </header>
    <form class="frmEdit col-4 p-3 m-auto" method="POST" action="update.php">
        <h3 class="text-center alert alert-secondary">Editar producto</h3>
        <?php
	        require ("../../conexion/classConnectionMySQL.php");

			// Creamos una nueva instancia
			$NewConn = new ConnectionMySQL();
			// Creamos una nueva conexion
			$NewConn->CreateConnection();
			/////////
			$id= $_GET['id'];
			
			///Consulta a la base de datos
			$query = "Select * from inventario WHERE id = $id";
			$result = $NewConn -> ExecuteQuery($query);
            while($datos=$result->fetch_object()){?>
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $datos->id ?>">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="nombre" value="<?= $datos->Nombre ?>">
                </div>
                <div class="mb-3">
                    <label for="locat" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $datos->Descripcion ?>">
                </div>
                <div class="mb-3">
                    <label for="locat" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="serie" name="serie" value="<?= $datos->Serie ?>">
                </div>
                <div class="mb-3">
                    <label for="locat" class="form-label">Color</label>
                    <input type="text" class="form-control" id="color" name="color" value="<?= $datos->Color ?>">
                </div>
                <div class="mb-3">
                    <label for="locat" class="form-label">Fecha adquision</label>
                    <input type="date" class="form-control" id="fechaAd" name="fechaAd" value="<?= $datos->FechaAd ?>">
                </div>
                <div class="mb-3">
                    <label for="locat" class="form-label">Tipo adquision</label>
                    <input type="text" class="form-control" id="tipoAd" name="tipoAd" value="<?= $datos->TipoAd ?>">
                </div>
                <div class="mb-3">
                    <label for="locat" class="form-label">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?= $datos->Observaciones ?>">
                </div>
            <?php }
            ?>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>