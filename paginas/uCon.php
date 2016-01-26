<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Conexion Modificada</b></font><br>
        <?PHP
                $sql="update Conexion set";
                $sql = $sql . " ip = '" . $_POST["ip"] . "',";
                $sql = $sql . " puerto = " . $_POST["puerto"] . ",";
                $sql = $sql . " extension = '" . $_POST["extension"] . "',";
                $sql = $sql . " rol = '" . $_POST["rol"] . "'";
                $sql = $sql . " where conexionid = " . $_POST["conexion"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='config.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
