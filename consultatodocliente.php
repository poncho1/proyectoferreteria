<?php 
 include "conexion.php";
 
$sql="SELECT * FROM nuevosclientes";
 
$resp=mysql_query($sql,$conexion);
 
 
$datos=array();
 
 

if($resp){
  
$i=0;
  
while($fila=mysql_fetch_assoc($resp)){
    
 $datos[$i]=$fila;
    
$i=$i+1;
  
}
 
}else{
  
echo "Error al procesar la consulta".mysql_error(); 
 
}
 
mysql_close($conexion);
 
echo json_encode($datos);

?>