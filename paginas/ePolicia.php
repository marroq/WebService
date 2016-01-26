roq<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select dpi,nombres,apellidos,fechaingreso from Policias";
    $sql = $sql . " where dpi= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $dpi = $row["dpi"];
        $nombres = $row["nombres"];
        $apellidos = $row["apellidos"];
        $fechaingreso = $row["fechaingreso"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Policia</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='uPolicia.php'>
        <div class="form-group">
            <label class="col-sm-4 control-label">DPI</label>
            <div class="col-sm-5">
                <input type="text" name="dpi" value="<?PHP echo $_POST["id"]; ?>" class="form-control" placeholder="DPI" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nombres</label>
            <div class="col-sm-5">
                <input type="text" name="nombre" value="<?PHP echo $nombres; ?>" class="form-control" placeholder="Nombres" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Apellidos</label>
            <div class="col-sm-5">
                <input type="text" name="apellido" value="<?PHP echo $apellidos; ?>" class="form-control" placeholder="Apellidos" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Fecha Ingreso PNC</label>
            <div class="col-sm-5">
                <input type="text" name="fechaingreso" value="<?PHP echo $fechaingreso; ?>" class="form-control" placeholder="YYYY-mm-dd" required>
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