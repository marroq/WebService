<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Usuario Modificado</b></font><br>
        <?PHP
                $sql="update Usuarios set";
                $sql = $sql . " usuario = '" . $_POST["usuario"] . "',";
                $sql = $sql . " password = '" . $_POST["pass"] . "'";
                $sql = $sql . " where userid = " . $_POST["userid"];
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
