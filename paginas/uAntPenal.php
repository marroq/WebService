<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Antecedente Penal Modificado</b></font><br>
        <?PHP
                $sql="update AntPenales set";
                $sql = $sql . " descripcion = '" . $_POST["descripcion"] . "',";
                $sql = $sql . " sedeid = " . $_POST["sede"] . ",";
                $sql = $sql . " dpi = '" . $_POST["involucrado"] . "'";
                $sql = $sql . " where penalid = '" . $_POST["antecedente"] . "'";
                $result = mysql_query($sql);
                
                $sql = "delete from Penales where penalid = " . $_POST["antecedente"];
                $result = mysql_query($sql);
                if (isset($_POST['delito']))
                for ($i=0,$j=0;$i<count($_POST['fechaAn']);$i++) {
                        if (!$_POST['fechaAn'][$i]==null){
                                $sql = "insert into Penales(penalid,delitoid,fecha)";
                                $sql = $sql . " values(" . $_POST['antecedente'] . ", " . $_POST['delito'][$j] . ", '" . $_POST['fechaAn'][$i] . "')";
                                $result = mysql_query($sql);
                                $j++;
                        }
                }
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bAntPenal.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
