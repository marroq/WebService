<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select usuario,password from Usuarios";
    $sql = $sql . " where userid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $usuario = $row["usuario"];
        $pass = $row["password"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Usuario</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='uUser.php'>
        <input type="hidden" name="userid" value="<?PHP echo $_POST["id"];?>"><br>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Usuario</label>
            <div class="col-sm-5">
                <input type="text" name="usuario" value="<?PHP echo $usuario; ?>" class="form-control" placeholder="Usuario" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Password</label>
            <div class="col-sm-5">
                <input type="password" name="pass" value="<?PHP echo $pass; ?>" class="form-control" placeholder="Password" required>
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
