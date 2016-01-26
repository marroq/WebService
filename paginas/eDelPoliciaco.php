<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select descripcion from DelitoPoliciacos";
    $sql = $sql . " where delitoid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $descripcion = $row["descripcion"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Delito Policiaco</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='uDelPoliciaco.php'>
        <input type="hidden" name="delito" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Descripcion</label>
            <div class="col-sm-5">
                <input type="text" name="descripcion" value="<?PHP echo $descripcion; ?>" class="form-control" placeholder="Descripcion" required>
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