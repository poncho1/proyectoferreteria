<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Modificar producto </title>
</head>
<body> 
    <?php
                include 'conexion1.php';
                $id=$_REQUEST['id'];
                $query= "SELECT * FROM tabla_imagen WHERE id='$id'";
                $resultado=$conexion->query($query);
                $row = $resultado->fetch_assoc();
                 ?>
<center><br><br><br>
    <form action="proceso_modificarproducto.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="codigo" placeholder="CODIGO" value="<?php echo $row['codigo'];?>"/><br/><br/>
        <input type="text" REQUIRED name="clave" placeholder="CLAVE" value="<?php echo $row['clave'];?>"/><br/><br/>
        <input type="text" REQUIRED name="nombre" placeholder="NOMBRE DEL PRODUCTO" value="<?php echo $row['nombre'];?>"/><br/><br/>
        <input type="text" REQUIRED name="marca" placeholder="MARCA DEL PRODUCTO" value="<?php echo $row['marca'];?>"/><br/><br/>
        <input type="text" REQUIRED name="medida" placeholder="MEDIDA" value="<?php echo $row['medida'];?>"/><br/><br/>
        <input type="text" REQUIRED name="pproveedor" placeholder="PRECIO PROVEEDOR" value="<?php echo $row['pproveedor'];?>"/><br/><br/>
        <input type="text" REQUIRED name="ppublico" placeholder="PRECIO PUBLICO" value="<?php echo $row['ppublico'];?>"/><br/><br/>
        <input type="text" REQUIRED name="descripcion" placeholder="DESCRIPCION" value="<?php echo $row['descripcion'];?>"/><br/><br/>
        <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" /><br/><br/>
        <input type="file"  REQUIRED name="imagen"/><br><br>
        <input type="submit" value="Aceptar"/>
    </form>
</center>
</body>
</html>