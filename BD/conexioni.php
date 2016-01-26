<?PHP
	$con = mysql_connect("127.0.0.1","Lab","12345");

	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("Proyecto",$con);
?>
