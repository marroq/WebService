<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Comisaria Modificado</b></font><br>
        <?PHP
                $sql="update Comisarias set";
                $sql = $sql . " nombre = '" . $_POST["nombre"] . "',";
                $sql = $sql . " direccion = '" . $_POST["direccion"] . "',";
                $sql = $sql . " zona = " . $_POST["zona"] . ",";
                $sql = $sql . " dpi = " . $_POST["encargado"];
                $sql = $sql . " where comisariaid = '" . $_POST["comisaria"] . "'";
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bComisarias.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
