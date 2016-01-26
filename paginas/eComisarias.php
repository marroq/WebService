<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select nombre, direccion, zona, dpi from Comisarias";
    $sql = $sql . " where comisariaid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $nombre = $row["nombre"];
        $direccion = $row["direccion"];
        $zona = $row["zona"];
        $dpi = $row["dpi"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Comisaria</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='uComisarias.php'>
        <input type="hidden" name="comisaria" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nombre</label>
            <div class="col-sm-5">
                <input type="text" name="nombre" value="<?PHP echo $nombre; ?>" class="form-control" placeholder="Nombre" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Direccion</label>
            <div class="col-sm-5">
                <input type="text" name="direccion" value="<?PHP echo $direccion; ?>" class="form-control" placeholder="Direccion" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Zona</label>
            <div class="col-sm-5">
                <input type="text" name="zona" value="<?PHP echo $zona; ?>" class="form-control" placeholder="Zona" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Encargado</label>
            <div class="col-sm-5">
        <select name="encargado" class="form-control">
            <?PHP
                $sql = "select dpi, nombres, apellidos from Policias";
                $sql = $sql . " order by nombres";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $texto = "";
                    if ($dpi == $row["dpi"])
                    {
                        $texto = " selected";
                    }
                    echo "<option value='" . $row["dpi"] . "'" . $texto . ">";
                    echo $row["nombres"] . " " . $row["apellidos"] . "</option>";
                }
            ?>
        </select></div></div>
        
        <input type='submit' class="btn btn-success" value='Grabar'> <br><br>
            <button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
    </form>
</div>
</body>
</html>
<?PHP
    include("../BD/conexionf.php");
?>