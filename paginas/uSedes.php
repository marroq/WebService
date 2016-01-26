<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Empleado Modificado</b></font><br>
        <?PHP
                $sql="update Sedes set";
                $sql = $sql . " direccion = '" . $_POST["direccion"] . "',";
                $sql = $sql . " zona = " . $_POST["zona"] . ",";
                $sql = $sql . " telefono = " . $_POST["telefono"];
                $sql = $sql . " where sedeid = " . $_POST["sedeid"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bSedes.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
