<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select direccion,zona,telefono from Sedes";
    $sql = $sql . " where sedeid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $direccion = $row["direccion"];
        $zona = $row["zona"];
        $telefono = $row["telefono"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Sede</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='uSedes.php'>
        <input type="hidden" name="sedeid" value="<?PHP echo $_POST["id"];?>"><br>

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
            <label class="col-sm-4 control-label">Telefono</label>
            <div class="col-sm-5">
                <input type="text" name="telefono" value="<?PHP echo $telefono; ?>" class="form-control" placeholder="Telefono" required>
        </div>
        </div>

        <input type='submit' class="btn btn-success" value='Grabar'> <br><br>
        <button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
    </form>
</div>
</body>
</html>
<?PHP
    include("../BD/conexionf.php");
?>