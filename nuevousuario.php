<!DOCTYPE HTML>
<head>

    <title>
        Nuevo usuario </title>
</head>
<body> 
<center><br><br><br>
    <form action="proceso_guardarusuario.php" method="POST">
        <input type="text" REQUIRED name="Nombre" placeholder="NOMBRE" value=""/><br/><br/>
        <input type="text" REQUIRED name="Apellido" placeholder="Apellido" value=""/><br/><br/>
        <input type="text" REQUIRED name="Usuario" placeholder="Usuario" value=""/><br/><br/>
        <input type="password" REQUIRED name="Password" placeholder="Password" value=""/><br/><br/>
        <input type="submit" value="Aceptar"/>
    </form>
</center>
</body>
</html>
