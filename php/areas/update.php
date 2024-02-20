<?php
require ("../../conexion/classConnectionMySQL.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();
// Creamos una nueva conexion
$NewConn->CreateConnection();
///Realiza la insecion de datos
echo $query="UPDATE areas 
                SET Nombre = '$nombre', Ubicacion = '$ubicacion' 
                    WHERE id = $id";
$result=$NewConn->ExecuteQuery($query);
    if($result){
        $RowCount =  $NewConn->GetCountAffectedRows();
        if($RowCount > 0){
            echo "Query ejecutado exitosamente<br/>";
			header("Location: areas.php");
			header('Location: areas.php');
        }
    }else{
        echo "<h3>Error al ejecutar la consulta</h3>";
    }
?>