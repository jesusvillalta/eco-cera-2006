<?php 

require_once('../Connections/ecocera.php');
$refe=$_GET['ref'];
mysql_select_db($database_ecocera, $ecocera);
$query_Recordset1 = "SELECT foto_es FROM productos where ref='$refe'";
$Recordset1 = mysql_query($query_Recordset1, $ecocera) or die(mysql_error());

while ($result_array = mysql_fetch_array($Recordset1)){
	header("Content-Type: image/jpeg");
	echo $result_array['foto_es'];
}

mysql_free_result($Recordset1);
?>