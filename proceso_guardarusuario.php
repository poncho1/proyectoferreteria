<?php
        include "conexion1.php";
        $nombre=$_POST["Nombre"];
        $apellido=$_POST["Apellido"];
        $usuario=$_POST["Usuario"];
        $password=$_POST["Password"];
        
        $query="INSERT INTO usuarios(Nombre,Apellido,Usuario,Password) VALUES('$nombre','$apellido','$usuario','$password')";
                 $resultado= $conexion->query($query);
        
        if ($resultado){
           header("Location:login.php");
        }
        else {
            echo 'no se inserto';  
        }

        ?>
