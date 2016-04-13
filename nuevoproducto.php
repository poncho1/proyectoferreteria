<!DOCTYPE HTML>
<head>

    <title>
        Nuevo producto </title>
</head>
<body> 
<center><br><br><br>
    <form action="proceso_guardarproducto.php" method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="codigo" placeholder="CODIGO" value=""/><br/><br/>
        <input type="text" REQUIRED name="clave" placeholder="CLAVE" value=""/><br/><br/>
        <input type="text" REQUIRED name="nombre" placeholder="NOMBRE DEL PRODUCTO" value=""/><br/><br/>
        <input type="text" REQUIRED name="marca" placeholder="MARCA DEL PRODUCTO" value=""/><br/><br/>
        <input type="text" REQUIRED name="medida" placeholder="MEDIDA" value=""/><br/><br/>
        <input type="text" REQUIRED name="pproveedor" placeholder="PRECIO PROVEEDOR" value=""/><br/><br/>
        <input type="text" REQUIRED name="ppublico" placeholder="PRECIO PUBLICO" value=""/><br/><br/>
        <input type="text" REQUIRED name="descripcion" placeholder="DESCRIPCION" value=""/><br/><br/>
        <input type="file" REQUIRED name="imagen"/><br><br>
        <input type="submit" value="Aceptar"/>
    </form>
</center>
</body>
</html>
