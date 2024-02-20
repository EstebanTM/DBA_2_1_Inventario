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
    </nav>
</header>
<div class="container-fluid row justify-content-center align-items-cente">
<form class="registro col-4 p-3" method="POST" action="agregar.php">
	<h3 class="text-center alert alert-secondary">Registro de productos</h3>
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="locat" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div>
  <div class="mb-3">
    <label for="locat" class="form-label">Serie</label>
    <input type="text" class="form-control" id="serie" name="serie">
  </div>
  <div class="mb-3">
    <label for="locat" class="form-label">Color</label>
    <input type="text" class="form-control" id="color" name="color">
  </div>
  <div class="mb-3">
    <label for="locat" class="form-label">Fecha de adquirido</label>
    <input type="date" class="form-control" id="fechaAd" name="fechaAd">
  </div>
  <div class="mb-3">
    <label for="locat" class="form-label">Tipo de adquision</label>
    <input type="text" class="form-control" id="tipoAd" name="tipoAd">
  </div>
  <div class="mb-3">
    <label for="locat" class="form-label">Observaciones</label>
    <input type="text" class="form-control" id="observaciones" name="observaciones">
  </div>
  <div class="mb-3">
    <label for="locat" class="form-label">Area</label>
    <select class="form-control" id="area" name="area">
    <?php
      // Realizar una consulta para obtener las áreas disponibles
      require("../../conexion/classConnectionMySQL.php");
      $Newconn = new ConnectionMySQL();
      $Newconn->CreateConnection();

      $query_areas = "SELECT id, nombre FROM areas";
      $result_areas = $Newconn->ExecuteQuery($query_areas);
          while ($row = $Newconn->GetRows($result_areas)) {?>
            <option value="<?php echo $row[0]?>"><?php echo $row[1] ?></option>
          <?php }
        $Newconn->SetFreeResult($result_areas);
        $Newconn->CloseConnection();
    ?>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>