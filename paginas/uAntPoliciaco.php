<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Antecedente Policiaco Modificado</b></font><br>
        <?PHP
                $sql="update AntPoliciacos set";
                $sql = $sql . " descripcion = '" . $_POST["descripcion"] . "',";
                $sql = $sql . " comisariaid = " . $_POST["comisaria"] . ",";
                $sql = $sql . " dpi = '" . $_POST["involucrado"] . "'";
                $sql = $sql . " where policiacoid = '" . $_POST["antecedente"] . "'";
                $result = mysql_query($sql);
                
                $sql = "delete from Policiacos where policiacoid = " . $_POST["antecedente"];
                $result = mysql_query($sql);
                if (isset($_POST['delito']))
                {
                        for ($i=0,$j=0;$i<count($_POST['fechaAn']);$i++) {
                                if (!$_POST['fechaAn'][$i]==null){
                                        $sql = "insert into Policiacos(policiacoid,delitoid,fecha)";
                                        $sql = $sql . " values(" . $_POST['antecedente'] . ", " . $_POST['delito'][$j] . ", '" . $_POST['fechaAn'][$i] . "')";
                                        $result = mysql_query($sql);
                                        $j++;
                                }
                        }
                }
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='bAntPoliciaco.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
