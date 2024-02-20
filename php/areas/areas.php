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
      <a href="../../index.html">Inicio</a>
    </nav>
</header>
<div class="container-fluid row">
<form class="registro col-4 p-3" method="POST" action="agregar.php">
	<h3 class="text-center alert alert-secondary">Registro de areas</h3>
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

<div class="tblAreas col-8 p-4">
<?php
require("../../conexion/classConnectionMySQL.php");
$Newconn = new ConnectionMySQL();
$Newconn->CreateConnection();

echo "
<table class='table'>
  <thead class='tblHead bg-info'>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Ubicacion</th>
      <th scope='col'></th>
    </tr>
  </thead>
  <tbody>";

$query = "SELECT * FROM areas";
$result = $Newconn->ExecuteQuery($query);
if ($result) {
    while ($row = $Newconn->GetRows($result)) {
        echo "<tr>
                <th scope='row'>" . $row[0] . "</th>
                <td>" . $row[1] . "</td>
                <td>" . $row[2] . "</td>
                <td>
					<a class='btn btn-small btn-warning' href='editar.php?id=$row[0]'><i class='fa-solid fa-pen-to-square'></i></a>
					<a class='btn btn-small btn-danger' href='eliminar.php?id=$row[0]'><i class='fa-solid fa-trash'></i></a>
				</td>
              </tr>";
    }
    $Newconn->SetFreeResult($result);
} else {
    echo "<tr><td colspan='5'><h1>Error al conectar al inventario</h1></td></tr>";
}

echo "
  </tbody>
</table>";
?>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>