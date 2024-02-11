<?php

require ("../../conexion/classConnectionMySQL.php");
$id = $_POST['id'];
$nombre = $_POST['name'];
$ubicacion = $_POST['locat'];
////<<<creamos una instancia
$Newconn = new ConnectionMySQL();

///creamos conexion
$Newconn->CreateConnection();

$query="insert into Areas values('$id','$nombre','$ubicacion')";
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