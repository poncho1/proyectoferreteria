<?php

include "conexion.php"; 

$id=$_POST["id"];



$sql="DELETE FROM nuevosclientes WHERE id='$id' ";


$insercion=mysql_query($sql, $conexion);



if($insercion){


echo "Datos eliminados correctamente";  

}else{
  

echo "Error al eliminar los datos: ".mysql_error();


}


mysql_close($conexion);


?>
