<?php
require ("../../conexion/classConnectionMySQL.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$serie = $_POST['serie'];
$color = $_POST['color'];
$fechaAd = $_POST['fechaAd'];
$tipoAd = $_POST['tipoAd'];
$observaciones = $_POST['observaciones'];
// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();
// Creamos una nueva conexion
$NewConn->CreateConnection();
///Realiza la insecion de datos a la base de datos
echo $query="UPDATE inventario 
                SET Nombre = '$nombre', Descripcion = '$descripcion', Serie = '$serie', Color = '$color', FechaAd = '$fechaAd',  TipoAd = '$tipoAd', Observaciones = '$observaciones'
                    WHERE ID = $id";
$result=$NewConn->ExecuteQuery($query);
    if($result){
        $RowCount =  $NewConn->GetCountAffectedRows();
        if($RowCount > 0){
            echo "Query ejecutado exitosamente<br/>";
			header("Location: inventario.php");
			header('Location: inventario.php');
        }
    }else{
        echo "<h3>Error al ejecutar la consulta</h3>";
    }
?>