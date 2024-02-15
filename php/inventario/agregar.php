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
////<<<creamos una instancia
$Newconn = new ConnectionMySQL();

///creamos conexion
$Newconn->CreateConnection();

$query="insert into inventario(Nombre, Descripcion, Serie, Color, FechaAd, TipoAd, Observaciones, Area) 
        values('$nombre','$descripcion', '$serie', '$color', '$fechaAd', '$tipoAd', '$observaciones', '$area')";
$result = $Newconn->ExecuteQuery($query);
if($result){
		$RowCount = $Newconn->GetCountAffectedRows();
		if ($RowCount > 0){
			echo "Query ejecutado exitosamente";
		}else{

			echo "<h2>Error al ejecutar la consulta</h2>";
		}
	}
	header("Location: inventario.php");

?>