<?php

require ("../../conexion/classConnectionMySQL.php");
$nombre = $_POST['name'];
$ubicacion = $_POST['locat'];
////<<<creamos una instancia
$Newconn = new ConnectionMySQL();

///creamos conexion
$Newconn->CreateConnection();

$query="insert into areas(Nombre, Ubicacion) values('$nombre','$ubicacion')";
$result = $Newconn->ExecuteQuery($query);
if($result){
		$RowCount = $Newconn->GetCountAffectedRows();
		if ($RowCount > 0){
			echo "Query ejecutado exitosamente";
		}else{

			echo "<h2>Error al ejecutar la consulta</h2>";
		}
	}
	header("Location: areas.php");

?>