<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Antecedente Penal Eliminado</b></font>
        <?PHP
                $sql="delete from Penales where penalid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from AntPenales where penalid= " . $_POST["id"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bAntPenal.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
