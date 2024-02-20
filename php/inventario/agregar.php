<?php

require ("../../conexion/classConnectionMySQL.php");
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$serie = $_POST['serie'];
$color = $_POST['color'];
$fechaAd = $_POST['fechaAd'];
$tipoAd = $_POST['tipoAd'];
$observaciones = $_POST['observaciones'];
$area = $_POST['area'];

$Newconn = new ConnectionMySQL();
$Newconn->CreateConnection();

$query_area_id = "SELECT id FROM areas WHERE Nombre = '$area'";
$result_area_id = $Newconn->ExecuteQuery($query_area_id);
$area_id = $result_area_id[0];
    // Consulta para insertar el nuevo producto en la tabla "inventario" utilizando el ID del área
    $query_insert = "INSERT INTO inventario (Nombre, Descripcion, Serie, Color, FechaAd, TipoAd, Observaciones, Area)
                     VALUES ('$nombre', '$descripcion', '$serie', '$color', '$fechaAd', '$tipoAd', '$observaciones', '$area_id')";

    // Ejecutar la consulta de inserción
    $result_insert = $Newconn->ExecuteNonQuery($query_insert);

    if($result_insert){
        echo "El producto ha sido insertado correctamente.";
		header("Location: inventario.php");
    } else {
        echo "Error al ejecutar la consulta de inserción.";
    }
	

?>