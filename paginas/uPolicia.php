<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Policia Modificado</b></font><br>
        <?PHP
                $sql="update Policias set";
                //$sql = $sql . " dpi = '" . $_POST["dpi"] . "',";
                $sql = $sql . " nombres = '" . $_POST["nombre"] . "',";
                $sql = $sql . " apellidos = '" . $_POST["apellido"] . "',";
                $sql = $sql . " fechaingreso = '" . $_POST["fechaingreso"] . "'";
                $sql = $sql . " where dpi = " . $_POST["dpi"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bPolicia.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
