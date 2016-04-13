<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar productos</title>
    </head>
    <body>
    <center> 
        <table border="2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Medida</th>
                    <th>Precio proveedor</th>
                    <th>Precio publico</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th colspan="2">Operacion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexion1.php';
                $query= "SELECT * FROM tabla_imagen";
                $resultado=$conexion->query($query);
                while($row = $resultado->fetch_assoc()){
                 ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['codigo']; ?></td>
                    <td><?php echo $row['clave']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['marca']; ?></td>
                    <td><?php echo $row['medida']; ?></td>
                    <td><?php echo $row['pproveedor']; ?></td>
                    <td><?php echo $row['ppublico']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><img height="90px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" /></td>
                    <th><a href="modificarproducto.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                    <th><a href="eliminarproducto.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                </tr>
                
                
                <?php
                }
       
        ?>
            </tbody>
        </table>
    </center>       
    </body>
</html>
