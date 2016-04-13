<?php
        include "conexion1.php";
        $codigo=$_POST["codigo"];
        $clave=$_POST["clave"];
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"]; 
        $medida=$_POST["medida"];
        $pproveedor=$_POST["pproveedor"];
        $ppublico=$_POST["ppublico"];
        $descripcion=$_POST["descripcion"];
        $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        
        $query="INSERT INTO tabla_imagen(codigo,clave,nombre,marca,medida,pproveedor,ppublico,descripcion,imagen) VALUES('$codigo','$clave','$nombre','$marca','$medida','$pproveedor','$ppublico','$descripcion','$imagen')";
                 $resultado= $conexion->query($query);
        
        if ($resultado){
           header("Location:mostrarproducto.php");
        }
        else {
            echo 'no se inserto';  
        }

        ?>
