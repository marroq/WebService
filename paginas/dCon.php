<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Delito Penal Eliminado</b></font>
        <?PHP
                $sql="delete from Conexion where conexionid= " . $_POST["id"];
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
