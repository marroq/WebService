<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Antecedente Policiaco Eliminado</b></font>
        <?PHP
                $sql="delete from Policiacos where policiacoid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from AntPoliciacos where policiacoid= " . $_POST["id"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bAntPoliciaco.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
