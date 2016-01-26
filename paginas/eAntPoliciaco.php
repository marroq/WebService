<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select descripcion,comisariaid,dpi from AntPoliciacos";
    $sql = $sql . " where policiacoid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $descripcion = $row["descripcion"];
        $comisariaid = $row["comisariaid"];
        $involucrado = $row["dpi"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Antecedente Policiaco</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='uAntPoliciaco.php'>
        <input type="hidden" name="antecedente" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Involucrado</label>
            <div class="col-sm-5">
        <select name="involucrado" class="form-control">
            <?PHP
                $sql = "select dpi from Involucrado";
                $sql = $sql . " order by dpi";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $texto = "";
                    if ($involucrado == $row["dpi"])
                    {
                        $texto = " selected";
                    }
                    $dpi=$row["dpi"];
                    $persona = file_get_contents("http://localhost/proyecto/paginas/resultpersona.php?dpi=" . $dpi);
                    $datos = json_decode($persona);
                    foreach($datos as $dato) {
                        if(isset($dato->nombre))    {$nombre = $dato->nombre;       } else {$nombre=$row["dpi"];        }
                        if(isset($dato->apellido))  {$apellido = $dato->apellido;   } else {$apellido="";               }
                    }
                    echo "<option value='" . $row["dpi"] . "'" . $texto . ">";
                    echo $nombre . " " . $apellido . "</option>";
                }
            ?>
        </select></div></div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Descripcion</label>
            <div class="col-sm-5">
                <input type="text" name="descripcion" value="<?PHP echo $descripcion; ?>" class="form-control" placeholder="Descripcion" required>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Comisaria</label>
            <div class="col-sm-5">
        <select name="comisaria" class="form-control">
            <?PHP
                $sql = "select comisariaid, nombre from Comisarias";
                $sql = $sql . " order by nombre";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $texto = "";
                    if ($comisariaid == $row["comisariaid"])
                    {
                        $texto = " selected";
                    }
                    echo "<option value='" . $row["comisariaid"] . "'" . $texto . ">";
                    echo $row["nombre"] . "</option>";
                }
            ?>
        </select></div></div>

        <table>
        <tr><td><b>Delitos</b></td><td>
        <?PHP
            $sql = "select dp.delitoid, dp.descripcion, p.delitoid as p2, p.fecha from DelitoPoliciacos dp left outer join Policiacos p";
            $sql = $sql . " on dp.delitoid = p.delitoid";
            $sql = $sql . " and p.policiacoid= " . $_POST["id"];
            $sql = $sql . " order by dp.descripcion";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result))
            {
                $fecha=$row["fecha"];
                $texto="";
                if (!is_null($row["p2"]))
                {
                    $texto = "checked";
                }
                echo "<input type='checkbox' name='delito[]' value='" . $row["delitoid"] . "' " . $texto .">";
                echo $row["descripcion"] . "<input type='text' name='fechaAn[]' value=$fecha><br>";
            }
        ?>
        <br></td></tr>
        </table>
        
        <input type='submit' class="btn btn-success" value='Grabar'> <br><br>
        <button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
    </form>
</div>
</body>
</html>
<?PHP
    include("../BD/conexionf.php");
?>