<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select ip,puerto,extension,rol from Conexion";
    $sql = $sql . " where conexionid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $ip = $row["ip"];
        $puerto = $row["puerto"];
        $extension = $row["extension"];
        $rol = $row["rol"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Conexion</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='uCon.php'>
        <input type="hidden" name="conexion" value="<?PHP echo $_POST["id"];?>"><br>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">IP</label>
            <div class="col-sm-5">
                <input type="text" name="ip" value="<?PHP echo $ip; ?>" class="form-control" placeholder="IP" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Puerto</label>
            <div class="col-sm-5">
                <input type="text" name="puerto" value="<?PHP echo $puerto; ?>" class="form-control" placeholder="Puerto" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Extension</label>
            <div class="col-sm-5">
                <input type="text" name="extension" value="<?PHP echo $extension; ?>" class="form-control" placeholder="Extension" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Rol</label>
            <div class="col-sm-5">
                <input type="text" name="rol" value="<?PHP echo $rol; ?>" class="form-control" placeholder="Rol" required>
        </div>
        </div>
        
        <input type='submit' class="btn btn-success" value='Grabar'> <br><br>
        <button type="button" class="btn btn-default" onClick="window.location='config.php';">Configuraciones</button>
    </form>
</div>
</body>
</html>
<?PHP
    include("../BD/conexionf.php");
?>
