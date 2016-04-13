<?php
        include "conexion1.php";
        $id=$_REQUEST['id'];
        $codigo=$_POST["codigo"];
        $clave=$_POST["clave"];
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $medida=$_POST["medida"];
        $pproveedor=$_POST["pproveedor"];
        $ppublico=$_POST["ppublico"];
        $descripcion=$_POST["descripcion"];
        $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        
        $query="UPDATE tabla_imagen SET codigo='$codigo' , clave='$clave', nombre='$nombre', marca='$marca',medida='$medida', pproveedor='$pproveedor', ppublico='$ppublico', descripcion='$descripcion', imagen='$imagen' WHERE id='$id'";
                 $resultado= $conexion->query($query);
        
        if ($resultado){
       header("Location:mostrarproducto.php");
        }
        else {
            echo 'no se modifico';  
        }

        ?>
