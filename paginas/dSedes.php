<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Sede Eliminada</b></font>
        <?PHP
                $sql="delete from Sedes where sedeid= " . $_POST["id"];
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
