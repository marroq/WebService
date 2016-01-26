<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Delito Penal Modificado</b></font><br>
        <?PHP
                $sql="update DelitoPenales set";
                $sql = $sql . " descripcion = '" . $_POST["descripcion"] . "'";
                $sql = $sql . " where delitoid = " . $_POST["delito"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bDelPenal.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
